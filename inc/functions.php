<?php

    function connect(){
        //connect to DB
        $servername = "localhost";
        $DBuser = "root";
        $DBpassword = "";
        $DBname = "lady";
        
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return $conn;

    }



    function getAllCategories(){
           
        $conn = connect();

        // Request Creation
        $requette = "SELECT * FROM categories";

        //request execution

        $resultat = $conn->query($requette);

        //request result
        
        $categories = $resultat->fetchAll();

        return $categories;
    }


    function getAllProducts(){

        $conn = connect();
         
         
                 // Request Creation
                 $requette = "SELECT * FROM produit";
         
                 //request execution
         
                 $resultat = $conn->query($requette);
         
                 //request result
                 
                 $produits = $resultat->fetchAll();
         
                 return $produits;
    }


    function searchProduit($key){

        $conn = connect();

         // Request Creation
         $requette = "SELECT * FROM produit WHERE nom LIKE '%$key%'";
 
         //request execution
         $resultat = $conn->query($requette);
 
         //request result
         
         $produits = $resultat->fetchAll();
 
         return $produits;

    }

    function getProduitById($id){
        $conn = connect();

        $requette = "SELECT * FROM produit WHERE id=$id";


         //request execution
         $resultat = $conn->query($requette);
 
         //request result
         
         $produits = $resultat->fetch();

         return $produits;
        
    }

    function addVisiteur($data){

        $conn = connect();

        $mphash=md5($data['mp']);

        $requette = "INSERT INTO visiteur(fullname, email, mp, telephone) VALUES ('".$data['fullname']."','".$data['email']."','".$mphash."','".$data['telephone']."') ";

         //request execution
         $resultat = $conn->query($requette);
 
         //request result
         
         //$visiteur = $resultat->fetch();

         //return $visiteur;
        if($resultat){
            return true;
         }else{
            return false;
         }

    }

    function connectVisiteur($data){
        $conn = connect();
        $email=$data['email'];
        $mp=md5($data['mp']);
        $requette = "SELECT * FROM visiteur WHERE email = '$email' AND mp='$mp'";

        $resultat=$conn->query($requette);

        $user = $resultat->fetch();

        return $user;
    }

    function connectAdmin($data){
        $conn = connect();
        $email=$data['email'];
        $mp=$data['mp'];

        $requette = "SELECT * FROM administrateur WHERE email = '$email' AND mp='$mp'";

        $resultat=$conn->query($requette);

        $user = $resultat->fetch();

        return $user;
    }
?>