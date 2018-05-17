<div class="overlay-navigation">
    <nav role="navigation">
        <ul>
            <li><a href="index.php" data-content="Le commencement">Accueil</a></li>
            <li><a href="phpbdd/connexion.php" data-content="Connecte toi !">Connexion</a></li>
            <li><a href="femme.php" data-content="Licorne">Femme</a></li>
            <li><a href="homme.php" data-content="Trash">Homme</a></li>
            <li><a href="panier_shop.php" data-content="Passez votre commande">Panier</a></li>
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
    <div class="icon_cart">
        <a href="panier_shop"><img src="img/icon/online-shop.png" alt="panier magasin" class="icon_cart_img" /></a>
        <div class="notif_contenu_cart" id="count"><?= $panier->count(); ?></div>
    </div>
</section>