<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <?php
  include_once './config/conexao.php';
  include_once './config/constantes.php';
  include_once './func/funcdashboard.php';
  ?>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include_once './components/navBar.php' ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once './components/sideBar.php' ?>
    <!-- /.sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v3</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div>
      </div>
      <div class="content">
        <div class="container-fluid">

          <div class="conteudo"></div>

        </div>
      </div>
    </div>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
    <?php include_once './components/mainFooter.php' ?>
  </div>

  

  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.js"></script>
  <script src="plugins/chart.js/Chart.min.js"></script>
  <script src="dist/js/demo.js"></script>
  <script src="dist/js/pages/dashboard3.js"></script>
  <script src="dist/js/painel.js"></script>
</body>

</html>