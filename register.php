
<?php


session_start();

if(isset($_SESSION['fullname'])){
    header('location:profile.php');
}

  include "inc/functions.php";
  $showRegistrationAlert = 0;
  $categories = getAllCategories();

  if(!empty($_POST))//click sur register
  {
      addVisiteur($_POST);
      $showRegistrationAlert = 1;
        
      
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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.8/sweetalert2.min.css" rel="stylesheet">
</head>
<body>

   <?php

      include "inc/header.php";

    ?>

      <div class="container p-5 mt-5">
        <div class="card p-5 col-12">
            <h1 class="text-center">Register</h1>
           
            <form action="register.php" method="POST">

                <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">fullname</label>
                        <input name="fullname" type="text" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="mp" type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">telephone</label>
                  <input name="telephone" type="text" class="form-control" id="exampleInputPassword1">
                </div>

                

               
                

                <button type="submit" class="btn btn-warning text-white">REGISTER</button>
            </form>

        </div>
      </div>
    

      <div class="bg-dark p-5 mt-4">
        <p class="text-center text-warning">
            all rights reserved to Rania Elabed 
        </p>
      </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.8/sweetalert2.all.min.js"><script>
     
    
    
    
</body>


</html>