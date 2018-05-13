
 <!-- Déclaration de la variable contenant du titre de la page !-->
 <?php $titre = "Mon compte"; ?>
 <!-- Include du haut de la page situé dans le inc/header.php !-->
 <?php include('inc/bdd.php'); ?>
 <!-- Fin du header !-->
 
 <?php
         if(isset($_SESSION['id_membre']) AND $userinfo['id'] == $_SESSION['id_membre']) {
		 }else{
			 echo "<script type='text/javascript'>document.location.replace('inscription.php');</script>";
		 }
         
  
         ?>
 <!-- Début du contenu !-->
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
    <section class="Sec1">
      <article>
       <h1 class="Titre">Mon compte</h1>
	   <hr class="separateur">
	   <?php include('inc/compte.php'); ?>
	   
	   
	   <div id="connexion">
	   
		<form method="post" action="#">
			<input class="int1" type="text" name="nom" placeholder="Nom: <?php echo $userinfo['nom']; ?>">
			<input class="int2" type="text" name="prenom" placeholder="Pr&eacute;nom: <?php echo $userinfo['pseudo']; ?>">
		    <input class="int3" type="text" name="email" placeholder="Adresse e-mail: <?php echo $userinfo['email']; ?>">
			<input class="int4" type="submit" name="informations" placeholder="Confirmer les changements">

		</form>

	</div> 
	
	
	<h1 class="Titre2">Modifier le mot de passe</h1>
	   <hr class="separateur">
	
	
	 <div id="connexion">
	   
		<form method="post" action="#">
			<input type="password" required placeholder="Nouveau mot de passe" name="mdp1">
			<input type="password" required placeholder="Re-tapez votre nouveau mot de passe" name="mdp2">
			<input type="submit" name="informations" placeholder="Modifier le mot de passe">
            <a href = '../index.php'><button type="button">Retour</button></a>
		</form>

	</div> 
	   
      </article>
    </section>
 <!-- Fin du contenu !-- >
 
<!--<!-- Include du bas de la page situé dans le inc/footer.php !-->
<?php //include('inc/footer.php'); ?>
<!--<!-- Fin du footer !-->