<?php



//On récupère les valeurs du formulaire
//$nomembre = $_POST['nomembre'];
$sex = $_POST['sex'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$jour = $_POST['jour'];
$mois = $_POST['mois'];
$annee = $_POST['annee'];
$adresse = $_POST['adresse'];
//$npa = $_POST['npa'];
$localite = $_POST['localite'];                                                           
$tel = $_POST['tel'];   
$nat = $_POST['nat'];
$email = $_POST['email'];
$repemail = $_POST['repemail'];
$mdp = $_POST['mdp'];
$ville = $_POST['ville'];




?>
<?php //On créée le message email

$msg = "Sex= $sex 
Nom= $nom 
Prénom= $prenom 
Date de naissance= $jour $mois $annee  
Adresse: $adresse 
Localité= $localite
Télephone= $numtel  
Nat= $nat  
Mot de passe= $mdp

Adresse email : $email";

$recipient = "axel.demaretzsio@gmail.com"; //On met l'adresse email ou on veut recevoire le mail
$recipient = $email;
$subject = "Formulaire"; //On met le sujet du mail

$mailheaders = "From: Trash-Licorne<> \n"; //depuis où il a été posté


mail($recipient, $subject, $msg, $mailheaders); // message confirmation que le mail a bien été envoyé

echo "<HTML><HEAD>";
echo "<TITLE>Formulaire envoyer!</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci, $sex $nom </H1>";
echo "<P align=center>";
echo "Votre formulaire à bien été envoyé !</P>";
echo "</BODY></HTML>";

?> 