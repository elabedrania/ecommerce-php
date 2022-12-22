<?php

session_start();
  include "inc/functions.php";
  $categories = getAllCategories();

  if(!empty($_POST))//search clicked
  {
    $produits = searchProduit($_POST['search']);
  }else{
    $produits = getAllProducts();
  }

  

  

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lady</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

   <?php

      include "inc/header.php";

    ?>


      <div class="container mt-5">
        <div class="row col-12 mt-5 ">

          <?php
              foreach($produits as $produits){
                
                print '  <div class="col-3 ">
                <div class="card p-3" style="width: 18rem;">
                    <img src="images/'.$produits['image'].'" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">'.$produits['nom'].'</h5>
                      <p class="card-text">'.$produits['description'].'</p>
                      <p class="text-center text-warning">'.$produits['prix'].'Dt</p>
                      
                      <a href="produit.php?id='.$produits['id'].'" class="btn btn-warning text-white">Show</a>
                      
                    </div>
                </div>
            </div>';
              }
          ?>

          

            

            

            
        </div>
      </div>
    

    <?php include "inc/footer.php" ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>