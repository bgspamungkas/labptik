<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LAB PTIK</title>

    <link rel="icon" href="<?php echo base_url("homepage/images/UNS V1.png"); ?> ">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url("asset-admin/vendor/fontawesome-free/css/all.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url("asset-admin/css/sb-admin-2.min.css") ?>" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" rel="stylesheet">

    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body id="page-top">

    <!-- container-scroller -->

    <?php echo $this->include('admin/layout/navigation'); ?>
    <?php echo $this->include('admin/layout/navbar'); ?>
    <?php echo $this->renderSection('container'); ?>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url("asset-admin/vendor/jquery/jquery.min.js") ?>"></script>
    <script src="<?php echo base_url("asset-admin/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url("asset-admin/vendor/jquery-easing/jquery.easing.min.js") ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url("asset-admin/js/sb-admin-2.min.js") ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url("asset-admin/vendor/chart.js/Chart.min.js") ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url("asset-admin/js/demo/chart-area-demo.js") ?>"></script>
    <script src="<?php echo base_url("asset-admin/js/demo/chart-pie-demo.js") ?>"></script>

</body>

</html>