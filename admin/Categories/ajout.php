<?php
    session_start();

    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $createur = $_SESSION['id'];
    $date_creation = date("Y-m-d");



    include "../../inc/functions.php";
    $conn=connect();

    $requette= "INSERT INTO categories(nom,description,createur,date_creation) VALUES ('$nom','$description','$createur','$date_creation')";

    $resultat = $conn->query($requette);

    if($resultat){
        header('location:list.php');
    }


?>


