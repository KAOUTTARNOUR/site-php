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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/liste-technos.css">
</head>
<body>
  <H1>Listes developpeurs niveau inssufisant</H1>
<form action="" method="POST">
 <?php


    $dsn = 'mysql:host=localhost;dbname=gestiondev';
    $user = 'root';
    $pswrd = '';


    try{
        $con = new PDO($dsn, $user, $pswrd);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $slct = "SELECT d.nom, d.PRENOM, d.email FROM developpeur d inner join technos t on d.id = t.id_dev where t.html <= 3 or t.cgi <= 3 or t.js <=3 or t.ajax <= 3 or t.php <= 3";
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
   <table class="table">
                      <thead class=" text-primary">

                        <th>
                         Nom
                        </th>
                        <th>
                          Prenom
                        </th>
                        <th>
                          Email
                        </th>
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

</form>
</body>
</html>