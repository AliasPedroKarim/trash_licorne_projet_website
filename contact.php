<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Contact</title>



    <link rel="stylesheet" href="css/style_contact.css">


</head>

<body>
<a href="index.php" style="float: left" >Retour</a>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<form id="contact-form">
    <p>Bonjour,</p>
    <p>Mon
        <label for="your-name">Nom</label>
        <input type="text" name="your-name" id="your-name" minlength="3" placeholder="(Votre Nom )" required> et</p>

    <p>mon
        <label for="email">email </label> est
        <input type="email" name="your-email" id="email" placeholder="(votre email)" required>
    </p>

    <p> j'ai un
        <label for="your-message">message</label>  pour vous,</p>

    <p>
        <textarea name="your-message" id="your-message" placeholder="(votre msg)" class="expanding" required></textarea>
    </p>
    <p>
        <button type="submit">
            <svg version="1.1" class="send-icn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="36px" viewBox="0 0 100 36" enable-background="new 0 0 100 36" xml:space="preserve">
        <path d="M100,0L100,0 M23.8,7.1L100,0L40.9,36l-4.7-7.5L22,34.8l-4-11L0,30.5L16.4,8.7l5.4,15L23,7L23.8,7.1z M16.8,20.4l-1.5-4.3
	l-5.1,6.7L16.8,20.4z M34.4,25.4l-8.1-13.1L25,29.6L34.4,25.4z M35.2,13.2l8.1,13.1L70,9.9L35.2,13.2z" />
      </svg>
            <small>envoyer</small>
        </button>
    </p>
</form>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



<script  src="js/contact.js"></script>




</body>

</html>


<?php
/**
 * Created by PhpStorm.
 * User: AliasPedroKarim
 * Date: 14/05/2018
 * Time: 09:43
 */
?>