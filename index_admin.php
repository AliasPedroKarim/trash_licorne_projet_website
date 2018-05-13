<!DOCTYPE html>
<html lang="fr" >
<?php include('phpbdd/inc/bdd.php'); ?>
<?php include('header_admin.php'); ?>
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
        <nav class="menu" style="z-index: 3;">
            <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
            <label class="menu-open-button menuplacement" for="menu-open">
                <span class="lines line-1"></span>
                <span class="lines line-2"></span>
                <span class="lines line-3"></span>
            </label>

            <a href="phpbdd/compte.php" data-content="Profil"class="menu-item blue menuplacement"> <i class="fa fa-anchor"></i> </a>
            <a href="#" data-content="Panier" class="menu-item green"> <i class="fa fa-coffee"></i> </a>
            <a href="#" data-content="Recherche" class="menu-item red"> <i class="fa fa-heart"></i> </a>
            <a href="#" data-content="Catégorie"class="menu-item purple"> <i class="fa fa-microphone"></i> </a>
            <a href="produits.php" class="menu-item orange"> <i class="fa fa-star"></i> </a>
            <a href="in-admin-panel/index.html" class="menu-item lightblue"> <i class="fa fa-diamond"></i> </a>

        </nav>
        <div class="logo">
            <img src="img/Trash-Licorne2.png"  alt="Logo">
        </div>

<!--        <div style="display: flex; z-index: 2; background: transparent; width: auto; position: relative;">-->
<!--            <div class="connexion_deconnexion" style="left: 10px;">Connexion</div>-->
<!--            <div class="connexion_deconnexion" style="left: 150px;">Déconnexion</div>-->
<!--        </div>-->

        <div class="overlay-navigation">
            <nav role="navigation">
                <ul>
                    <li><a href="index_admin.php" data-content="Le commencement">Accueil</a></li>
                    <li><a href="phpbdd/deconnexion.php" data-content="Deconnecte toi !">Deconnexion</a></li>
                    <li><a href="femme.php" data-content="Licorne">Femme</a></li>
                    <li><a href="homme.php" data-content="Trash">Homme</a></li>
                  <li><a href="panier.php" data-content="Passez votre commande">Panier</a></li>
                    <li><a href="contact.html" data-content="N'hésite pas !">Contact</a></li>
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

        <div style="display: flex; justify-content: space-between; margin: 0px; width: 100%;">
            <div style="background: rgb(255, 188, 73); width: 50%; margin: 0px; height: 5px;"></div>
            <div style="background: rgb(255, 98, 176); width: 50%; margin: 0px; height: 5px;"></div>
        </div>

        <footer>
            <div class="container">
                <div id="container_footer">

                    <div class="element_footer">
                        <h3>Homme</h3>
                        <ul style="list-style-type: none;">
                            <li><a href="#"> En Tendance</a></li>
                            <li><a href="#"> Trash</a></li>
                            <li><a href="#"> Collection Printemps</a></li>
                            <li><a href="#"> Collection Eté</a></li>
                            <li><a href="#"> Collection Hiver</a></li>
                            <li><a href="#"> Collection Automne</a></li>
                        </ul>
                    </div>
                    <div class="element_footer">
                        <h3>Femme</h3>
                        <ul style="list-style-type: none;">
                            <li><a href="#"> En Tendance</a></li>
                            <li><a href="#"> Licorne</a></li>
                            <li><a href="#"> Collection Printemps</a></li>
                            <li><a href="#"> Collection Eté</a></li>
                            <li><a href="#"> Collection Hiver</a></li>
                            <li><a href="#"> Collection Automne</a></li>
                        </ul>
                    </div>
                    <div class="element_footer">
                        <h3>Partenaire</h3>
                        <ul style="list-style-type: none;">
                            <li><a href="#">ASOS</a></li>
                            <li><a href="#">Zalando</a></li>
                            <li><a href="#">Newlook</a></li>
                            <li><a href="#">Boohoo</a></li>
                            <li><a href="#">Christine-Laure</a></li>
                            <li><a href="#">Trash Gang</a></li>
                            <li><a href="#">Trasheur</a></li>
                        </ul>
                    </div>

                    <div class="element_footer">
                        <h3>A propos</h3>
                        <p>Trash-Licorne est une boutique en ligne internationale consacrée à
                            la mode et à la beauté, qui propose plus de plusieurs produits griffés
                            ainsi que ses propres collections pour le prêt-à-porter féminin, masculin,
                            les accessoires.</p>
                    </div>
                    <div class="element_footer">
                        <h3>Suivez-nous, aussi !</h3>
                        <div>
                            <img src="img/icon/facebook-logo-button.png" />
                            <img src="img/icon/twitter-logo-button.png" />
                            <img src="img/icon/instagram-logo.png" />
                            <img src="img/icon/linkedin-logo-button.png" />
                            <img src="img/icon/google-plus-logo-button.png" />
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js'></script>

        <script  src="js/index.js"></script>
    <div id="copyright">
        <div>Copyright © 2018, 2050 <a href="index.php">Tash-Licorne</a>, Tous droits réservés</div>
    </div>
    </body>


</html>
