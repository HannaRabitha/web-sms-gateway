<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WEB2SMS</title>

  
  <link href="<?= base_url()?>asset/css/signin.css" rel="stylesheet">

  <link href="<?= base_url()?>asset/bootstrap_3_3_6/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url() ?>asset/css/creative.css" rel="stylesheet">

</head>

<style>
  body {
    background-image: url("<?php echo base_url() ?>asset/img/header.jpg");
    background-size: cover;
    color: #4f4f4d;
    text-align: center;
  }
  h1 {
    color: #fff;
  }
</style>

<body>
  <div class="container">
    <?= showFlashMessage() ?>

    <?= form_open('login', ['class' => 'form-signin', 'role' => 'form']) ?>
        <h1>Form Login</h1>
        <div class="form-group has-feedback <?= setValidationStyle('username') ?>">
          <?= form_input('username', $input->username, ['class' => 'form-control', 'placeholder' => 'Username', 'autofocus' => 'autofocus']) ?>
          <?= setValidationIcon('username') ?>
          <?= form_error('username') ?>
        </div>
        <div class="form-group has-feedback <?= setValidationStyle('password') ?>">
          <?= form_password('password', $input->password, ['class' => 'form-control', 'placeholder' => 'Password', 'autofocus' => 'autofocus']) ?>
          <?= setValidationIcon('password') ?>
          <?= form_error('password') ?>
        </div>
        <div class="form-group">
          <?= form_button(['type' => 'submit', 'content' => 'Login', 'class' => 'btn btn-lg btn-primary btn-block']) ?>
        </div>
    <?= form_close() ?>
  </div>

  <script src="<?= base_url('asset/js/jquery-1.12.4.min.js') ?>"></script>
  <script src="<?= base_url('asset/bootstrap_3_3_6/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('asset/js/app.js') ?>"></script>
</body>
</html>