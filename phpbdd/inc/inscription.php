<?php
// Traitement du formulaire s'il a bien été envoyé
if(isset($_POST['inscription'])) {
	// Déclaration des variables sécurisées
		$nom = htmlentities(trim($_POST['nom']));
		$prenom = htmlentities(trim($_POST['prenom']));
		$email = htmlentities(trim($_POST['email']));
		$civilite = htmlentities(trim($_POST['civilite']));
		$telephone = htmlentities(trim($_POST['telephone']));
		$mdp = sha1($_POST['mdp']);
		$mdprpt = sha1($_POST['mdprpt']);
	if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['civilite']) AND !empty($_POST['telephone']) AND !empty($_POST['mdp']) AND !empty($_POST['mdprpt'])) {
		// Définition des variables concernant la taille des noms/prenoms/apropos/mdp
		$taillenom = strlen($nom);
		$tailleprenom = strlen($prenom);
		$taillemdp = strlen($mdp);
		// Si la taille des noms, prénoms, a propos, mdp est inférieur à 200 = ok
		if($taillenom <= 200) {
			if($tailleprenom <= 200) {
				if($taillemdp <= 200) {
					// Vérification si les deux mdp correspondent
					if ($mdp == $mdprpt) {
						// Vérification e-mail valide ou non
						if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
							$reqemail = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ?");
							$reqemail->execute(array($email));
							$mailpris = $reqemail->rowCount();
							// Vérification si e-mail existe
							if($mailpris == 0) {
								if($mdp == $mdprpt) {
									// Création du membre dans la bdd
									$creationmembre = $bdd->prepare("INSERT INTO utilisateur(nom, pseudo, email, civilite, mot_de_passe, telephone) VALUES(?, ?, ? ,?, ?, ?)");
									$creationmembre->execute(array($nom, $prenom, $email, $civilite, $mdp ,$telephone));
									$erreur = "<font color='green'>Inscription r&eacute;ussie <b>". $prenom ."</b>! Redirection vers la page de connexion en cours...</font>";
									header( "refresh:3;url=connexion.php" );
										} else {
											$erreur = "Vos mots de passe ne correspondent pas !";
										}
									} else {
										$erreur = "Votre adresse mail est d&eacute;jà utilis&eacute;e !";
									}
								} else {
									$erreur = "Votre adresse e-mail est invalide";
								}
							} else {
								$erreur = "Vos mots de passe ne correspondent pas !";
							}
						} else {
							$erreur = "Votre mot de passe ne doit pas d&eacute;passer 200 caractères !";
						}
				} else {
					$erreur = "Votre pr&eacute;nom ne doit pas d&eacute;passer 200 caract&eacute;res !";
				}
			} else {
				$erreur = "Votre nom ne doit pas d&eacute;passer 200 caractères !";
			}
		} else {
			$erreur = "Tous les champs doivent être compl&eacute;t&eacute;s !";
		}
	} else {
		$erreur = "Il n'y a pas de formulaire qui a &eacute;t&eacute; rempli !";
	}
?>

		<?php
		// Affiche l'erreur s'il y en a une
        if(isset($erreur) AND $erreur <> "Il n'y a pas de formulaire qui a &eacute;t&eacute; rempli !" AND $erreur <> "Inscription r&eacute;ussie !"){
			echo '<div class="Titre-connexion">';
			echo $erreur;
			echo '</div>';
		}else{
		}
		?>

		<?php
		// Si le formulaire est bien complété, alors il affiche que c'est réussi
		if($erreur == 'Inscription r&eacute;ussie !') {
			echo '<div class="Titre-connexion">';
			echo $erreur;
			echo '</div>';
		}
		?>
