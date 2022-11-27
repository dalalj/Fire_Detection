<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Team Big Four Capstone Project</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dataTable.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/css/skins/_all-skins.min.css">

  <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>

  

</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">



      <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>TB4</b>CP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Team Big Four</span>
    </a>

    <!-- For mobile sidebar arrangement  -->
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">

    <a href="#" style="top:5px;" data-toggle="push-menu" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" style="color:white; margin-left:10px; margin-top:5px;" viewBox="0 0 24 24" fill="#fffff" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>
    </nav>
  </header>
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


      <!-- Sidebar user panel -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $Y_ad; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>


  <li class="header">MAIN NAVIGATION MENU</li>

  <li <?=(!isset($_GET['page']) && empty($_GET['page']) )?'class="active"':'';?>>
    <a href="admin.php">
    <i class="fa-solid fa-copy"></i>
      <span>Dashboard</span>
    </a>
    </li>

    <?php
        //just admin
        if(YETKI == 2) {
    ?>

    <li class="treeview <?=(isset($_GET['page']) && ($_GET['page'] == 'accounts' || $_GET['page'] == 'accountsAddMember' )  )?'active menu-open':'';?>">
    <a href="#">
      <i class="fa-solid fa-database"></i> <span>Accounts</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li <?=(isset($_GET['page']) && $_GET['page'] == 'accounts' )?'class="active"':'';?> ><a href="admin.php?page=accounts"><i class="fa fa-circle-o"></i> Accounts List</a></li>
      <li <?=(isset($_GET['page']) && $_GET['page'] == 'accountsAddMember' )?'class="active"':'';?>><a href="admin.php?page=accountsAddMember"><i class="fa fa-circle-o"></i>Add Accounts</a></li>
    </ul>
    </li>

    <?php } ?>

    <li>
    <a href="logout.php">
    <i class="fa-solid fa-sign-out"></i>
      <span>Sign out</span>
    </a>

  </li>

</ul>
</section>
    <!-- /.sidebar -->
  </aside>
