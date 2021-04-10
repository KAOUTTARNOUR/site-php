<?php

include("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="/style/dev.css">
</head>

<body>
  <form action="" method="POST">
    <div class="container">

      <div class="form-group">
        <label class="control-label col-sm-2" for="prenom">Prenom:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="prenom" placeholder="" name="prenom">
        </div> <br><br>
        <div class="form-group">
          <label class="control-label col-sm-2" for="nom">nom:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nom" placeholder="" name="nom">
          </div> <br> <br>
          <div class="form-group">
            <label class="control-label col-sm-2" for="adress">Adresse:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="adress" placeholder="" name="email">
            </div>
          </div><br>
          <div class="col-auto">
            <button  type="submit" name="ajouter" class="btn btn-outline-warning" onclick="redirect()">Ajouter</button>
          </div>

        </div>
  </form>
  <?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestiondev";

$conn = new mysqli($servername, $username, $password, $dbname);

  if(      isset($_POST["ajouter"] )       &&      isset($_POST["prenom"] )  &&   isset($_POST["nom"] )   &&     isset($_POST["email"] )      )
  
  
  {
    if (empty($_POST["prenom"]) || empty($_POST["nom"]) || empty($_POST["email"])) {
      echo" vide";
    }
    else {
      $prenom=$_POST["prenom"];
      $nom=$_POST["nom"];
      $email=$_POST["email"];
  
  
      $sql="INSERT INTO developpeur(nom,PRENOM,email)
      VALUES ('$nom', '$prenom','$email')";
      $conn->query($sql);
    }


    

    

    
  }
 
  
  ?>
</body>



<footer>




</footer>
</html>