<?php
require "config.php";
#requete pour le numéro du fournisseurs
$sql ="SELECT fo.* , fa.* from facture fa, fournisseur fo where  fa.id_four = fo.id_four ";
//echo $sql;exit;
$reponse=$bdd->query($sql);
$data=$reponse->fetchAll();

#requete pour le numéro du fournisseurs
$sql1 ="SELECT  cli.*, fa.* from facture fa, Client cli where  fa.id_client = cli.id_client ";
//echo $sql1;exit;
$reponse1=$bdd->query($sql1);
$data1=$reponse1->fetchAll();



#pour l'affichage de produit 
$sql2= "SELECT * from produit ";
$reponse2=$bdd->query($sql2);
$data2= $reponse1->fetchAll();

#la requete pour le montant 
$sql3 = "SELECT p.*, d.*, (p.pu_prod*d.qte_det) as Montant FROM produit p, detailler d
 WHERE p.id_prod = d.id_prod ORDER BY p.lib_prod";
$reponse3=$bdd->query($sql3);
$data3=$reponse3->fetchAll();



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Impression Facture </title>
</head>
<body>
<header>
	<table>
		<tr>
			<td><p>Client<?php echo $data1[0]['nom_client'].' - '.$data1[0]['tel_client'].'-'.$data1[0]['date_fact'].'-'.$data1[0]['remise_fact'];?></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><p>Facture N°<?php echo $data[0]['id_fact'].'-'.$data[0]['lib_four'];?></p></td>
		</tr>
	</table>
	
</header>

<table border="2">
    <tr>
        <th>Produit</th>
        <th>libéllé du produit</th>
        <th>Prix unitaire</th>
        <th>Quantité</th>
        <th>Montant</th>
    </tr>
    <?php
        foreach($data3 as $produit){

           echo '  <tr>
           <td>'.$produit['id_prod'].'</td>
           <td>'.$produit['lib_prod'].'</td>
           <td>'.$produit['pu_prod'].'</td>
           <td>'.$produit['qte_det'].'</td>
           <td>'.$produit['Montant'].'</td>
       </tr>';
        }
    ?>
</table>
<br/>
<button onclick="window.location.href = 'factureList.php' ">Retour</button>

</body>
</html>