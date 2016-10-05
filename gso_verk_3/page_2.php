<?php include('inc/random_image.php');
      include ('inc/title.php'); ?>
<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<title>Pics and rand<?php echo "&#8212;{$title}"?></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/stilsida.css">
</head>

<body>

<?php
include('inc/menu.php');
?>
	 <main>
		 <h2>A </h2>
		 <p>One of the benefits of using PHP . . .</p>
		 <figure>
		 <div class="myndir">
		 <img src=<?= $images[0]['file'] ?> alt="random image"
		 width="350" height="237">
		 <figcaption><?= $images[0]['caption'] ?></figcaption>
		 <img src=<?= $images[1]['file'] ?> alt="random image"
		 width="350" height="237">
		 <figcaption><?= $images[1]['caption'] ?></figcaption>
		 </div>
		 </figure>
		 <p>Ut enim ad minim veniam, quis nostrud . . .</p>
		 <p>Eu fugiat nulla pariatur. Ut labore et dolore . . .</p>
		 <p>Sed do eiusmod tempor incididunt ullamco . . .</p>
	 </main>

	 <?php include('inc/footer.php'); ?>
</body>

</html>
