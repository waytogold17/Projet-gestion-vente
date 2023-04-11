<?php 
# connexion a la base
require 'config.php';

$prod = $_GET['id'];
$sql="select * from produit where id_prod = '$prod'";
$reponse=$bdd->query($sql);
$data=$reponse->fetchAll();
echo '<pre>';
//print_r ($data);
echo '</pre>';
?>
<h1>T'es sûr de vouloir supprimer??</h1>
<link rel="stylesheet" type="text/css" href="/../market/css/bootstrap.min.css">
<div class="container">
<table border=2>
    <tr>
      <th>id</th>
      <th>Produit</th>
    </tr>
    <?php
    foreach($data as $prod){
      echo'  <tr>
            <td>'.$prod['id_prod'].'</td>
            <td>'.$prod['lib_prod'].'</td>
        </tr>'; } 
    ?>
</table>
    </div>
<form action="produitDelOk.php" method="POST">
    <input type="hidden" name="txtProd" id="txtProd" value="<?php echo $prod['id_prod'];?>">
    <input type="submit" value="Supprimer" >
    <button onclick="window.location.href = '/../market/php/liste/produitList.php'" >Annuler</button>
</form>