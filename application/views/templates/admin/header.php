<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    <?php 
    if(isset($title) && !empty($title)) { 
       echo $title; 
    } 
    else { 
       echo "Online Course"; 
    } ?>
  </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url(); ?>assets/admin/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url(); ?>assets/admin/css/style.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/admin/css/addons/datatables.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/admin/css/addons/datatables-select.min.css" rel="stylesheet">
    <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/toastr/toastr.min.css">

  <script src="<?php echo base_url(); ?>assets/admin/plugins/ckeditor/ckeditor.js"></script>

  <style>

    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
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
footer{
  position: relative;
  clear: both;
  width: 100%;
}

@media print {
  @page { margin: 0; }
  .noprint {display:none;}
}

td {
  font-size: 18px !important;
}

/*th {
  font-size: 15px !important;
}*/
  p, h1, h2, h3, h4, h5, h6, label, td, dt, dd, li, span{
  user-select: none; /* supported by Chrome and Opera */
   -webkit-user-select: none; /* Safari */
   -khtml-user-select: none; /* Konqueror HTML */
   -moz-user-select: none; /* Firefox */
   -ms-user-select: none; /* Internet Explorer/Edge */
  }

  .img-id {
    object-fit: cover;
    object-position: center; /* Center the image within the element */
    height: 250px;
    width: 100%;
  }


</style>
</head>
<body class="grey lighten-3">