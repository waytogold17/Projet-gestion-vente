<?php 
try 
{
$bdd = new PDO('mysql:host=localhost;
	dbname=devoir_php', 'root','');
echo "Connexion réussie ! ";
	
} catch (Exception $e) {
	die('Erreur : ' . $e ->getMessage());
}
require 'config.php';
$sql='select * from categorie';
$response=$bdd->query($sql);
$data=$response->fetchAll();
//echo '<pre>';
print_r($data);
echo '<pre>';

 ?>
 <table border="2">
 	<tr>
 		<th>ID</th>
 		<th>categorie</th>
 	</tr>
<?php  
 	foreach ($data as $cat) {
 	echo '
 	<tr>
 		<td>'.$cat['id_cat'].'</td>
 		<td>'.$cat['lib_cat'].'</td>
 	</tr> ';}
?> 
 </table>