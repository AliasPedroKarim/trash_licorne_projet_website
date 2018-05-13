<?php require '_header.php';
if(isset($_GET['id'])){
    $produit = $DB->query('SELECT id FROM produits WHERE id=:id', array('id' => $_GET['id']));
    if(empty($produit)){
        die("Ce produit n'exite pas !!!");
}
   $panier->add($produit[0]->id);
    die('Produit ajouter dans le panier, <a href="javascript:history.back()">retour</a>');
}else{
    die('vous n\'avez séléctionner aucun produit !');
}
?>