<!DOCTYPE html>
<html>

  <head>


		<meta charset="utf-8">

		<title>Crush_keyboard</title>
		<meta name="description" content="">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


		<!-- Vue Mobile optimisé -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Bootstrap CSS -->
		<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap-glyphicons.css" rel="stylesheet">

		<!-- Inclusion de Modernizr-->
		<script src="../js/modernizr-2.6.2.min.js"></script>



    <link rel="stylesheet" href="../css/styles.css">
    <meta charset="utf-8">

  </head>

  <body>
    <div class="container2" id="main">

      <?php include('navbar.php') ?>

      <div class="global">

        <div class="scene" id="scene">

          <ul>

            <li class="layer" data-depth='0.1' id="img1"><img src="../../img/fondc.png"/></li>
            <li class="layer" data-depth='0.3' id="img2"><img src="../../img/souris.png"/></li>
            <li class="layer" data-depth='0.5' id="img2"><img src="../../img/clavier.png"/></li>
            <li class="layer" data-depth='0.7' id="img2"><img src="../../img/touches.png"/></li>
            <li class="layer" data-depth='0.9' id="img2"><img src="../../img/touchesencore.png"/></li>

          </ul>

        </div>

      </div>

      <?php include('footer.php') ?>

    </div>

    <!--jQuery-->
    <script src="http://code.jquery.com/jquery.js"></script>

    <!--jQuery mode offline -->
    <script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>

    <!-- Bootstrap JS -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="../js/script.js"></script>

    <script src="../../deploy/parallax.min.js"></script>
    <script>
      var scene = document.getElementById('scene');
      var parallax = new Parallax(scene);
    </script>

  </body>

</html>
