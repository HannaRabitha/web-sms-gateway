<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>WEB2SMS</title>

 <!--Boostrap-->
  <link href="<?= base_url('asset/bootstrap_3_3_6/css/bootstrap.css') ?>" rel="stylesheet">
  

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url() ?>asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url() ?>asset/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>asset/css/creative.css" rel="stylesheet">

</head>

<body>
  <?php $this->load->view('navbar') ?>

 
    <?php $this->load->view($mainView) ?>

  <?php $this->load->view('footer') ?>

  <!--[if lt IE 9]>
  <script src="<?= base_url('asset/js/html5shiv_3_7_2/html5shiv.min.js') ?>"></script>

  <script src="<?= base_url('asset/js/respond_1_4_2/respond.min.js') ?>"></script>

  <![endif]-->

  <script src="<?= base_url('asset/js/jquery-1.12.4.min.js') ?>"></script>
  <script src="<?= base_url('asset/jquery_ui_1_12_0/jquery-ui.min.js') ?>"></script>
  <script src="<?= base_url('asset/timepicker_1_6_3/jquery-ui-timepicker-addon.js') ?>"></script>
  <script src="<?= base_url('asset/bootstrap_3_3_6/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('asset/js/app.js') ?>"></script>





 <!-- Bootstrap core JavaScript -->
  
    <script src="<?php echo base_url() ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url() ?>asset/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() ?>asset/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url() ?>asset/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url() ?>asset/js/creative.js"></script>


</body>

</html>
