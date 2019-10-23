<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BET</title>

    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">

    <script src="dist/js/vendor/html5shiv.js"></script>
    <script src="dist/js/vendor/respond.min.js"></script>

    <style>
        body  {
            background-color: white;
        }
    </style>
</head>
<body>
<div class="container">

  <?php
  session_start();
  if (isset($_SESSION["idusuario"])) {
      if ($_SESSION["tipo_usuario"] == 2) {
          require("header_admin.php");
      }
      else {
          require("header.php");
      }
  }
  else{
      require("header.php");
  }
  ?>



    </div>

    <?php require ("footer.php");
    ?>
    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>

    <script>
        videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>



    </body>
</html>
