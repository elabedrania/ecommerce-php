<?php
  include "inc/functions.php";
  $categories = getAllCategories();

    if(isset($_GET['id']) ){
        $produits = getProduitById($_GET['id']);
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

            <div class="card col-8 offset-2" style="width: 18rem;">
                    <img src="images/<?php echo $produits['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                            <h5 class="card-title"><?php echo $produits['nom'] ?></h5>
                            <p class="card-text"><?php echo $produits['description'] ?></p>
                            <p class="card-text text-danger"><?php echo $produits['prix'] ?> Dt</p>
                            <a href="#" class="btn btn-warning text-chite">Go somewhere</a>
                    </div>
            </div>

          

            

            

            
        </div>
      </div>
    

      <?php include "inc/footer.php" ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>