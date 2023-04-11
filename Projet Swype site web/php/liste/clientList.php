<?php
require 'C:/xampp/htdocs/market/php/config/config.php';
$sql='select * from client
 ';
$reponse=$bdd->query($sql);
$data=$reponse->fetchAll();

?>

<link rel="stylesheet" type="text/css" href="/../market/css/bootstrap.min.css">
<div class="container">
<table class="table table-dark table-hover table-bordered " border="5">
    <tr>
      <th>id Cient</th>
      <th>Nom client</th>
      <th>Tel client</th>
      <th>Autre info client</th>
      <th>Modifier</th>
      <th>Supprimer</th>
    </tr>
    <?php
    foreach($data as $cat){
      echo'  <tr>
            <td>'.$cat['id_client'].'</td>
            <td>'.$cat['nom_client'].'</td>
            <td>'.$cat['tel_client'].'</td>
            <td>'.$cat['autreinfo_client'].'</td>
            <td>
            <form action="/../market/php/modification/clientUpdate.php" method="POST" id="formCat" name="formCat" >
                  <input type="hidden" value="'.$cat['id_client'].'"id="idcat" name="idcat"/>
                  <input type="submit" value="modifier"
                  name="btOk" id="btOk" />
              </form>
            </td>
            <td><a href="/../market/php/suppression/clientDelConf.php?id='.$cat['id_client'].'">Supprimer</a></td>
        </tr>'; } 


    ?>
      </table>
</div>