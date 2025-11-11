<html>

<head>
	<meta charset="utf-8">
	<title>Blog</title>
</head>

<body>
	<h1>Blog Terbaru</h1>
	<a href="<?php echo site_url('v1/blog/create/'); ?>">Create</a>

	<form>
		<input type="text" name="find" placeholder="Keyword">
		<button type="submit">Search</button>
	</form>

	<?php foreach ($blogs as $key => $blog): ?>
		<h2>
			<!-- // NOTE: 1 Bisa langsung implementasi pada file config/autoload.php
			- untuk set base_url berada di file application/config/config.php. // TODO: Pada bagian $config['base_url'] = ''; isi bagian '' dengan 'http://localhost/07_RTI/study_code/';
			- set site url berada di file application/config/autoload.php. // TODO: Pada bagian $autoload['helper'] = array(); isi bagian array() dengan 'url', menjadi $autoload['helper'] = array('url'); -->

			<!-- // NOTE: 2 Bisa dengan menambahkan construct helper dan database pada controller 
			 public function __construct()
					{
						parent::__construct();

						$this->load->database();
						$this->load->helper('url');
					}
			- bagian base_url berada di file application/config/config.php tetap harus di set // TODO: Pada bagian $config['base_url'] = ''; isi bagian '' dengan 'http://localhost/07_RTI/study_code/';
			-->
			<a href="<?php echo site_url('v1/blog/show/' . $blog['id']); ?>"><?php echo $blog['title'] ?></a>
		</h2>
		<p>
			<?php echo $blog['content']; ?>
		</p>
		<br>
		<a href="<?php echo site_url('v1/blog/edit/' . $blog['id']); ?>">Edit</a>
		<a href="<?php echo site_url('v1/blog/destroy/' . $blog['id']); ?>">Delete</a>
	<?php endforeach ?>
</body>

</html>
