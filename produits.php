<?php
$linkpdp = "";
require ('produits/ajout_produit.php');
require ('produits/ajout_image.php');

?>
<link rel="stylesheet" href="css/produits.css" />
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

	<?php
	     if (empty($errors) === false) {
	        echo '<ul>';
	        foreach ($errors as $error) {
	            echo "<div class='alert alert-danger alert-dismissible fade show'> $error
	            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	              <span aria-hidden='true'>&times;</span>
	            </div>";
	        }
	        echo '</ul>';
	    } else if (empty($errors1) === false) {
         echo '<ul>';
         foreach ($errors1 as $error1) {
             echo "<div class='alert alert-success alert-dismissible fade show'> $error1
             <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
               <span aria-hidden='true'>&times;</span>
             </div>";
         }
         echo '</ul>';
     }
?>

<body>
  <div class="head">
    <br>
  <h1 class="titre"> Ajout d'un produit </h1>
  <br>
  </div>
  <br>
  <h2> Premi&egrave;re &eacute;tape : </h2>

  <form  method="post" enctype="multipart/form-data" action="#">
      <div>
        <label for="pdp">Ajouter une photo (max. 0.5Mo) : </label>
        <input type="hidden" name="MAX_FILE_SIZE" value="530000">
        <input class="form-control" type="file" name="avatar" id="image">
      </div>
      <br>
      <p> Votre image t&eacute;l&eacute;charg&eacute;e est : <b>
        <?php if ($linkpdp != ""){
        echo $fichier;
      }else { echo "Aucune";
      } ?> </b>
      </p>
      <button type="submit" value="OK" class="OK" name="envoyer">OK</button>
    </form>

    <br>
    <hr>
    <h2> Deuxi&egrave;me &eacute;tape : </h2>

  <form method="post" action="produits.php?ajoutproduit=<?php echo $linkpdp ?>">
		<div>
			<label for="categorie">Cat&eacute;gorie :</label>
			<br>
			<select name="categorie">
              <option value="">Choisir :</option>
			        <option value="1"> Femme</option>
              <option value="1"> Homme</option>
			</select>
		</div>

		<br>


		<br>

    <div>
      <label for="name">Nom du produit</label>
      <input type="text" name="name" maxlength="255" class="form-control" id="name">
    </div>

    <div>
      <label for="prix">Prix (&euro;)</label>
      <input type="text" name="prix" class="form-control" id="prix">
    </div>

		

    <div>
      <label for="description">Description</label>
      <textarea type="text" name="description" maxlength="255" class="form-control" id="Description"></textarea>
    </div>
	 

		<br>

		

  <br>

    <button type="submit" name="ajout_produit" href="admin.php?selector=3&&ajoutproduit=<?php echo $linkpdp ?>" class="btn btn-primary">Ajouter</button>
  </form>
    <a href="index_admin.php">Retour</a>
	<br>
</main>
</body>