<?php $this->load->view('partials/header'); ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('<?php echo base_url(); ?>./assets/assets/img/contact-bg.jpg')">
	<div class="container position-relative px-4 px-lg-5">
		<div class="row gx-4 gx-lg-5 justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-7">
				<div class="page-heading">
					<h1>Add New Blog ++</h1>
					<span class="subheading">Go ahead and add that new blog, and let's see what happens!</span>
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
				<?php
				$error_message = $this->session->flashdata('error');
				if (!empty($error_message)) {
					echo "<div class='alert alert-danger mt-1'>$error_message</div>";
				}
				echo validation_errors('<div class="alert alert-danger mt-2">', '</div>');
				?>
				<p>Hey, I was just wondering what kind of blog I should make this time?</p>
				<div class="my-5">
					<!-- <form id="contactForm" action="<?php echo site_url('v1/blog/store'); ?>" method="post" enctype="multipart/form-data"> -->
					<?php echo form_open_multipart('v1/blog/store'); ?>
					<div class="form-floating">
						<input class="form-control" id="title" name="title" type="text" placeholder="Enter the title..."
							data-sb-validations="required" value="<?php echo set_value('title'); ?>" />
						<label for="title">Title</label>
						<div class="invalid-feedback" data-sb-feedback="title:required">A title is required.</div>
					</div>
					<div class="form-floating">
						<input class="form-control" id="url" name="url" type="text" value="<?php echo set_value('url'); ?>"
							placeholder="Enter the url..." data-sb-validations="required" />
						<label for="url">Url</label>
						<div class="invalid-feedback" data-sb-feedback="url:required">A url is required.</div>
					</div>
					<div class="form-floating">
						<input class="form-control" id="cover" name="cover" type="file" placeholder="Enter the cover path..."
							data-sb-validations="required" />
						<label for="cover">Cover</label>
						<div class="invalid-feedback" data-sb-feedback="cover:required">A cover is required.</div>
					</div>
					<!-- <div class="form-floating">
						<input class="form-control" id="date" name="date" type="date" placeholder="Enter the date path..."
							data-sb-validations="required" />
						<label for="date">Date</label>
						<div class="invalid-feedback" data-sb-feedback="date:required">A date is required.</div>
					</div> -->
					<div class="form-floating">
						<textarea class="form-control" id="message" name="content" placeholder="Enter your content here..."
							style="height: 12rem" data-sb-validations="required"><?php echo set_value('content') ?></textarea>
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
					<!-- </form> -->
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php $this->load->view('partials/footer'); ?>



<!-- <html>

<head>
	<meta charset="utf-8">
	<title>Create Blog</title>
</head>

<body>
	<h1>Create Blog</h1>
	<form action="<?php echo site_url('v1/blog/store'); ?>" method="post">
		<input type="text" name="title" placeholder="Title">
		<br>
		<input type="text" name="content" placeholder="Content">
		<br>
		<input type="text" name="url" placeholder="url">
		<br>
		<input type="text" name="cover" placeholder="cover">
		<br>
		<input type="date" name="date" placeholder="cover">
		<br>
		<button type="submit">Submit</button>
	</form>
</body>

</html> -->
