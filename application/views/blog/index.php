<html>

<head>
	<meta charset="utf-8">
	<title>Blog</title>
</head>

<body>
	<h1>Blog Terbaru</h1>
	<?php foreach ($blogs as $key => $blog) : ?>
		<h2>
			<?php echo $blog['title'] ?>
		</h2>
		<p>
			<?php echo $blog['content']; ?>
		</p>
	<?php endforeach ?>
</body>

</html>