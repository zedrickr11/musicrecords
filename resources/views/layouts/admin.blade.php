<!--
 * GenesisUI - Bootstrap 4 Admin Template
 * @version v1.8.12
 * @link https://genesisui.com
 * Copyright (c) 2017 creativeLabs Łukasz Holeczek
 * @license https://genesisui.com/license.html
 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Prime - Bootstrap 4 Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,jQuery,CSS,HTML,RWD,Dashboard,Vue,Vue.js,React,React.js">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>MusicRecords</title>

  <!-- Icons -->
  <link href="vendors/css/font-awesome.min.css" rel="stylesheet">
  <link href="vendors/css/simple-line-icons.min.css" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Styles required by this views -->
  <link href="vendors/css/daterangepicker.min.css" rel="stylesheet">
  <link href="vendors/css/gauge.min.css" rel="stylesheet">
  <link href="vendors/css/toastr.min.css" rel="stylesheet">

</head>

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Brand options
1. '.brand-minimized'       - Minimized brand (Only symbol)

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
5. '.sidebar-compact'			  - Compact Sidebar

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Breadcrumb options
1. '.breadcrumb-fixed'			- Fixed Breadcrumb

// Footer options
1. '.footer-fixed'					- Fixed footer

-->

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none mr-auto">

    </ul>
  </header>
  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="#"><i class="icon-music-tone"></i> Album </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="icon-microphone"></i> Vocalista </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="icon-volume-2"></i> Genero </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-music"></i> Cancion </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="icon-social-github"></i> Artista </a>
          </li>

        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <!-- Main content -->
    <main class="main">

      <div class="container-fluid">
        @yield('contenido')
      </div>
      <!-- /.conainer-fluid -->
    </main>

  </div>
  <footer class="app-footer">
    <span><a href="#">MusicRecords</a> © 2018 zedrickR.</span>
    <span class="ml-auto">Creado por <a href="#">Zedrick Rodriguez - 201408042</a></span>
  </footer>

  <!-- Bootstrap and necessary plugins -->
  <script src="vendors/js/jquery.min.js"></script>
  <script src="vendors/js/popper.min.js"></script>
  <script src="vendors/js/bootstrap.min.js"></script>
  <script src="vendors/js/pace.min.js"></script>

  <!-- Prime main scripts -->

  <script src="js/app.js"></script>

  <!-- Plugins and scripts required by this views -->
  <script src="vendors/js/toastr.min.js"></script>
  <script src="vendors/js/gauge.min.js"></script>
  <script src="vendors/js/moment.min.js"></script>
  <script src="vendors/js/daterangepicker.min.js"></script>

  <!-- Custom scripts required by this view -->
  <script src="js/views/main.js"></script>

</body>
</html>
