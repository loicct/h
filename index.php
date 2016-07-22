<!DOCTYPE html>
<html>

  <head>


		<meta charset="utf-8">

		<title>CFL_Parallax</title>
		<meta name="description" content="">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


		<!-- Vue Mobile optimisé -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">

		<!-- Inclusion de Modernizr-->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>



    <link rel="stylesheet" href="includes/css/styles.css">
    <meta charset="utf-8">

  </head>

  <body>

    <?php include('includes/php/navbar.php') ?>

    <?php include('includes/php/accueil.php') ?>

    <?php include('includes/php/footer.php') ?>

    <!--jQuery-->
		<script src="http://code.jquery.com/jquery.js"></script>

		<!--jQuery mode offline -->
		<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>

		<!-- Bootstrap JS -->
		<script src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Custom JS -->
		<script src="includes/js/script.js"></script>

    <script src="deploy/parallax.min.js"></script>
    <script>
      var scene = document.getElementById('scene');
      var parallax = new Parallax(scene);
    </script>

  </body>

</html>
