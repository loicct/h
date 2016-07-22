<!DOCTYPE html>
<html>

  <head>


		<meta charset="utf-8">

		<title>Forest</title>
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
    <div class="container" id="main">

      <?php include('navbar.php') ?>

      <div class="global">

        <div class="scene" id="scene">

          <ul>

            <li class="layer" data-depth='-0.05' id="fond"><img src="../../img/fond3.png"/></li>
            <li class="layer" data-depth='0.0' id="fond2"><img src="../../img/fond2.png"/></li>
            <li class="layer" data-depth='0.05' id="brume2"><img src="../../img/brume.png"/></li>
            <li class="layer" data-depth='0.2' id="feuilles3"><img src="../../img/feuilles3.png"/></li>
            <li class="layer" data-depth='0.5' id="feuilles1"><img src="../../img/feuilles1.png"/></li>
            <li class="layer" data-depth='0.8' id="feuilles2"><img src="../../img/feuilles2.png"/></li>
            <li class="layer" data-depth='1' id="gouttes1"><img src="../../img/gouttes1.png"/></li>
            <li class="layer" data-depth='1.2' id="gouttes2"><img src="../../img/gouttes2.png"/></li>
            <li class="layer" data-depth='1.5' id="brume"><img src="../../img/brume.png"/></li>


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
