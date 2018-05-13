	<?php
if(isset($_POST['connexion'])) {
   $mail = htmlspecialchars($_POST['email']);
   $mdp = sha1($_POST['mdp']);
   if(!empty($mail) AND !empty($mdp)) {
      $req = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ? AND mot_de_passe = ?");
      $req->execute(array($mail, $mdp));
      $userexiste = $req->rowCount();
      if($userexiste == 1) {
         $userinfo = $req->fetch();
         $_SESSION['id_membre'] = $userinfo['id'];
         $_SESSION['prenom_membre'] = $userinfo['pseudo'];
         $_SESSION['adresse_email'] = $userinfo['email'];
          $_SESSION['grade'] = $userinfo['grade'];
//		 $_SESSION['administrateur'] = $userinfo['administrateur'];
          if($userinfo["grade"] == 1){
              header( "refresh:1;url=../index_admin.php" );
          }else{
              header( "refresh:1;url=../index_user.php" );
          }

		 $erreur = "<font color='green'>Vous êtes maintenant connecté ! Redirection en cours...</font>";
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être compl&eacute;t&eacute;s !";
   }
}
?>



<?php
		// Affiche l'erreur s'il y en a une
        if(isset($erreur)){ 
			echo '<div class="Titre-connexion">';
			echo $erreur;
			echo '</div>';
		}else{
		}
		?>