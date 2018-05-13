 <!-- Déclaration de la variable contenant du titre de la page !-->
 <?php $titre = "Administration"; ?>
 <!-- Include du haut de la page situé dans le inc/header.php !-->
 <?php include('inc/header.php'); ?>
 <!-- Fin du header !-->
 
 <?php
         if(isset($_SESSION['id_membre']) AND $userinfo['id_membre'] == $_SESSION['id_membre']) {
		 }else{
			 echo "<script type='text/javascript'>document.location.replace('connexion.php');</script>";
		 }
         
         if($userinfo['administrateur'] == '0'){
             echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
             
         }else{
   
         }
         ?>
 
 <!-- Début de la page !-->
		<section class="Sec5">
		
      <article>
	  
	  <a href="#membres"><button class="btn-adm">Liste des membres</button></a>
      <a href="#top"><button class="btn-adm">Gérer le TOP 15</button></a>
	  <a href="#ajout"><button class="btn-adm">Ajouter un pays</button></a>
	  <a href="#record"><button class="btn-adm">Gérer les records</button></a>
	  <a href="#nageur"><button class="btn-adm">Ajouter un nageur</button></a>
	  <a href="#slider"><button class="btn-adm">Gérer le slider</button></a>
       <h1 id="membres" class="Titre">Liste des membres</h1>
		  
		  <hr class="separateur">
		  <?php if(isset($_GET['membre'])){
			  $membre = htmlentities(trim($_GET['membre']));
			  $suppmembre = $bdd->prepare("DELETE FROM membres WHERE id_membre = ? LIMIT 1");
			  $suppmembre->execute(array($membre));
			  echo '<div class="Titre-connexion"><font color="green">Le compte du membre ayant pour ID: '. $_GET['membre'] .' a été supprimé</font></div>';
			  echo "<script language=\"javascript\"> alert(\"Le membre ayant l'ID: ". $membre ." a bien été supprimé !\"); </script>";
		  }
		  ?>
		     <table>                     
        <thead>
            <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Adresse e-mail</th>
              <th>Administrateur</th>
			  <th>Suppression</th>
            </tr>
        </thead>
        <tbody>
<?php 
 $sql = 'SELECT * FROM membres ORDER BY id_membre ASC';
        foreach ($bdd->query($sql) as $row) {
        echo '<tr>
                  <td>' . $row["nom_membre"]. '</td>
				  <td>' . $row["prenom_membre"] .'</td>
                  <td>' . $row["adresse_email"] .'</td>';
				  
        if($row['administrateur'] == 1){
			echo  '<td>Oui</td>';
		}else{
			echo  '<td>Non</td>';
		}
		
		echo '<td><a href="administration.php?membre='. $row["id_membre"].'"><img src="./img/supprimer.png"/></a></td></tr>';
		
    }
?>
		  
       </tbody>
</table> 



	<h1 id="top" class="Titre">Gestion du TOP 15 </h1>
		  
		  <hr class="separateur">
		  <?php if(isset($_GET['top'])){
			  $top = htmlentities(trim($_GET['top']));
			  $supptop = $bdd->prepare("DELETE FROM medailles WHERE id_pays = ? LIMIT 1");
			  $supptop->execute(array($top));
			  echo '<div class="Titre-connexion"><font color="green">Le pays ayant pour ID: '. $_GET['top'] .' a été supprimé</font></div>';
			  echo "<script language=\"javascript\"> alert(\"Le pays pour ID: ". $_GET['top'] ." a bien été supprimé !\"); </script>";
		  }
		  ?>
		     <table>                     
        <thead>
            <tr>
              <th>Rang</th>
              <th>Pays</th>
              <th>Abréviation</th>
              <th>Médailles d'or</th>
			  <th>Médailles d'argent</th>
			  <th>Médailles de bronze</th>
			  <th>Total</th>
			  <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
<?php 
 $sql = 'SELECT * FROM medailles ORDER BY rang_pays ASC';
        foreach ($bdd->query($sql) as $row) {
		$total = $row["med_or"] + $row["med_argent"] + $row["med_bronze"];
        echo '<tr>
                  <td>' . $row["rang_pays"]. '</td>
				  <td><img src="./img/Flag'. $row["abrev_pays"] . '.png"/>' . $row["nom_pays"] .'</td>
                  <td>' . $row["abrev_pays"] .'</td>
				  <td>' . $row["med_or"] .'</td>
				  <td>' . $row["med_argent"] .'</td>
				  <td>' . $row["med_bronze"] .'</td>
				  <td>' . $total .'</td>
				  <td><a href="administration.php?top='. $row["id_pays"].'#top"><img src="./img/supprimer.png"/></a></td>
		      </tr>';
		
    }
?>
		  
       </tbody>
</table> 


<h1 id="ajout" class="Titre">Ajout d'un pays au top</h1>
		  <hr class="separateur">
		  <?php include('inc/ajout-pays.php'); ?>
		<div id="connexion">
									<form method="post" action="#ajout">
										<input type="text" name="nom" placeholder="Nom du pays"/>
										<input type="text" name="rang" placeholder="Rang du pays"/>
										<input type="text" name="abrev" placeholder="Abréviation"/>
										<input type="text" name="or" placeholder="Médailles d'or"/>
										<input type="text" name="argent" placeholder="Médailles d'argent"/>
										<input type="text" name="bronze" placeholder="Médailles de bronze"/>
										<input type="submit" name="ajout_pays" value="Ajouter"/>
									</form>
		</div>
		
		
