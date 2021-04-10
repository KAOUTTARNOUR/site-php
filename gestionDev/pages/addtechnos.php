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
  <link rel="stylesheet" href="dev.css">
</head>
<?php

$dsn = 'mysql:host=localhost;dbname=gestiondev';
$user = 'root';
$pass = '';


try {
    $cdb = new PDO($dsn, $user, $pass);
    $cdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 

  if (isset($_POST["ajouter"])) {

    $select = $_POST["select"];
    $html = $_POST["html"];
    $cgi = $_POST["cgi"];
    $js = $_POST["js"];
    $ajax = $_POST["ajax"];
    $php = $_POST["php"];

    $requit = "INSERT INTO technos (html, cgi, ajax,  php, id_dev, js) VALUES ('$html','$cgi', '$ajax', '$php', '$select', '$js')";
    $resulte = $cdb->exec($requit);
    $message = "";
  } else {

    $requet = "SELECT nom , id FROM developpeur";
    $resultte = $cdb->query($requet);
   
    if (!$resultte) {
      echo "erour";
    } else {

      $tst = $resultte->rowCount();
    }
  }
} catch (PDOException $e) {
  echo "no connect" . $e->getMessage();
}


?>

<body>
  <form action="" method="POST">
    <div class="container">
    <select style="width:100%" name="select">
                          <?php
                          // var_dump($resultte->fetchAll());

                          $r  = $resultte->fetchAll();
                          foreach ($r as $a) {
                            // var_dump($a["nom_developpeurs"]);
                            // var_dump($a['id_developpeurs']);
                            echo "<option value ='".$a['id'] . "'  >" . $a["nom"] . "</option>";
                          }
                          // while ($ligne = $resultte->fetch(PDO::FETCH_NUM)) {

                          // foreach ($ligne as $value) {
                          // echo"<option value ='".$value['id_developpeurs']."' >$value</option>";
                          // }

                          // }
                          ?>
                          <?php
                          $resultte->closeCursor();
                          ?>
                        </select>



      <div class="form-group">
        <label class="control-label col-sm-2" for="prenom">html:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="prenom" placeholder="" name="html">
        </div> <br><br>
        <label class="control-label col-sm-2" for="prenom">cgi:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="prenom" placeholder="" name="cgi">
        </div> <br><br>
        <label class="control-label col-sm-2" for="prenom">js:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="prenom" placeholder="" name="js">
        </div> <br><br>
        <div class="form-group">
          <label class="control-label col-sm-2" for="nom">ajax:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nom" placeholder="" name="ajax">
          </div> <br> <br>
          <div class="form-group">
          <label class="control-label col-sm-2" for="nom">php:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nom" placeholder="" name="php">
          </div> <br> <br>

          <div class="col-auto">
            <button  type="submit" name="ajouter" class="btn btn-outline-warning" onclick="redirect()">Ajouter</button>
          </div>

        </div>
  </form>
 
</body>



<footer>




</footer>
</html>