<?php
require '_header.php';
?><!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Panier - Trash/Licorne</title>

        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/styles_main.css">
        <link rel="stylesheet" href="css/style_paniers.css">

        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    </head>

  <body class="body_panier">
  <?php require 'includes/navigation_template.php' ?>

    <form method="post" action="#">
        <table cellspacing="0" class="shop_table cart">
            <thead>
                <tr>
                    <th class="product-remove">&nbsp;</th>
                    <th class="product-thumbnail">&nbsp;</th>
                    <th class="product-name">Produit</th>
                    <th class="product-price">Prix</th>
                    <th class="product-quantity">Quantité</th>
                    <th class="product-subtotal">Total Prix</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $ids = array_keys($_SESSION['panier']);
                if(empty($ids)){
                    $produits = array();
                }else{
                    $produits = $DB->query('SELECT * FROM produits_femme WHERE id IN ('.implode(',', $ids).')');
                }
                foreach($produits as $produit):
                ?>

                    <tr class="cart_item">
                        <td class="product-remove">
                            <a title="Remove this item" class="remove" href="panier_shop.php?delPanier=<?= $produit->id; ?>"><img src="img/icon/delete.png" class="delete_produit"></a>
                        </td>

                        <td class="product-thumbnail">
                            <img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="img/femme/produit-<?= $produit->id ?>.png">
                        </td>

                        <td class="product-name">
                            <span><?= $produit->nom; ?></span>
                        </td>

                        <td class="product-price">
                            <span class="amount"><?= number_format($produit->prix, 2, ',', ' '); ?> €</span>
                        </td>

                        <td class="product-quantity">
                            <div class="quantity buttons_added">
                                <a href="panier_shop.php?delProduit=<?= $produit->id; ?>"><input type="button" class="minus" value="-"></a>
                                <input type="number" size="10" class="input-text qty text" title="Qty" value="<?= $_SESSION['panier'][$produit->id]; ?>" min="0" step="1">
                                <a href="addpanier.php?id=<?= $produit->id; ?>" class="addPanier"><input type="button" class="plus" value="+"></a>
                            </div>
                        </td>

                        <td class="product-subtotal">
                            <span class="amount"><?= number_format($produit->prix * $_SESSION['panier'][$produit->id], 2, ',', ' '); ?> €</span>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php
                $ids = array_keys($_SESSION['panier']);
                if(empty($ids)){
                    $produits = array();
                }else{
                    $produits = $DB->query('SELECT * FROM produits_homme WHERE id IN ('.implode(',', $ids).')');
                }
                foreach($produits as $produit):
                    ?>

                    <tr class="cart_item">
                        <td class="product-remove">
                            <a title="Remove this item" class="remove" href="panier_shop.php?delPanier=<?= $produit->id; ?>"><img src="img/icon/delete.png" class="delete_produit"></a>
                        </td>

                        <td class="product-thumbnail">
                            <img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="img/homme/produit-<?= $produit->id ?>.png">
                        </td>

                        <td class="product-name">
                            <span><?= $produit->nom; ?></span>
                        </td>

                        <td class="product-price">
                            <span class="amount"><?= number_format($produit->prix, 2, ',', ' '); ?> €</span>
                        </td>

                        <td class="product-quantity">
                            <div class="quantity buttons_added">
                                <a href="panier_shop.php?delProduit=<?= $produit->id; ?>"><input type="button" class="minus" value="-"></a>
                                <input type="number" size="10" class="input-text qty text" title="Qty" value="<?= $_SESSION['panier'][$produit->id]; ?>" min="0" step="1">
                                <a href="addpanier.php?id=<?= $produit->id; ?>" class="addPanier"><input type="button" class="plus" value="+"></a>
                            </div>
                        </td>

                        <td class="product-subtotal">
                            <span class="amount"><?= number_format($produit->prix * $_SESSION['panier'][$produit->id], 2, ',', ' '); ?> €</span>
                        </td>
                    </tr>
                <?php endforeach; ?>

                <tr>
                    <td colspan="2">
                        <label>Total âchat : </label>
                    </td>
                    <td colspan="2">
                        <label>Produit :</label><span> <?= $panier->count(); ?> </span>
                    </td>
                    <td colspan="2">
                        <span><?= number_format($panier->total(), 2, ',', ' '); ?> €</span>
                    </td>
                </tr>
                <tr>
                    <td class="actions" colspan="6">
                        <div class="coupon">
                            <label for="coupon_code">Coupon Réduction:</label>
                            <input type="text" placeholder="Code" value="" id="coupon_code" class="input-text" name="coupon_code">
                            <input type="submit" value="Utiliser" name="apply_coupon" class="button">
                        </div>
                        <input type="submit" value="Supprimer tous les produits" name="update_cart" class="button" href="panier_shop.php?delPanier">
                        <input type="submit" value="Commencer paiement" name="proceed" class="checkout-button button alt wc-forward">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

    <?php require 'includes/footer.php'?>
  </body>
</html>