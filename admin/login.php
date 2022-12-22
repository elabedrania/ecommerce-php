<?php

/*session_start();
if(isset($_SESSION['nom'])){
    //header('location:profile.php');
}*/



include "../inc/functions.php";

$user = true;
if(!empty($_POST))//click sur register
  {
      $user=connectAdmin($_POST);
    
      if(is_array($user) && count($user)>0){

        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['mp'] = $user['mp'];
        $_SESSION['nom'] = $user['nom'];
        
        header('location:profile.php');

      }
        
      
  }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.8/sweetalert2.min.css" rel="stylesheet">

</head>
<body>
<?php 
       // include "inc/header.php";
   ?>

            <div class="container p-5 mt-5">
                    <div class="card p-5 col-12">
                    <h1 class="text-center">Admin Space : Login</h1>
                        <form action="login.php" method="post">
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input name="mp" type="password" class="form-control" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-warning text-white">LOGIN</button>
                        </form>

                    </div>
                </div>
                <?php include "../inc/footer.php" ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
    /*    if(!$user){
          print"
            <script>
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Something went wrong!',
              timer: 2000
            })
            
            </script>
          ";
        }*/
    ?>
</body>
</html>