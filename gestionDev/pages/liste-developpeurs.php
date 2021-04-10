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
     <link rel="stylesheet" href="  ../style/tbldev.css">
</head>
<?php


$dsn = 'mysql:host=localhost;dbname=gestiondev';
  $user = 'root';
  $pswrd = '';


    try{
        $con = new PDO($dsn, $user, $pswrd);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $slct = "SELECT * FROM developpeur";
         $resulte = $con->query($slct);
           
        if (!$resulte) {
        echo "ERROR"; 
        }
        else{
          $row = $resulte->rowCount();

        }
        
    }
    catch(PDOException $e){
        echo "failed" . $e->getMessage();  
    }

?>

<body>
  <h1>Liste de devloppeur</h1>
<div class="container">
  <div class="table">
  <table class="table table-bordered table-dark">
  <thead>
    <tr>
     
    <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">prenom</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
                   <?php
                       while ($lgn = $resulte->fetch(PDO::FETCH_NUM)){
                         echo "<tr>";
                         foreach ($lgn as $value){
                           echo"<td>$value</td>";
                         }
                         echo"</tr>";
                       }
                       ?>
                       <?php
                       $resulte->closeCursor();
                       ?>
       
  </tbody>
</table>
  </div>
</div>

</body>
</html>