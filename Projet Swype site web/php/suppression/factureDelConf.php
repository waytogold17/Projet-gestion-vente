<?php 
# connexion a la base
require 'C:/xampp/htdocs/market/php/config/config.php';

$fac = $_GET['id'];
$sql="select * from facture where id_fact = '$fac'";
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
      <th>Facture</th>
    </tr>
    <?php
    foreach($data as $fac){
      echo'  <tr>
            <td>'.$fac['id_fact'].'</td>
            <td>'.$fac['date_fact'].'</td>
        </tr>'; } 
    ?>
</table>
    </div>
<form  action="/../market/php/suppression/factureDelOk.php" method="POST">
    <input type="hidden" name="txtFact" id="txtFact" value="<?php echo $fac['id_fact'];?>">
    <input type="submit" name="envoyer" id="envoyer" value="soumettre" >
    <button onclick="window.location.href = '/../market/php/liste/factureList.php'">Annuler</button>
</form>