<?php
require '_header.php';
?><!DOCTYPE html>
<html lang="fr" >

<head>
  <link rel="stylesheet" href="css/styles_article.css">
    <meta charset="UTF-8">
    <title>Trash-Licorne</title>

      <link rel="stylesheet" href="css/bootstrap.min.css"/> 
      <link rel="stylesheet" href="css/bootstrap-grid.min.css"/>
      <link rel="stylesheet" href="css/bootstrap-reboot.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="css/styles_main.css">
      <link rel="stylesheet" href="css/styles_femme.css">

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js'></script>
  <script  src="js/index.js"></script>


</head>

  <body>

  <?php require 'includes/navigation_template.php' ?>

    <div class="row">
        <?php $produits = $DB->query('SELECT * FROM produits'); ?>
        <?php foreach ($produits as $produit): ?>
        <div class="col-sm-2">
            <div class="cadre">
                <center>
                    <div class="product">
                        <div class="imgbox">
                        <a href="article.php"> <img src="img/produit-<?= $produit->id; ?>.png" class="blouson"></a>

                            <div class="details">
                                <h2>Licorne<br><span><?= $produit->nom; ?><h2><?= $produit->nom_principal; ?></span></h2>
                                <div class="price"><?= $produit->prix; ?> €</div>
                                <label> Sizes </label>
                                <ul>
                                <li>S</li>
                                <li>L</li>
                                </ul>
                                <br>
                                <a href="addpanier.php?id=<?= $produit->id; ?>"><button type="button" class="lea" class="add-to-cart" style="overflow: hidden;">Ajouter au panier</button></a>

                            </div>
                        </div>
                    </div>
                </center>

            </div>

        </div>
        <?php endforeach; ?>
    </div>




      <!--
          <div class="col-sm-2">
        

          </div>
     
            
        <div class="col-sm-2">
             <div class="cadre">
              <center>
                       <div class="product">
          <div class="imgbox">
          <img src="img/robe.PNG" class="blouson">

          <div class="details">
            <h2>Robe<br><span>Licorne design</span></h2>
            <div class="price">25€</div>
<label> Sizes </label>
              <ul>
              <li>S</li>
              <li>M</li>
              <li>L</li>
             </ul>
             <br>
           <button type="button" class="lea" class="add-to-cart" data-id="432" data-name="Pastilles" data-price="29,00" data-weight="97" data-url="/produit/pastilles-anti-douleurs/">Ajouter au panier</button>

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
          <img src="img/pyjama.PNG" class="blouson">

          <div class="details">
            <h2>Pyjama Licorne<br><span>Licorne design</span></h2>
            <div class="price">18€</div>
<label> Sizes </label>
              <ul>
              <li>S</li>
              <li>M</li>
              <li>L</li>
             </ul>
             <br>
          <button type="button" class="lea" class="add-to-cart" data-id="432" data-name="Pastilles" data-price="29,00" data-weight="97" data-url="/produit/pastilles-anti-douleurs/">Ajouter au panier</button>


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
          <img src="img/chausson.PNG" class="blouson">

          <div class="details">
            <h2>Chausson Licorne<br><span>Licorne design</span></h2>
            <div class="price">15€</div>
<label> Sizes </label>
              <ul>
              <li>S</li>
              <li>M</li>
              <li>L</li>
             </ul>
             <br>
           <button type="button" class="lea" class="add-to-cart" data-id="432" data-name="Pastilles" data-price="29,00" data-weight="97" data-url="/produit/pastilles-anti-douleurs/">Ajouter au panier</button>


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
          <img src="img/jupe.PNG" class="blouson">

          <div class="details">
            <h2>Jupe motif licorne<br><span>Licorne design</span></h2>
            <div class="price">20€</div>
<label> Sizes </label>
              <ul>
              <li>XS</li>
              <li>S</li>
              <li>M</li>
              <li>L</li>
             </ul>
             <br>
           <button type="button" class="lea" class="add-to-cart" data-id="432" data-name="Pastilles" data-price="29,00" data-weight="97" data-url="/produit/pastilles-anti-douleurs/">Ajouter au panier</button>


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
          <img src="img/sac.PNG" class="blouson">

          <div class="details">
            <h2>Sac brillant<br><span>Licorne design</span></h2>
            <div class="price">30€</div>
<label> Sizes </label>
              <ul>
              <li>S</li>
              <li>M</li>
              <li>L</li>
             </ul>
             <br>
          <button type="button" class="lea" class="add-to-cart" data-id="432" data-name="Pastilles" data-price="29,00" data-weight="97" data-url="/produit/pastilles-anti-douleurs/">Ajouter au panier</button>


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
          <img src="img/monnaie.PNG" class="blouson">

          <div class="details">
            <h2>Porte-monnaie chat <br><span>Licorne design</span></h2>
            <div class="price">20€</div>
<label> Sizes </label>
              <ul>
              <li>S</li>
              <li>M</li>
              <li>L</li>
             </ul>
             <br>
           <button type="button" class="lea" class="add-to-cart" data-id="432" data-name="Pastilles" data-price="29,00" data-weight="97" data-url="/produit/pastilles-anti-douleurs/">Ajouter au panier</button>


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
          <img src="img/veste.PNG" class="blouson">

          <div class="details">
            <h2>Veste en jean<br><span>Licorne design</span></h2>
            <div class="price">25€</div>
<label> Sizes </label>
              <ul>
              <li>S</li>
              <li>M</li>
              <li>L</li>
             </ul>
             <br>
           <button type="button" class="lea" class="add-to-cart" data-id="432" data-name="Pastilles" data-price="29,00" data-weight="97" data-url="/produit/pastilles-anti-douleurs/">Ajouter au panier</button>


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
          <img src="img/casquette.PNG" class="blouson">

          <div class="details">
            <h2>Casquette Hello Kitty<br><span>Licorne design</span></h2>
            <div class="price">12€</div>
<label> Sizes </label>
              <ul>
              <li>S</li>
              <li>M</li>
              <li>L</li>
             </ul>
             <br>
           <button type="button" class="lea" class="add-to-cart" data-id="432" data-name="Pastilles" data-price="29,00" data-weight="97" data-url="/produit/pastilles-anti-douleurs/">Ajouter au panier</button>


          </div>

      

          </div>
      </div>
                </center>
                </div>
          </div>
       
      </div>
      <div class="col-sm-4">
        

          </div>-->
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
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
     <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js'></script>
     <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js'></script>
     <script  src="js/index.js"></script>
  </body>

</html>
