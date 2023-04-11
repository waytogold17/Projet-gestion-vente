<?php 
# connexion a la base
require 'C:/xampp/htdocs/market/php/config/config.php';

$prod = $_GET['id'];
$sql="select * from client where id_client = '$prod'";
$reponse=$bdd->query($sql);
$data=$reponse->fetchAll();
echo '<pre>';
//print_r ($data);
echo '</pre>';
?>
<h1>T'es sûr de vouloir supprimer??</h1>
<link rel="stylesheet" type="text/css" href="/../market/css/bootstrap.min.css">
<div class="container">
<table class="table table-bordered table-dark table-hover" border='2'>
    <tr>
      <th>id</th>
      <th>Produit</th>
    </tr>
    <?php
    foreach($data as $prod){
      echo'  <tr>
            <td>'.$prod['id_client'].'</td>
            <td>'.$prod['nom_client'].'</td>
        </tr>'; } 
    ?>
</table>
</div>
<form action="/../market/php/suppression/clientDelOk.php" method="POST">
    <input type="hidden" name="txtProd" id="txtProd" value="<?php echo $prod['id_client'];?>">
    <input type="submit" value="Supprimer" >
    <button onclick="window.location.href = '/../market/php/liste/clientListe.php'">Annuler</button>
</form>