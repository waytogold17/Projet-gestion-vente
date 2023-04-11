<?php
require 'C:/xampp/htdocs/market/php/config/config.php';
$sql='select p.*,c.lib_cat
 from produit p, categorie c
 where c.id_cat=p.id_cat
 ';
$reponse=$bdd->query($sql);
$data=$reponse->fetchAll();

?>
<link rel="stylesheet" type="text/css" href="/../market/css/bootstrap.min.css">

<div class="container">
<table class="table table-dark table-hover table-bordered " border="5">
    <tr>
      <th>id_prod</th>
      <th>id_cat</th>
      <th>Nom</th>
      <th>Prix</th>
      <th>Infos</th>
      <th>Image</th>
      <th>Modifier</th>
      <th>Supprimer</th>
    </tr>
    <?php
    foreach($data as $cat){
      echo'  <tr>
            <td>'.$cat['id_prod'].'</td>
            <td>'.$cat['id_cat'].'</td>
            <td>'.$cat['lib_prod'].'</td>
            <td>'.$cat['pu_prod'].'</td>
            <td>'.$cat['info_prod'].'</td>
            <td>'.$cat['img_prod'].'</td>
            <td>
            <form action="/../market/php/modification/ProduitUpdate.php" method="POST" id="formCat" name="formCat" >
                  <input type="hidden" value="'.$cat['id_prod'].'"id="idcat" name="idcat"/>
                  <input type="submit" value="modifier"
                  name="btOk" id="btOk" />
              </form>
            </td>
            <td><a href="/../market/php/suppression/produitDelConf.php?id='.$cat['id_prod'].'">Supprimer</a></td>
        </tr>'; } 


    ?>
      </table>
</div>