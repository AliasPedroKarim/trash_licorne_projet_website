 <!-- Déclaration de la variable contenant du titre de la page !-->
 <?php $titre = "Inscription"; ?>
 <!-- Include du haut de la page situé dans le inc/header.php !-->
<!-- --><?php //include('inc/header.php'); ?>
 <!-- Fin du header !-->
 
 
 <!-- Début de la page !-->
 <head>
     <meta charset="UTF-8">
     <title>Trash-Licorne</title>
     <!--     <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>-->
     <!--     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">-->
     <!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
     <link rel="stylesheet" href="../css/style_inscritpion.css">
     <!--     <link rel="stylesheet" href="../css/stylenav.css">-->
     <!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
     <!--     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
 </head>
 <div class="logo">
     <img src="../img/Trash-Licorne2.png"  alt="Logo">
 </div>

 <section class="Sec1">
      <article>
       <h1 class="Titre-connexion">Inscription</h1>
	   <hr class="separateur">
	   
	   <?php include ('inc/bdd.php'); ?>
	   <?php include('inc/inscription.php'); ?>
	   <div id="connexion">
		<form method="post" action="#">

			<input class="int1" type="text" required name="nom" placeholder="Nom">
			<input class="int2" type="text" required name="prenom" placeholder="Pr&eacute;nom">
			<input class="int3" type="text" required name="email" placeholder="Adresse e-mail">
			<input class="int4" type="password" required name="mdp" placeholder="Mot de passe">
			<input class="int5" type="password" required name="mdprpt" placeholder="R&eacute;p&eacute;tez votre mot de passe">
            <input class="int6" type="text" required name="telephone" placeholder="telephone">
            <select class="date" name="civilite" id="civilite" >
                <option value="Homme">Homme
                </option>
                <option value="Femme">Femme
                </option>
            </select>
			<input class="int7" type="submit" name="inscription" value="Inscription">
            <a href = '../index.php'><button class="int8" type="button">Retour</button></a>

		</form>

	</div> 
	   
      </article>
    </section>

<!-- Include du bas de la page situé dans le inc/footer.php !-->
<?php //include('inc/footer.php'); ?>
<!-- Fin du footer !-->