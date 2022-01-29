<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Logejo Internal';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
  <?php
	echo $cakeDescription;
  ?>
  </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= $this->request->getAttribute('webroot') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= $this->request->getAttribute('webroot') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= $this->request->getAttribute('webroot') ?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="<?= $this->request->getAttribute('webroot') ?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Aonghas Navbar Menus -->
<?= $this->element('aonghas_navbar'); ?>

  <!-- Aonghas Sidebar Menus -->
<?= $this->element('aonghas_sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>


  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= $this->request->getAttribute('webroot') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= $this->request->getAttribute('webroot') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= $this->request->getAttribute('webroot') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= $this->request->getAttribute('webroot') ?>../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= $this->request->getAttribute('webroot') ?>../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= $this->request->getAttribute('webroot') ?>../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= $this->request->getAttribute('webroot') ?>../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= $this->request->getAttribute('webroot') ?>../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= $this->request->getAttribute('webroot') ?>../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= $this->request->getAttribute('webroot') ?>../../plugins/jszip/jszip.min.js"></script>
<script src="<?= $this->request->getAttribute('webroot') ?>../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= $this->request->getAttribute('webroot') ?>../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= $this->request->getAttribute('webroot') ?>../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= $this->request->getAttribute('webroot') ?>../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= $this->request->getAttribute('webroot') ?>../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= $this->request->getAttribute('webroot') ?>dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?= $this->request->getAttribute('webroot') ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?= $this->request->getAttribute('webroot') ?>plugins/raphael/raphael.min.js"></script>
<script src="<?= $this->request->getAttribute('webroot') ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?= $this->request->getAttribute('webroot') ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?= $this->request->getAttribute('webroot') ?>plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?= $this->request->getAttribute('webroot') ?>dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= $this->request->getAttribute('webroot') ?>dist/js/pages/dashboard2.js"></script>

<!-- Page specific script -->
<?= $this->fetch('page_scripts') ?>
</body>
</html>
