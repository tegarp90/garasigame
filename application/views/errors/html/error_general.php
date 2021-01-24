<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wicodus - 404</title>

    <!-- CSS -->
    <link href="<?= base_url(); ?>assets/css/fonts/etline-font.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/fonts/fontawesome/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/fonts/themify-icons.css" rel="stylesheet">

    <link href="<?= base_url(); ?>assets/plugins/owl.carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/plugins/slick/slick.css" rel="stylesheet">

    <link href="<?= base_url(); ?>assets/css/main.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/styles.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?= base_url(); ?>assets/img/apple-touch-icon.png">
    <link rel="icon" href="<?= base_url(); ?>assets/img/favicon.png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="page-body">

    <main class="main-content h-fullscreen d-flex align-items-center text-center text-light">

      <!-- content area -->
      <div class="container">
        <img src="<?= base_url(); ?>assets/img/404.png" class="d-none d-md-inline mb-6" alt="404">
        <h2 class="display-md-4"><?php echo $heading; ?></h2>
        <p class="lead"><?php echo $message; ?></p>
        <br>
        <a type="button" href="<?= base_url(); ?>" class="btn btn-warning btn-round"><i class="fas fa-arrow-left"></i> Go Back</a>
      </div>
      <!-- content area -->

    </main>

    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- Parallax -->
    <script src="<?= base_url(); ?>assets/plugins/parallax/parallax.js"></script>

    <!-- User JS -->
    <script src="<?= base_url(); ?>assets/js/scripts.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url(); ?>assets/js/main.js" id="_mainJS" data-plugins="load"></script>
  </body>
</html>