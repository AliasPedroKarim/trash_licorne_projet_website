<?php
session_start();
try

{

	$bdd = new PDO('mysql:host=localhost;dbname=membres;charset=utf8', 'root', '');

}

catch (Exception $e)

{

        die('<b>Erreur </b><br/><br/>' . $e->getMessage());

}



if(isset($_SESSION['id_membre'])) {
   $getid = intval($_SESSION['id_membre']);
   $req = $bdd->prepare('SELECT * FROM utilisateur WHERE id = ?');
   $req->execute(array($getid));
   $userinfo = $req->fetch();
   $_SESSION['id_membre'] = $userinfo['id'];
   $_SESSION['prenom_membre'] = $userinfo['pseudo'];
   $_SESSION['adresse_email'] = $userinfo['email'];
   $_SESSION['nom'] = $userinfo['nom'];
    $_SESSION['mdp'] = $userinfo['mot_de_passe'];
   $_SESSION['telephone'] = $userinfo['telephone'];
   $_SESSION['civilite'] = $userinfo['civilite'];
    $_SESSION['grade'] = $userinfo['grade'];
}

?>