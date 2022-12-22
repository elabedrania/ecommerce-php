<?php

session_start();

if(!isset($_SESSION['fullname'])){
    header('location:connection.php');
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
    <?php include "inc/header.php"; ?>
    <div class="container">
        <div class="card mt-5 p-5">
        <h1>Welcome to your profile <span class="text-primary"><?php echo $_SESSION['fullname']; ?></span></h1>


       <!--<button class="btn btn-warning"> <a href="logout.php" class="text-white">LOG OUT</a> </button>-->

        </div>
    </div>
    <?php include "inc/footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.8/sweetalert2.all.min.js"><script>
     
     
</body>
</html>