<!DOCTYPE html>
<html lang="fr" >

<head>
    <meta charset="UTF-8">
    <title>Trash-Licorne</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon/logo.jpg">
    <link rel="stylesheet" href="css/styles_main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">


</head>

<body>

    <div class="overlay-navigation">
        <nav role="navigation">
            <ul>
                <li><a href="index.php" data-content="Le commencement">Accueil</a></li>
                <li><a href="#" data-content="Connecte toi !">Connexion</a></li>
                <li><a href="femme.php" data-content="Licorne">Femme</a></li>
                <li><a href="homme.php" data-content="Trash">Homme</a></li>
                <li><a href="#" data-content="Envie spéciale ?">Recherche</a></li>
                <li><a href="contact.php" data-content="N'hésite pas !">Contact</a></li>
            </ul>
        </nav>
    </div>

    <section class="home">

        <div class="open-overlay">
            <span class="bar-top"></span>
            <span class="bar-middle"></span>
            <span class="bar-bottom"></span>
        </div>
    </section>

    <div>
        <div class="logo">
            <div class="champs-contact">
                <form method="post" action="traitement.php" style="margin: 20px 20px 20px 20px;">
                    <p style="display: flex; flex-direction: column;">
                        <span style="text-align: center; size: 1.9em;padding: 0px 20px 20px 20px;">Contacter Nous !</span>
                        <input type="text" name="pseudo" placeholder="Pseudo" />

                        <br />

                        <input type="email" name="email" placeholder="Email" />
                        <br />
                        <input type="email" name="our-email" value="Contact@Tash-Licorne.fr" />
                        <textarea placeholder="Comment..." maxlength="360"></textarea>

                    </p>
                </form>
            </div>
        </div>
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js'></script>



    <script  src="js/index.js"></script>




</body>

</html>
