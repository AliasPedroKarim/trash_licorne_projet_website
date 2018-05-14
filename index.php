<?php
require '_header.php';
?><!DOCTYPE html>
<html lang="fr" >

    <head>
        <meta charset="UTF-8">
        <title>Trash-Licorne</title>
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles_main.css">
        <link rel="stylesheet" href="css/stylenav.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="logo">
            <img src="img/Trash-Licorne2.png"  alt="Logo">
        </div>

        <?php require 'includes/navigation_template.php' ?>



        <div style="display: flex; justify-content: space-between; margin: 0px; width: 100%;">
            <div style="background: rgb(255, 188, 73); width: 50%; margin: 0px; height: 5px;"></div>
            <div style="background: rgb(255, 98, 176); width: 50%; margin: 0px; height: 5px;"></div>
        </div>

        <?php require 'includes/footer.php'?>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
            $(".loader").fadeOut("1000");

        }
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js'></script>

        <script  src="js/index.js"></script>

    </body>


</html>
