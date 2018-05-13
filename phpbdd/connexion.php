 <!-- Déclaration de la variable contenant du titre de la page !-->
 <?php $titre = "Connexion"; ?>
 <?php include ('inc/bdd.php'); ?>
 <!-- Include du haut de la page situé dans le inc/header.php !-->
<!-- --><?php //include('inc/header.php'); ?>
 <!-- Fin du header !-->
 
 
 <!-- Début de la page !-->
 <head>
     <meta charset="UTF-8">
     <title>Trash-Licorne</title>
     <link rel="stylesheet" href="../css/style_inscritpion.css">

 </head>
 <div class="logo">
     <img src="../img/Trash-Licorne2.png"  alt="Logo">
 </div>

 <section class="Sec1">
      <article>
       <h1 class="Titre-connexion">Connexion</h1>
	   <hr class="separateur">


	   <?php include('inc/connexion.php'); ?>
	   <div id="connexion">
		<form method="post" action="#">

			<input class="color" type="text" placeholder="Adresse-email" name="email">
			<input class="color3" type="password" placeholder="Mot de passe" required name="mdp">
			<input class="color4" type="submit" name="connexion" value="Connexion">
            <a  href="inscription.php"><button class="color2" type="button">Inscription</button></a>
            <a href = '../index.php'><button class="color5" type="button">Retour</button></a>
		</form>

	</div>

      </article>
    </section>

<!-- Include du bas de la page situé dans le inc/footer.php !-->
<?php //include('inc/footer.php'); ?>
<!-- Fin du footer !-->