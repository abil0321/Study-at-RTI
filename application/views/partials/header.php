<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Clean Blog - Start Bootstrap Theme</title>

	<link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/assets/bola.ico'); ?>" />
	<!-- // NOTE: Bisa menggunakan "echo base_url();, link path nya diletakkan didalam "base_url()", yang dimulai dengan "./assets" dan dilanjutkan dengan path file nya "css/styles.css" jadi "base_url('assets/assets/favicon.ico')"  -->

	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

	<!-- SweetAlert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
		type="text/css" />
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
		rel="stylesheet" type="text/css" />

	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="<?php echo base_url(); ?>./assets/css/styles.css" rel="stylesheet" />
	<!-- // NOTE: Bisa menggunakan "echo base_url();" lalu link path nya, yang dimulai dengan "./assets" dan dilanjutkan dengan path file nya "css/styles.css" -->
</head>

<body>
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
		<div class="container px-4 px-lg-5">
			<a class="navbar-brand" href="<?php echo site_url('/'); ?>">Abil's Blog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ms-auto py-4 py-lg-0 align-items-center">
					<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo site_url('/'); ?>">Home</a>
					</li>
					<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a></li>
					<li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Contact</a></li>
					<?php
					$session = $this->session->userdata('username');
					if (isset($session)): ?>
						<!-- <li class="nav-item">
							<a href="<?php echo site_url('v1/blog-create'); ?>" class="nav-link px-lg-3 py-3 py-lg-4">
								Create New Blog ++
							</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo site_url('v1/blog-create'); ?>">Create New Blog
								++</a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-lg-3 py-3 py-lg-4 logout-link"
								href="<?php echo site_url('v1/authentication/logout'); ?>">
								<span class="btn-danger btn py-2 px-3 rounded-2">Logout</span>
							</a>
						</li>
					<?php else: ?>
						<li class="nav-item">
							<a class="nav-link px-lg-3 py-3 py-lg-4" href="<?php echo site_url('v1/authentication/login'); ?>">
								<span class="btn-primary btn py-2 px-3 rounded-2">Login</span>
							</a>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>

	<script>
		document.addEventListener('DOMContentLoaded', function () {

			const logoutLink = document.querySelector('.logout-link');

			logoutLink.addEventListener('click', (e) => {

				// NOTE: agar logoutLink tidak berpindah atau langsung di eksekusi "e.preventDefault();"
				e.preventDefault();

				const logoutUrl = logoutLink.href;
				Swal.fire({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, Logout!'
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = logoutUrl;
					}
				})
			})

		});
	</script>
