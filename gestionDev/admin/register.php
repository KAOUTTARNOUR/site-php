<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../style/inscription.css"> 
    
</head>
<body> 
  <div class="container">
   <form action="" method="POST">
       <h4>Nom</h4>
      <input type="text"  classe="tst" name="nom" placeholder="Entrez votre nom" required ><br><br>
        <h4>Prenom</h4>
      <input type="text" name="prenom" placeholder="Entrez votre prenom" required><br><br>
         <h4>Email</h4>
      <input type="text" name="email" placeholder="Entrez votre email" required><br><br>
      <h4>password</h4>
      <input type="password" name="password" placeholder="Entrez votre password"required><br><br>
      
      <div class="button">
      <button class="btn btn-primary" name="btn" type="submit">inscription</button>
      </div>
   </form>
  </div>
<?php

$servername = 'localhost';
 $username = 'root';
 $password = ''; 
 $dbname = 'gestiondev';
 $conn = new mysqli($servername, $username, $password,$dbname);

if (   isset($_POST["nom"])  &&   isset($_POST["prenom"])   &&   isset($_POST["email"])  &&  isset($_POST["password"])  )   {
   
   

  $name= $_POST["nom"]; 

  $prenom= $_POST["prenom"];

  $email= $_POST["email"]; 

  $pswrd=$_POST["password"];
  
  $hash_pass = password_hash($pswrd, PASSWORD_DEFAULT);


try{ 
  
   
 $dev = "INSERT INTO  user_table ( `nom_user`, `prenom_user`, `email_user`, `password_user`) VALUES ('$name','$prenom','$email', '$pswrd', '$hash_pass' )";
      $resultat = $conn->prepare($dev);
      $resultat->execute();
      header("location: login_v9/login.php");
    
    
      echo "You are connected";
      echo '<meta http-equiv="refresh" content="0">';
    }
    catch (PDOException $e) {
      echo "error" . $e->getMessage();

} 
}



?>
</body>
</html> 