<h1 id="record" class="Titre">Gestion des records </h1>
		  
		  <hr class="separateur">
		  <?php if(isset($_GET['record'])){
			  $record = htmlentities(trim($_GET['record']));
			  $supprecord = $bdd->prepare("DELETE FROM records WHERE id_nageur = ? LIMIT 1");
			  $supprecord->execute(array($record));
			  echo '<div class="Titre-connexion"><font color="green">Le nageur ayant pour ID: '. $_GET['record'] .' a été supprimé</font></div>';
			  echo "<script language=\"javascript\"> alert(\"Le nageur pour ID: ". $_GET['record'] ." a bien été supprimé !\"); </script>";
			  
		  }
		  ?>
		     <table class="rec-adm">                     
        <thead>
            <tr>
              <th>Rang</th>
              <th>Nom</th>
              <th>Pays</th>
              <th>Années</th>
			  <th>Médailles d'or</th>
			  <th>Médailles d'argent</th>
			  <th>Médailles de bronze</th>
			  <th>Total</th>
			  <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
<?php 
 $sql = 'SELECT * FROM records ORDER BY rang_nageur ASC';
        foreach ($bdd->query($sql) as $row) {
		$total = $row["med_or"] + $row["med_argent"] + $row["med_bronze"];
        echo '<tr>
                  <td>' . $row["rang_nageur"]. '</td>
				  <td>' . $row["nom_nageur"] .'</td>
				  <td><img src="./img/Flag'. $row["abrev_pays_nageur"] . '.png"/>' . $row["abrev_pays_nageur"] .'</td>
                  <td>' . $row["annees"] .'</td>
				  <td>' . $row["med_or"] .'</td>
				  <td>' . $row["med_argent"] .'</td>
				  <td>' . $row["med_bronze"] .'</td>
				  <td>' . $total .'</td>
				  <td><a href="administration.php?record='. $row["id_nageur"].'#record"><img src="./img/supprimer.png"/></a></td>
		      </tr>';
		
    }
?>
		  
       </tbody>
</table> 

<h1 id="nageur" class="Titre">Ajout d'un nageur à la page des records</h1>
		  <hr class="separateur">
		  <?php include('inc/ajout-nageur.php'); ?>
		<div id="connexion">
									<form method="post" action="#nageur">
										<input type="text" name="nom" placeholder="Nom du nageur"/>
										<input type="text" name="rang" placeholder="Rang du nageur"/>
										<input type="text" name="abrev" placeholder="Abréviation du pays du nageur"/>
										<input type="text" name="annees" placeholder="Années de participations"/>
										<input type="text" name="or" placeholder="Médailles d'or"/>
										<input type="text" name="argent" placeholder="Médailles d'argent"/>
										<input type="text" name="bronze" placeholder="Médailles de bronze"/>
										<input type="submit" name="ajout_nageur" value="Ajouter"/>
									</form>
		</div>
		
		

<h1 id="slider" class="Titre">Liste des slides </h1>
		  
		  <hr class="separateur">
		  <?php if(isset($_GET['slide'])){
			  $slide = htmlentities(trim($_GET['slide']));
			  $suppslide = $bdd->prepare("DELETE FROM slider WHERE id_slide = ? LIMIT 1");
			  $suppslide->execute(array($slide));
			  echo '<div class="Titre-connexion"><font color="green">Le slide ayant pour ID: '. $_GET['slide'] .' a été supprimé</font></div>';
			  echo "<script language=\"javascript\"> alert(\"Le slide pour ID: ". $_GET['slide'] ." a bien été supprimé !\"); </script>";
			  
		  }
		  ?>
		     <table class="slide-adm">                     
        <thead>
            <tr>
              <th>Image</th>
              <th>Titre du slide</th>
              <th>Description du slide</th>
			  <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
<?php 
 $sql = 'SELECT * FROM slider ORDER BY id_slide ASC';
        foreach ($bdd->query($sql) as $row) {
        echo '<tr>
			      <td><img class="adm-slider" src="'. $row["image"] . '"/></td>
				  <td>' . $row["titre"] .'</td>
                  <td>' . $row["description"] .'</td>
				  <td><a href="administration.php?slide='. $row["id_slide"].'#slider"><img src="./img/supprimer.png"/></a></td>
		      </tr>';
		
    }
?>
		  
       </tbody>
</table> 


<h1 class="Titre">Ajout d'un slide</h1>
		  <hr class="separateur">
		  <?php include('inc/ajout-slide.php'); ?>
		<div id="connexion">
									<form method="post" action="#slider">
										<input type="text" name="image" placeholder="Image du slide"/>
										<input type="text" name="titre" placeholder="Titre du slide en 110 caractères (phrase affichée en haut)" maxlength="110"/>
										<input type="text" name="description" placeholder="Description du slide en 110 caractères (phrase affichée en bas)" maxlength="110"/>
										<input type="submit" name="ajout_slide" value="Ajouter"/>
									</form>
		</div>

      </article>
    </section>

<!-- Include du bas de la page situé dans le inc/footer.php !-->
<?php include('inc/footer.php'); ?>
<!-- Fin du footer !-->