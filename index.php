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
    </head>

    <body class="body_index">
        <?php require 'includes/navigation_template.php' ?>

        <div class="logo">
            <div id="slideshow">
                <ul id="sContent">
                    <li><img src="img/defile/defile_(1).jpg"/></li>
                    <li><img src="img/defile/defile_(2).jpg"/></li>
                    <li><img src="img/defile/defile_(3).jpg"/></li>
                    <li><img src="img/defile/defile_(4).jpg"/></li>
                    <li><img src="img/defile/defile_(5).jpg"/></li>
                    <li><img src="img/defile/defile_(6).jpg"/></li>
                    <li><img src="img/defile/defile_(7).jpg"/></li>
                    <li><img src="img/defile/defile_(8).jpg"/></li>
                </ul>
            </div>
        </div>

        <div style="display: flex; justify-content: space-between; margin: 0px; width: 100%;">
            <div style="background: rgb(255, 188, 73); width: 50%; margin: 0px; height: 5px;"></div>
            <div style="background: rgb(255, 98, 176); width: 50%; margin: 0px; height: 5px;"></div>
        </div>

        <?php require 'includes/footer.php'?>

    </body>


</html>
