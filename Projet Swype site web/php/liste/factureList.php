<?php
require 'C:/xampp/htdocs/market/php/config/config.php';
$sql='select f.id_fact,fn.lib_four,cl.nom_client,f.date_fact,f.remise_fact,f.livraison_fact,f.obserb_fact
 from facture F,fournisseur fn,client cl
 where F.id_four=fn.id_four
 and F.id_client=cl.id_client
 
 ';
$reponse=$bdd->query($sql);
$data=$reponse->fetchAll();

?>

<link rel="stylesheet" type="text/css" href="/../market/css/bootstrap.min.css">
<div class="container">
<table class="table table-bordered table-dark table-hover" >
    <tr>
      <th>id_fact</th>
      <th>Libellé fournisseur </th>
      <th>Nom client</th>
      <th>date livraison </th>
      <th>remise facture</th>
      <th>livraison facture</th>
      <th>Observation facture </th>
      <th>Modifier</th>
      <th>Supprimer</th>
      <th>Détails</th>
    </tr>
    <?php
    $i=1;
    foreach($data as $fac){
      echo'  <tr>
            <td>'.$fac['id_fact'].'</td>
            <td>'.$fac['lib_four'].'</td>
            <td>'.$fac['nom_client'].'</td>
            <td>'.$fac['date_fact'].'</td>
            <td>'.$fac['remise_fact'].'</td>
            <td>'.$fac['livraison_fact'].'</td>
            <td>'.$fac['obserb_fact'].'</td>
            <td>
             <form action="/../market/php/modification/FactureUpdate.php" method="POST" id="formCat" name="formCat" >
                  <input type="hidden" value="'.$fac['id_fact'].'"id="idcat" name="idcat"/>
                  <input type="submit" value="modifier"
                  name="btOk" id="btOk" />
              </form>
            </td>
            <td><a href="/../market/php/suppression/factureDelConf.php?id='.$fac['id_fact'].'">Supprimer</a></td>
            <td><a href="/../market/php/insertion/factureDetailInsert.php?id='.$fac['id_fact'].'">Détails</a></td>
        </tr>'; ++$i;} 
    ?>
</table>
</div>