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
    <h1>Liste de technos</h1>
    <form action="" method="POST">
    <?php
$dsn = 'mysql:host=localhost;dbname=gestiondev';
  $user = 'root';
  $pswrd = '';


    try{
        $con = new PDO($dsn, $user, $pswrd);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $slct = "SELECT technos.id, technos.html, technos.cgi, technos.js, technos.ajax, technos.php, developpeur.nom
        FROM technos
        INNER JOIN developpeur ON technos.id = developpeur.id";
         $resulte = $con->query($slct);

        if (!$resulte) {
        echo "error";
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
                         Id
                        </th>
                        <th>
                          html
                        </th>
                        <th>
                          cgi
                        </th>
                        <th>
                          js
                        </th>
                        <th>
                          ajax
                        </th>
                        <th>
                          php
                        </th>
                        <th>
                         Nom
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