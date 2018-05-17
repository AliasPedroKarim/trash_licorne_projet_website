<?php require '_header.php';
if(isset($_GET['id'])){
    $produit = $DB->query('SELECT id FROM produits_femme WHERE id=:id', array('id' => $_GET['id']))
    OR $DB->query('SELECT id FROM produits_homme WHERE id=:id', array('id' => $_GET['id']));
    $json = array('error' => true);
    if(empty($produit)){
        $json['message'] = 'Ce produit n\'exite pas !!!';
}
   $panier->add($produit[0]->id);
    $json['error'] = false;
    $json['count'] = $panier->count();
    $json['message'] = 'Produit ajouter dans le panier';
}else{
    $json['message'] = 'vous n\'avez séléctionner aucun produit !';
}

echo json_encode($json);