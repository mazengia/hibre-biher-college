﻿<?php session_start();
    if( isset($_SESSION['username'])&& isset($_SESSION['role'])){
         if(  $_SESSION['role']=='accountant' ){
        $id=$_SESSION['username'];     ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../style5.css">
    <link rel="icon" href="../upload/uploadedimage/logo.jpg" type="image/png">
    <title>Hibre Biher Collage</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css.css">
    <script src="../bootstrap/jquery.min.js"></script>
    <script src="../bootstrap/popper.min.js"></script>
    <script src="../bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../bootstrap/fontawesome.min.css">

    <style>
        .render {
              background-color: #ffffff;
              align-self: center;
              font-family: 'Kreon', serif;
              font-weight: 40;
              font-size: 1.5em;
              color: #000000;
              text-shadow:
            white 0.006em 0.006em 0.007em,
            rgba(16, 16, 16, 0.4) 1px 18px 6px,
            white -0.15em -0.1em 100px;
        }
        .render:hover{
            background-color: #808080;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <?php
        require_once('AddFile.php');
    ?>
    <div class="wrapper">
       <?php require_once('left.php'); ?>
       <div id="content">
            <?php
                require_once('head.php');
                require_once('bill.php');
            ?>
        </div>
    </div>
    <script type="text/javascript">
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    </script>
    <?php require_once('../windows/footer.php');?>
</body>
</html>
<?php }      }
      else{ header('location:../index.php'); }?>