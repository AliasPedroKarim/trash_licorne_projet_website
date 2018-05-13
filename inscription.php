<?php
//session_start();
//require_once('utilisateur.php');
//$user = new USER();
//
//if($user->is_loggedin()!="")
//{
//    $user->redirect('index.php');
//}
//
//if(isset($_POST['btn-inscription']))
//{
//    $sex = $_POST['sex'];
//    $nom = $_POST['nom'];
//    $prenom = $_POST['prenom'];
//    $jour = $_POST['jour'];
//    $mois = $_POST['mois'];
//    $annee = $_POST['annee'];
//    $adresse = $_POST['adresse'];
//    $localite = $_POST['localite'];
//    $tel = $_POST['tel'];
//    $nat = $_POST['nat'];
//    $email = $_POST['email'];
//    $repemail = $_POST['repemail'];
//    $mdp = $_POST['mdp'];
//    $ville = $_POST['ville'];
//    $timestamp = strtotime(''.$jour.'-'.$mois.'-'.$annee.'');
//    $date_naissance = new DateTime('@' . $timestamp);
//    if($prenom=="")	{
//        $error[] = "renseignez un prenom !";
//    }
//    else if($email=="")	{
//        $error[] = "renseignez une adresse e-mail!";
//    }
//    else if(!filter_var($email, FILTER_VALIDATE_EMAIL))	{
//        $error[] = 'Merci d\'entrer une adresse e-mail valide !';
//    }
//    else if($sex=="")	{
//        $error[] = "renseignez un sex!";
//    }
//    else if($nom=="")	{
//        $error[] = "renseignez un nom!";
//    }
//    else if($jour=="")	{
//        $error[] = "renseignez un jour!";
//    }
//    else if($mois=="")	{
//        $error[] = "renseignez un mois!";
//    }
//    else if($annee=="")	{
//        $error[] = "renseignez une annee!";
//    }
//    else if($adresse=="")	{
//        $error[] = "renseignez une adresse !";
//    }
//    else if($localite=="")	{
//        $error[] = "renseignez un lieux!";
//    }
//    else if($tel=="")	{
//        $error[] = "renseignez un telephone!";
//    }
//    else if($nat=="")	{
//        $error[] = "renseignez une nationalite!";
//    }
//    else if($ville=="")	{
//        $error[] = "renseignez une ville!";
//    }
//    else if($mdp=="")	{
//        $error[] = "renseignez un mot de passe !";
//    }
//    else if(strlen($mdp) < 6){
//        $error[] = "Le mot de passe doit faire plus de 6 caractères !";
//    }
//    else
//    {
//        try
//        {
//            $stmt = $user->runQuery("SELECT prenomUtilisateur, mailUtilisateur FROM utilisateurs WHERE pseudoUtilisateur=:upseudo OR mailUtilisateur=:umail");
//            $stmt->execute(array(':upseudo'=>$prenom, ':umail'=>$email));
//            $row=$stmt->fetch(PDO::FETCH_ASSOC);
//
//            if($row['pseudoUtilisateur']==$prenom) {
//                $error[] = "pseudo déjà utilisé !";
//            }
//            else if($row['mailUtilisateur']==$email) {
//                $error[] = "adresse e-mail déjà utilisée !";
//            }
//            else
//            {
//                if($user->inscription($prenom,$email,$mdp,$sex,$nom,$adresse,$localite,$ville,$tel,$nat,$date_naissance)){
//                    header('Location: inscription.php?succes');
//                }
//            }
//        }
//        catch(PDOException $e)
//        {
//            echo $e->getMessage();
//        }
//    }
//}
//
//?>
<!---->
<!---->
<?php
//						if(isset($error))
//						{
//						foreach($error as $error)
//						{
//						?>
<!--										 <div class="alert alert-danger">-->
<!--												<i class="glyphicon glyphicon-warning-sign"></i> &nbsp; --><?php //echo $error; ?>
<!--										 </div>-->
<!--										 --><?php
//						}
//						}
//						else if(isset($_GET['succes']))
//						{
//						?>
<!--								 <div class="alert alert-success">-->
<!--                                     <i class="glyphicon glyphicon-log-in"></i> &nbsp; Inscription réussie ! <a href='connexion.php'>Connectez vous</a> ici-->
<!--								 </div>-->
<!--								 --><?php
//						}
//						?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Inscription</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/style_inscritpion.css"/>
    </head>
    <body>    
        <form method="post" action="inscription.php" class="register">
            <h1>Inscription</h1>
            <fieldset class="row1">
                <legend>Details du compte
                </legend>
                <p>
                    <label>Email *
                    </label>
                    <input type="text" name="email" id="email">
                    <label>Repeter l'email *
                    </label>
                    <input type="text" name="repemail" id="repemail" />
                </p>
                <p>
                    <label>Mot de Passe*
                    </label>
                    <input type="text" name="mdp" id="mdp"/>
                    <label>Repeter le Mot de Passe*
                    </label>
                    <input type="text" name="repmdp" id="repmdp"/>
                    <label class="obinfo">* Champs Obligatoire
                    </label>
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend>Details Personnel
                </legend>
                <p>
                    <label>Nom *
                    </label>
                    <input type="text" class="long" name="nom" id="nom"/>
                </p>
                <p>
                    <label>Prenom *
                    </label>
                    <input type="text" class="long" name="prenom" id="prenom"/>
                </p>
                <p>
                    <label>Telephone *
                    </label>
                    <input type="text" maxlength="10" name="tel" id="numtel"/>
                </p>
                <p>
                    <label class="optional">Adresse
                    </label>
                    <input type="text" class="long" name="adresse" id="adresse"/>
                </p>
                <p>
                    <label>Ville *
                    </label>
                    <input type="text" class="long" name="ville" id="ville"/>
                </p>
                <p>
                    <label>Pays *
                    </label>
                    <select name="localite" id="localite">
                        <option>
                        </option>
                        <option value="1">Etats-Unis
                        <option value="2">France
                        <option value="3">Allemagne
                        <option value="4">Espagne
                        </option>
                    </select>
                </p>

            </fieldset>
            <fieldset class="row3">
                <legend>Autres Informations
                </legend>
                <p>
                    <label>Genre *</label>
                    <input type="checkbox" value="radio"  name="sex" id="sex" />
                    <label class="gender">Homme </label>
                    <input type="checkbox" value="radio"  name="sex" id="sex"/>
                    <label class="gender"> Femme</label>
                </p>
                <p>
                    <label>Date de Naissance *
                    </label>
                    <select class="date" name="jour" id="jour" >
                        <option value="1">01
                        </option>
                        <option value="2">02
                        </option>
                        <option value="3">03
                        </option>
                        <option value="4">04
                        </option>
                        <option value="5">05
                        </option>
                        <option value="6">06
                        </option>
                        <option value="7">07
                        </option>
                        <option value="8">08
                        </option>
                        <option value="9">09
                        </option>
                        <option value="10">10
                        </option>
                        <option value="11">11
                        </option>
                        <option value="12">12
                        </option>
                        <option value="13">13
                        </option>
                        <option value="14">14
                        </option>
                        <option value="15">15
                        </option>
                        <option value="16">16
                        </option>
                        <option value="17">17
                        </option>
                        <option value="18">18
                        </option>
                        <option value="19">19
                        </option>
                        <option value="20">20
                        </option>
                        <option value="21">21
                        </option>
                        <option value="22">22
                        </option>
                        <option value="23">23
                        </option>
                        <option value="24">24
                        </option>
                        <option value="25">25
                        </option>
                        <option value="26">26
                        </option>
                        <option value="27">27
                        </option>
                        <option value="28">28
                        </option>
                        <option value="29">29
                        </option>
                        <option value="30">30
                        </option>
                        <option value="31">31
                        </option>
                    </select>
                    <select  name="mois" id="mois">
                        <option value="1">Janvier
                        </option>
                        <option value="2">Fevrier
                        </option>
                        <option value="3">Mars
                        </option>
                        <option value="4">Avril
                        </option>
                        <option value="5">Mai
                        </option>
                        <option value="6">Juin
                        </option>
                        <option value="7">Juillet
                        </option>
                        <option value="8">Aout
                        </option>
                        <option value="9">Septembre
                        </option>
                        <option value="10">Octobre
                        </option>
                        <option value="11">Novembre
                        </option>
                        <option value="12">Decembre
                        </option>
                    </select>
                    <input class="year" name="annee" type="text" id="annee" size="4" maxlength="4"/>ex: 1976
                </p>
                <p>
                    <label>Nationalite *
                    </label>
                    <select  name="nat" id="nat">
                        <option value="0">
                        </option>
                        <option value="1">Etats-Unis
                        <option value="2">France
                        <option value="3">Allemagne
                        <option value="4">Espagne
                        </option>
                    </select>
                </p>


            </fieldset>
            <fieldset class="row4">
                <legend>Terms and Mailing
                </legend>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>*  I accept the <a href="#">Terms and Conditions</a></label>
                </p>
            </fieldset>
            <div><button name="envoyer" class="button" id="envoyer" value="Envoyer"onClick="envoie(this.form)">Register</button></div>

            <div><a href="login.html" class="button1" >Retour</a></div>
        </form>
    </body>
</html>





