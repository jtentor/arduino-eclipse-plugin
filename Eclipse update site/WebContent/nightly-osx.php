<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Roberto Lo Giacco">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Arduino Eclipse Plugin - OsX Nightly Builds</title>

    <!-- Bootstrap core CSS and theme -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">

    <!-- Custom styles  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,600italic,600,300|Open+Sans+Condensed:300,700|Ubuntu+Mono:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href="css/theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document" ng-app='arduinoEclipse'>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <?php include 'fragments/navbar.html';?>
    </nav>

    <div class="container" role="main">
      <div class="page-header">
        <h1>OsX Nightly Builds <small>use only if you feel confident</small></h1>
      </div>
      <p>Every night, a little gnome walks around our servers looking for changes occurred during the day and, when he finds any, he feels so happy he starts the build process!</p>
      <p>Beware though, as the nightly build represents the latest and greatest version off the code, but <mark>there is no guarantee that these versions do not contain any issue</mark> (they probably do) as the little gnome is not renowned for his patience and he doesn't test the build extensively: actually he runs away right after launching it!</p>
      <h3>These are built for OsX 64 bits</h3>
      <?php readfile ('http://eclipse.baeyens.it/fragments/file-list.php?arch=mac64.');?>


      <h3>Eclipse Update Site</h3>
      <p>Alternatively you can get the latest nightly build by setting the following update site within an existing Eclipse CDT installation</p>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="well text-center">http://eclipse.baeyens.it/nightly</div>
        </div>
      </div>
    </div><!-- /container -->

    <div id="footer">
      <?php include 'fragments/footer.html';?>
    </div>
  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
  <script src="js/marked.min.js"></script>
  <script src="js/angular-marked.min.js"></script>
  <script src="js/ui-bootstrap-tpls.js"></script>
  <script src="js/app.js"></script>
</html>
