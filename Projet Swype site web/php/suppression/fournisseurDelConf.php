<?php 
# connexion a la base
require 'C:/xampp/htdocs/market/php/config/config.php';

$prod = $_GET['id'];
$sql="select * from fournisseur where id_four = '$prod'";
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
      <th> Fournisseur</th>
    </tr>
    <?php
    foreach($data as $prod){
      echo'  <tr>
            <td>'.$prod['id_four'].'</td>
            <td>'.$prod['sigle_four'].'</td>
        </tr>'; } 
    ?>
</table>
</div>
<form action="/../market/php/fournisseurDelOk.php" method="POST">
    <input type="hidden" name="txtProd" id="txtProd" value="<?php echo $prod['id_four'];?>">
    <input type="submit" value="Supprimer" >
    <button  onclick="window.location.href = '/../market/php/liste/fournisseurList.php'" >Annuler</button>
</form>