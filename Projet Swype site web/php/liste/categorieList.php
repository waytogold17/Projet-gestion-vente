<?php 
require 'C:/xampp/htdocs/market/php/config/config.php';
$sql='select * from categorie';
$reponse=$bdd->query($sql);
$data=$reponse->fetchAll();
echo '<pre>';
//print_r ($data);
echo '</pre>';
?>

<link rel="stylesheet" type="text/css" href="/../market/css/bootstrap.min.css">
<div class="container">
    <table class="table table-dark table-bordered table-hover" border=2>
    <tr>
      <th>id</th>
      <th>Categorie</th>
      <th>Modifier</th>
      <th>Supprimer</th>
    </tr>

    <?php
    foreach($data as $cat){
      echo'  <tr>
            <td>'.$cat['id_cat'].'</td>
            <td>'.$cat['lib_cat'].'</td>
            <td>
            <form action="/../market/php/modification/categorieUpdate.php" method="POST" id="formCat" name="formCat" >
                  <input type="hidden" value="'.$cat['id_cat'].'"  id="idcat" name="idcat"/>
                  <input type="submit" value="modifier"
                  name="btOk" id="btOk" />
              </form>
            </td>
            <td><a href="/../market/php/suppression/categorieDelConf.php?id='.$cat['id_cat'].'">Supprimer</a></td>
        </tr>'; } 
    ?>
</table>
</div>