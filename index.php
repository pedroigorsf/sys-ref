<!DOCTYPE html>
<html lang="pt">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SYSREF - Sistema de Refeições</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="resources/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="resources/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>



  <nav class="white lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><i class="material-icons">local_dining</i>SYSREF</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php?page=home">Início</a></li>
        <li><a href="index.php?page=preparations">Preparações</a></li>
        <li><a href="index.php?page=menu">Cardápios</a></li>
        <li><a href="index.php?page=dashboard">Relatórios</a></li>

      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>



  <?php
  $page = "";

  if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = addslashes(($_GET['page']));
  }

  switch ($page) {
    case 'create':
      require 'form.php';
      break;
    case 'view':
      require 'view.php';
      break;
    case 'menu':
      require 'menu.php';
      break;
    case 'preparations':
      require 'preparations.php';
      break;
    case 'dashboard':
      require 'dashboard.php';
      break;
    case 'redirect':
      require 'redirect.php';
      break;
    case 'read':
      require 'read.php';
      break;
    case 'search':
      require 'search.php';
      break;
    case 'query':
      require 'query.php';
      break;
    case 'edit':
      require 'edit.php';
      break;
    case 'formEdit':
      require 'formEdit.php?id_user=$id_user';
      break;
    case 'delete':
      require 'delete.php';
      break;
    case 'contact':
      require 'contact.php';
      break;
    default:
      require 'home.php';
      break;
  }
  ?>













  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Sobre nós</h5>
          <p class="grey-text text-lighten-4">Visamos no bem-estar de nossos clientes.</p>
          <i class="material-icons tiny ">location_on</i> Maracanaú, CE - Brasil</br>
          <i class="material-icons tiny ">phone</i> (85) 9.9999-9999 / 9999</br>
          <i class="material-icons tiny ">mail</i> contato@syourl.com

        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Páginas</h5>
          <ul>
            <li><a class="white-text" href="index.php?page=home">Início</a></li>
            <li><a class="white-text" href="index.php?page=preparations">Preparações</a></li>
            <li><a class="white-text" href="index.php?page=menu">Cardápios</a></li>
            <li><a class="white-text" href="index.php?page=dashboard">Relatórios</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Conecte-se</h5>
          <ul>
            <li><a class="white-text" href="#!">Instagram</a></li>
            <li><a class="white-text" href="#!">Facebook</a></li>
            <li><a class="white-text" href="#!">Youtube</a></li>
            <li><a class="white-text" href="#!">Instagram</a></li>
          </ul>
        </div>
      </div>
    </div>





    <div class="footer-copyright">
      <div class="container">
        Copyright <a class="brown-text text-lighten-3" href="">SYSREF</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="resources/js/materialize.js"></script>
  <script src="resources/js/init.js"></script>

</body>

</html>