<?php
require 'C:/xampp/htdocs/market/php/config/config.php';
$sql='select * from fournisseur
 ';
$reponse=$bdd->query($sql);
$data=$reponse->fetchAll();

?>

<link rel="stylesheet" type="text/css" href="/../market/css/bootstrap.min.css">
<div class="container">
<table class="table table-dark table-hover table-bordered" border="5">
    <tr>
      <th >id fournisseur</th>
      <th>Sigle fournisseur</th>
      <th>Libellé fournisseur</th>
      <th>Tel fournisseur </th>
      <th>Email fournisseur</th>
      <th>Autre info client</th>
      <th>Modifier</th>
      <th>Supprimer</th>
    </tr>
    <?php
    foreach($data as $cat){
      echo'  <tr>
            <td>'.$cat['id_four'].'</td>
            <td>'.$cat['sigle_four'].'</td>
            <td>'.$cat['lib_four'].'</td>
            <td>'.$cat['tel_four'].'</td>
            <td>'.$cat['email_four'].'</td>
            <td>'.$cat['autreinfo_four'].'</td>
            <td>
            <form action="/../market/php/modification/fournisseurUpdate.php" method="POST" id="formCat" name="formCat"class="formtableau" >
                  <input type="hidden" value="'.$cat['id_four'].'"id="idcat" name="idcat"/>
                  <input type="submit" class="modifier" value="modifier"
                  name="btOk" id="btOk" />
              </form>
            </td>
            <td><a href="/../market/php/suppression/fournisseurDelConf.php?id='.$cat['id_four'].'">Supprimer</a></td>
        </tr>'; } 


    ?>
      </table>
</div>