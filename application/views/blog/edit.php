<?php $this->load->view('partials/header'); ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('<?php echo base_url(); ?>./assets/assets/img/contact-bg.jpg')">
	<div class="container position-relative px-4 px-lg-5">
		<div class="row gx-4 gx-lg-5 justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-7">
				<div class="page-heading">
					<h1>Fix and Update: <?php echo $blog['title'] ?></h1>
					<span class="subheading">Please check your stuff and see if there's anything you can do to fix it bro
						🙃</span>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Main Content-->
<main class="mb-4">
	<div class="container px-4 px-lg-5">
		<div class="row gx-4 gx-lg-5 justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-7">
				<p>Hey, I was just wondering: should I go ahead and fix it, or should I hold off?</p>
				<?php echo validation_errors('<div class="alert alert-danger mt-2">', '</div>'); ?>
				<div class="my-5">
					<form id="contactForm" action="<?php echo site_url('v1/blog/update/' . $blog['id']); ?>" method="post"
						enctype="multipart/form-data">
						<div class="form-floating">
							<input class="form-control" id="title" name="title" type="text"
								value="<?php echo set_value('title', $blog['title']) ?>" placeholder="Enter the title..."
								data-sb-validations="required" />
							<label for="title">Title</label>
							<div class="invalid-feedback" data-sb-feedback="title:required">A title is required.</div>
						</div>
						<div class="form-floating">
							<input class="form-control" id="url" name="url" type="text"
								value="<?php echo set_value('url', $blog['url']) ?>" placeholder="Enter the url..."
								data-sb-validations="required" />
							<label for="url">Url</label>
							<div class="invalid-feedback" data-sb-feedback="url:required">A url is required.</div>
						</div>
						<div class="form-floating mt-2">
							<?php echo form_hidden('old_cover', $blog['cover']); ?>
							<img src="<?php echo base_url() . './assets/assets/covers/' . $blog['cover'] ?>" height="100" />
							<input class="form-control" id="cover" name="cover" type="file" placeholder="Enter the cover path..."
								data-sb-validations="required" />
							<label for="cover">Cover</label>
							<div class="invalid-feedback" data-sb-feedback="cover:required">A cover is required.</div>
						</div>
						<!-- <div class="form-floating" hidden>
							<input class="form-control" id="date" name="date"
								value="<?php echo date('Y-m-d H:i:s', strtotime($blog['date'])) ?>" type="date"
								placeholder="Enter the date path..." data-sb-validations="required" />
							<label for="date">Date</label>
							<div class="invalid-feedback" data-sb-feedback="date:required">A date is required.</div>
						</div> -->
						<div class="form-floating">
							<textarea class="form-control" id="message" name="content" placeholder="Enter your content here..."
								style="height: 12rem"
								data-sb-validations="required"><?php echo set_value('content', $blog['content']) ?></textarea>
							<label for="message">Content</label>
							<div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
						</div>
						<br />
						<!-- Submit success message-->
						<!---->
						<!-- This is what your users will see when the form-->
						<!-- has successfully submitted-->
						<div class="d-none" id="submitSuccessMessage">
							<div class="text-center mb-3">
								<div class="fw-bolder">Form submission successful!</div>
								To activate this form, sign up at
								<br />
								<a
									href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
							</div>
						</div>
						<!-- Submit error message-->
						<!---->
						<!-- This is what your users will see when there is-->
						<!-- an error submitting the form-->
						<div class="d-none" id="submitErrorMessage">
							<div class="text-center text-danger mb-3">Error sending message!</div>
						</div>
						<!-- Submit Button-->
						<button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</main>

<script>
	document.addEventListener('DOMContentLoaded', function () {
		const form = document.getElementById('contactForm');

		form.addEventListener('submit', function (event) {
			// 1. Mencegah form terkirim instan
			event.preventDefault();

			// 2. Tampilkan HANYA modal KONFIRMASI
			Swal.fire({
				title: "You sure about that?",
				text: "Hey, just a friendly reminder to make sure your blog is looking its best! 😊",
				icon: "warning",
				showCancelButton: true,
				confirmButtonColor: "#3085d6",
				cancelButtonColor: "#d33",
				confirmButtonText: "Yes, go ahead!",
				cancelButtonText: "I'm still not sure.",
				reverseButtons: true
			}).then((result) => {
				// 3. Jika dikonfirmasi, langsung submit form
				if (result.isConfirmed) {
					// Modal loading DIHAPUS. Langsung submit.
					form.submit();
				} else if (result.dismiss === Swal.DismissReason.cancel) {
					// 4. Jika batal
					Swal.fire({
						title: "Canceled",
						text: "Your blog is safe.",
						icon: "error"
					});
				}
			});
		});
	});


</script>

<?php $this->load->view('partials/footer'); ?>


<!-- <html>

<head>
	<meta charset="utf-8">
	<title>Update Blog</title>
</head>

<body>
	<h1>Update Blog <?php echo $blog['title'] ?> </h1>
	<form action="<?php echo site_url('v1/blog/update/' . $blog['id']); ?>" method="post">
		<input type="text" name="title" placeholder="Title" value="<?php echo $blog['title'] ?>">
		<br>
		<textarea name="content" placeholder="Content"><?php echo $blog['content'] ?></textarea>
		<br>
		<input type="text" name="url" placeholder="url" value="<?php echo $blog['url'] ?>">
		<br>
		<input type="text" name="cover" placeholder="cover" value="<?php echo $blog['cover'] ?>">
		<br>
		<input type="date" name="date" placeholder="cover" value="<?php echo date('Y-m-d', strtotime($blog['date'])) ?>">
		<br>
		<button type="submit">Submit</button>
	</form>
</body>

</html> -->
