 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $this->title; ?></title>
  <!-- Bootstrap core CSS-->
  <link href="www/sb-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="www/sb-admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="www/sb-admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

</head>
<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation  -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <a class="text-white navbar-brand" href="?c=DashBoard"><?php echo \Core\Config::APPLI_NAME ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                  <a class="text-white nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Consultants
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="?c=Consultant&a=liste">Liste</a>
                      <a class="dropdown-item" href="?c=Consultant&a=form">Formulaire</a>
                      <!--<div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>-->
                  </div>
              </li>

              <li class="nav-item dropdown">
                  <a class="text-white nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Bien
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="?c=Bien&a=liste">Liste</a>
                      <a class="dropdown-item" href="?c=Bien&a=form">Formulaire</a>

                  </div>
              </li>
              <li>
                  <?php
                  if (isset($_SESSION["nom"])) {
                      echo  "<a class=\"text-warning nav-link\" href=\"#\" >".$_SESSION["nom"]."</a>";
                      echo " <form action='?c=DashBoard&a=sessionDestroy'>
                             <li class=\"nav-item active\">
                                <a class=\"text-white nav-link\" href=\"?c=DashBoard&a=liste\">Déconnexion</a>
                             </li>
                             </form>";
                  }else{
                      echo "<li class=\"nav-item active\">
                                 <a class=\"text-white  nav-link\" href=\"?c=DashBoard&a=login\">Connexion</a>
                            </li>";
                  }
                  ?>
              </li>
          </ul>
      </div>
  </nav>
  <div class="content-wrapper" style="margin-top: 10px;">
    <div class="container-fluid">

     
