<?php 

if(isset($_SESSION['id_membre'])) {
   $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE id = ?");
   $requser->execute(array($_SESSION['id_membre']));
   $user = $requser->fetch();
   if(isset($_POST['prenom']) AND !empty($_POST['prenom']) AND $_POST['prenom'] != $user['pseudo']) {
      $nouveauprenom = htmlspecialchars($_POST['prenom']);
      $insertprenom = $bdd->prepare("UPDATE utilisateur SET pseudo = ? WHERE id = ?");
      $insertprenom->execute(array($nouveauprenom, $_SESSION['id_membre']));
	  $erreur = '<br/><center><font color="green">Le nouveau prénom est: <b>'. $nouveauprenom .'</b></font></center>';
	  echo $erreur;
   }
   if(isset($_POST['nom']) AND !empty($_POST['nom']) AND $_POST['nom'] != $user['nom']) {
      $nouveaunom = htmlspecialchars($_POST['nom']);
      $insertnom = $bdd->prepare("UPDATE utilisateur SET nom = ? WHERE id = ?");
      $insertnom->execute(array($nouveaunom, $_SESSION['id_membre']));
	  $erreur2 = '<center><font color="green">Le nouveau nom est: <b>'. $nouveaunom .'</b></font><br/><center>';
	  echo $erreur2;
   }
   if(isset($_POST['email']) AND !empty($_POST['email']) AND $_POST['email'] != $user['email']) {
      $nouveauemail = htmlspecialchars($_POST['email']);
      $insertemail = $bdd->prepare("UPDATE utilisateur SET email = ? WHERE id = ?");
      $insertemail->execute(array($nouveauemail, $_SESSION['id_membre']));
	  $erreur3 = '<center><font color="green">La nouvelle adresse e-mail est: <b>'. $nouveauemail .'</b></font></center>';
	  echo $erreur3;
   }
}
   
?>


<?php 

if(isset($_SESSION['id_membre'])) {
   $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE id_membre = ?");
   $requser->execute(array($_SESSION['id_membre']));
   $user = $requser->fetch();
   if(isset($_POST['mdp1']) AND !empty($_POST['mdp1']) AND isset($_POST['mdp2']) AND !empty($_POST['mdp2'])) {
      $mdp1 = sha1($_POST['mdp1']);
      $mdp2 = sha1($_POST['mdp2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE utilisateur SET mot_de_passe = ? WHERE id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id_membre']));
		 $msg = "<font color='green' style='padding-top:20px;'>Mot de passe bien modifié !</font>";
      } else {
         $msg = "Vos deux mots de passes ne correspondent pas !";
      }
   }
}
   if(isset($msg) AND $msg <> "<font color='green' style='padding-top:20px;'>Mot de passe bien modifié !</font>"){
	   echo '<div class="Titre">';
	   echo $msg;
	   echo '</div>'; 
   }else{

   }
   
   if(isset($msg) AND $msg == "<font color='green' style='padding-top:20px;'>Mot de passe bien modifié !</font>"){
	  echo '<div class="Titre">';
	   echo $msg;
	   echo '</div>'; 
   }else{

   }
   
   
   

   
?>