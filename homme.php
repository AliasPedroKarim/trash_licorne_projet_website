<?php
require '_header.php';
?><!DOCTYPE html>
<html lang="fr" >

    <head>
        <meta charset="UTF-8">
        <title>Trash-Licorne</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-grid.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-reboot.min.css"/>
        <link rel="stylesheet" href="css/styles_main.css">
        <link rel="stylesheet" href="css/styles_homme.css">


        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js'></script>
        <script  src="js/index.js"></script>
    </head>

    <body>
    <?php require 'includes/navigation_template.php' ?>

    <div class="ajoute_panier">
        <img src="img/icon/check.png" class="icon_confirm"> Ajouté au panier !
    </div>

    <div class="row articles">
        <?php $produits = $DB->query('SELECT * FROM produits_homme'); ?>
        <?php foreach ($produits as $produit): ?>
            <div class="cadre">
                <center>
                    <div class="product">
                        <div class="imgbox">
                            <a href="article.php"> <img src="img/homme/produit-<?= $produit->id; ?>.png" class="blouson"></a>

                            <div class="details">
                                <h2>Licorne<br><span><?= $produit->nom; ?><h2><?= $produit->nom_principal; ?></span></h2>
                                <div class="price"><?= $produit->prix; ?> €</div>
                                <label> Sizes </label>
                                <div class="taille"><?= $produit->taille_produits; ?></div>
                                <br>
                                <a href="addpanier.php?id=<?= $produit->id; ?>" class="addPanier"><div class="lea" style="overflow: hidden;">Ajouter au panier</div></a>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        <?php endforeach; ?>
    </div>

    <?php require 'includes/footer.php'?>

      

   
    <!-- <div class="block_article">
        <table>
          <tr>
            <td><img src="img/tshirtblanc.png" class="blouson"></td> 
            <td><img src="img/blouson.png" class="blouson"></td>
            <td><img src="img/veste.jpg" class="blouson"></td>
          </tr>
          <tr>
            <td><img src="img/teeshirt.jpg" class="blouson"></td>
            <td><img src="img/pantalon.jpg" class="blouson"></td>
            <td><img src="img/chaussure.jpg" class="blouson"></td>
          </tr>
        </table>
      </div>
    </div>  -->

    
    <!--

          </div>
        <div class="col-sm-2">
          <div class="cadre">
             <center><div class="product">
    <div class="imgbox">
      <img src="img/pantalon.jpg" class="blouson">
        <div class="details">
          <h2>Pantalon<br><span>Style </span></h2>
          <br>
          <div class="prix">29,99€</div>
          <label>Tailles</label>
      <ul>
      <li>XS</li>
      <li>S</li>
      <li>M</li>
      <li>L</li>
      <li>XL</li>
      </ul>
      <br>
    <a href="panier">Ajouter au panier</a>
        </div>
        </div>
  </div>
                </center>
                </div>
          </div>
       
      </div>
      <div class="col-sm-4">
        

          </div>
      
      
       
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
 <div class="row">
      
      <div class="col-sm-2">
        <div class="cadre">
          <center>
                      <div class="product">
    <div class="imgbox">
      <img src="img/veste.jpg" class="blouson">
        <div class="details">
          <h2>Veste<br><span>Bi-color </span></h2>
          <br>
          <div class="prix">41,90€</div>
          <label>Tailles</label>
      <ul>
      <li>XS</li>
      <li>S</li>
      <li>M</li>
      <li>L</li>
      <li>XL</li>
      </ul>
      <br>
    <a href="panier">Ajouter au panier</a>
        </div>
        </div>
  </div>
                </center>

          </div>
                 
          </div>
          <div class="col-sm-2">
        

          </div>
     
            
        <div class="col-sm-2">
             <div class="cadre">
              <center>
                       <div class="product">
    <div class="imgbox">
      <<img src="img/blouson.png" class="blouson">
        <div class="details">
          <h2>Blouson<br><span>Hiver </span></h2>
          <br>
          <div class="prix">89,90€</div>
          <label>Tailles</label>
      <ul>
      <li>XS</li>
      <li>S</li>
      <li>M</li>
      <li>L</li>
      <li>XL</li>
      </ul>
      <br>
    <a href="panier">Ajouter au panier</a>
        </div>
        </div>
  </div>
                </center>
                  </div>
          </div>
          <div class="col-sm-2">
        

          </div>
        <div class="col-sm-2">
          <div class="cadre">
             <center>
                      <div class="product">
    <div class="imgbox">
      <img src="img/teeshirt.jpg" class="blouson">
        <div class="details">
          <h2>Tee-shirt noir<br><span>on top </span></h2>
          <br>
          <div class="prix">18,90€</div>
          <label>Tailles</label>
      <ul>
      <li>XS</li>
      <li>S</li>
      <li>M</li>
      <li>L</li>
      <li>XL</li>
      </ul>
      <br>
    <a href="panier">Ajouter au panier</a>
        </div>
        </div>
  </div>
                </center>
                </div>
          </div>
       
      </div>
      <div class="col-sm-2">
        

          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
           <div class="row">
      
      <div class="col-sm-2">
        <div class="cadre">
          <center>
                      <div class="product">
    <div class="imgbox">
      <img src="img/bob.jpg" class="blouson">
        <div class="details">
          <h2>Bob noir<br><span>sun </span></h2>
          <br>
          <div class="prix">10,90€</div>
          <label>Tailles</label>
      <ul>
      <li>XS</li>
      <li>S</li>
      <li>M</li>
      <li>L</li>
      <li>XL</li>
      </ul>
      <br>
    <a href="panier">Ajouter au panier</a>
        </div>
        </div>
  </div>
                </center>

          </div>
                 
          </div>
          <div class="col-sm-2">
        

          </div>
     
            
        <div class="col-sm-2">
             <div class="cadre">
              <center>
                       <div class="product">
    <div class="imgbox">
      <img src="img/pull.png" class="blouson">
        <div class="details">
          <h2>Sweat noir<br><span>coton </span></h2>
          <br>
          <div class="prix">38,90€</div>
          <label>Tailles</label>
      <ul>
      <li>XS</li>
      <li>S</li>
      <li>M</li>
      <li>L</li>
      <li>XL</li>
      </ul>
      <br>
    <a href="panier">Ajouter au panier</a>
        </div>
        </div>
  </div>
                </center>
                  </div>
          </div>
          <div class="col-sm-2">
        

          </div>
        <div class="col-sm-2">
          <div class="cadre">
          <center>
            <div class="product">
    <div class="imgbox">
      <img src="img/gris.jpg" class="blouson">
        <div class="details">
          <h2>Tee-shirt gris<br><span>Long </span></h2>
          <br>
          <div class="prix">22,90€</div>
          <label>Tailles</label>
      <ul>
      <li>XS</li>
      <li>S</li>
      <li>M</li>
      <li>L</li>
      <li>XL</li>
      </ul>
      <br>
    <a href="panier">Ajouter au panier</a>
        </div>
        </div>
  </div>
                </center>
                </div>
          </div>
       
      </div>
      <div class="col-sm-2">
        

          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>


-->
  </body>

</html>
