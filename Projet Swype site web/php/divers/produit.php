<?php
require 'config.php';
$sql='select  p.*,c.lib_cat,p.lib_prod from produit p,categorie c
where c.id_cat=p.id_cat';
$response=$bdd->query($sql);
$data=$response->fetchAll();
?>
 <table border="2">
  <tr>
    <th>ID</th>
    <th>categorie</th>
    <th>produit</th>
    
  </tr>
<?php  
  foreach ($data as $cat) {
  echo '
  <tr>
    <td>'.$cat['id_cat'].'</td>
    <td>'.$cat['lib_cat'].'</td>
    <td>'.$cat['lib_prod'].'</td>
  </tr> ';}
?> 
 </table>