<?php $this->load->view('partials/header'); ?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('<?php echo base_url("assets/assets/img/home-bg.jpg"); ?>')">
	<div class="container position-relative px-4 px-lg-5">
		<div class="row gx-4 gx-lg-5 justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-7">
				<div class="site-heading">
					<h1>A few things to note each day</h1>
					<span class="subheading">You know, when I feel like making it...</span>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
	<div class="row gx-4 gx-lg-5 justify-content-center">
		<div class="col-md-10 col-lg-8 col-xl-7">

			<form class="d-flex">
				<input type="text" name="find" placeholder="Keyword" class="form-control">
				<button type="submit" class="btn btn-dark">Search</button>
			</form>

			<?php
			$success_message = $this->session->flashdata('success');
			// if (!empty($success_message)) {
			// 	echo "<div class='alert alert-success mt-2'>$success_message</div>";
			// }
			
			$error_message = $this->session->flashdata('error');
			// if (!empty($error_message)) {
			// 	echo "<div class='alert alert-danger mt-2'>$error_message</div>";
			// }
			// echo $this->session->userdata('username');
			?>
			<?php if (!empty($success_message)): ?>
				<script>
					Swal.fire({
						title: "Success!",
						text: "<?php echo $success_message; ?>",
						icon: "success"
					});
				</script>
			<?php endif; ?>

			<?php if (!empty($error_message)): ?>
				<script>
					Swal.fire({
						title: "Error!",
						text: "<?php echo $error_message; ?>",
						icon: "error"
					});
				</script>
			<?php endif; ?>

			<?php foreach ($blogs as $key => $blog): ?>
				<!-- Post preview-->
				<div class="post-preview">
					<a href="<?php echo site_url('v1/blog/show/' . $blog['id']); ?>">
						<h2 class="post-title"><?php echo $blog['title'] ?></h2>
						<h3 class="post-subtitle"><?php echo $blog['url']; ?></h3>
					</a>
					<p class="post-meta">
						Posted by on <?php echo date('d F Y', strtotime($blog['date'])) ?>
						<?php
						$session = $this->session->userdata('username');
						if (isset($session)): ?>
							<a href="<?php echo site_url('v1/blog/edit/' . $blog['id']); ?>" class="link-primary">Edit</a>
							<a href="<?php echo site_url('v1/blog/destroy/' . $blog['id']); ?>" class="link-danger delete-link">Delete</a>
						<?php endif; ?>
					</p>
				</div>
				<!-- Divider-->
				<hr class="my-4" />
			<?php endforeach ?>
			<!-- Pager-->
			<?php echo $this->pagination->create_links(); ?>
			<!-- <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts
					→</a></div> -->
		</div>
	</div>
</div>
<script>
	document.addEventListener('DOMContentLoaded', function () {

		const deleteLink = document.querySelectorAll('.delete-link');

		deleteLink.forEach((link) => {
			link.addEventListener('click', (e) => {

				// NOTE: agar link tidak berpindah atau langsung di eksekusi "e.preventDefault();"
				e.preventDefault();

				const deleteUrl = link.href;
				Swal.fire({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = deleteUrl;
					}
				})
			})
		})
	});

</script>
<!-- Footer-->
<?php $this->load->view('partials/footer'); ?>
