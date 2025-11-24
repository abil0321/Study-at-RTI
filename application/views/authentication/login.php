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
		<div class="col-md-10 col-lg-8 col-xl-7 mb-5" method="post">
			<?php
			echo $this->session->flashdata('message');
			?>

			<form action="<?php echo site_url('v1/authentication/login'); ?>" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
				</div>

				<div class="form-group mt-4 mb-4">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
				</div>

				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
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
