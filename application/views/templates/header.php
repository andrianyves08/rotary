<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Title</title>
      <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url(); ?>assets/css/style.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/toastr/toastr.min.css">

  </head>
  <style>
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }

    * {
      margin: 0;
      padding: 0;
    }
    html, body {
      height: 100%;
      width: 100%;
    }

    main {
      min-height: 100%;
    }

    #container {
     overflow: auto;
    }

    header {
     width: 100%;
    }

    footer {
      position: relative;
      clear: both;
      width: 100%;
    }

    p, h1, h2, h3, h4, h5, h6, label, td, dt, dd, li{
    user-select: none; /* supported by Chrome and Opera */
     -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
     -moz-user-select: none; /* Firefox */
     -ms-user-select: none; /* Internet Explorer/Edge */
    }

  .img-id {
    object-fit: cover;
    object-position: center; /* Center the image within the element */
    height: 400px;
    width: 100%;
  }

  .img-id-1 {
    object-fit: cover;
    object-position: center; /* Center the image within the element */
    height: 60px;
    width: 60px;
  }

  </style>

  <body>