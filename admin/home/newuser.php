<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="icon" type="../../image/png" sizes="16x16" href="../../images/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Census</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../../css/style.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
  <?php
      if(!isset($_SESSION['admin_email']) || !isset($_SESSION['admin_password'])){
        header("Location:../index.php");
      }else {
        include("template/newuser.php");
      }
     ?>
    <<!-- SCRIPTS -->
   <!-- JQuery -->
   <script type="text/javascript" src="../../js/jquery-3.2.1.min.js"></script>
   <!-- Bootstrap tooltips -->
   <script type="text/javascript" src="../../js/popper.min.js"></script>
   <!-- Bootstrap core JavaScript -->
   <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
   <!-- MDB core JavaScript -->
   <script type="text/javascript" src="../../js/mdb.min.js"></script>

</body>

</html>
