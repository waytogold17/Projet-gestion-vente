<?php
require "C:/xampp/htdocs/market/php/config/config.php";
if (isset($_GET['id'])){
    $fact=$_GET['id'];
}elseif(isset($_POST['id'])){
    $fact=$_POST['id'];
    try{
    $sql0= "INSERT INTO detailler(id_prod, id_fact, qte_det) VALUES (:idp,:idf,:qte)";
$reponse0=$bdd-> prepare($sql0);
$data0=$reponse0->execute(array(
"idp"=>$_POST['prod'],
"idf"=>$fact,
"qte"=>$_POST['qte']
)); } catch(Exception $e) {
    echo 'Erreur' .$e ->getMessage();
    }
}


#requete pour le numéro du fournisseurs
$sql ="SELECT fo.* , fa.* from facture fa, fournisseur fo where  fa.id_four = fo.id_four and fa.id_fact =".$fact;
//echo $sql;exit;
$reponse=$bdd->query($sql);
$data=$reponse->fetchAll();


#pour l'affichage de produit 
$sql1= "SELECT * from produit ";
$reponse1=$bdd->query($sql1);
$data1= $reponse1->fetchAll();

#la requete pour le montant 
$sql2 = "SELECT p.*, d.*, (p.pu_prod*d.qte_det) as Montant FROM produit p, detailler d
 WHERE p.id_prod = d.id_prod ORDER BY p.lib_prod";
$reponse2=$bdd->query($sql2);
$data2=$reponse2->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UFT-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Détails config</title>
</head>
<body>
	
<header>
        <p>Facture N°<?php echo $data[0]['id_fact'].'-'.$data[0]['lib_four'];?></p>
    </header>
    <form action="/../market/php/insertion/factureDetailInsert.php" id="frm" name="frm" method="POST">

    <fieldset>
        <legend>Ajout</legend>
        <?php
             require "/../market/php/config/config.php";
             $sql='select * from produit order by id_prod asc';
                $reponse=$bdd->query($sql);
                $data3=$reponse->fetchAll();
                
                echo ' <select name="prod" id="prod">';
                    foreach($data3 as $prod){
                        echo'  <option value="'.$prod['id_prod'].'">'.$prod['lib_prod'].'</option>' ; } 
                echo' </select>';
                ?>
        <label for="">Quantité : 
            <input type="number" id="qte" name="qte">
        </label>
      <input type="submit" value="Valider" id="btenv" name="btenv">
      <input type="reset" value="Annuler" id="btanl" name="btanl">
      <input type="hidden"  name="id" id="id" value="<?php echo $fact; ?> ">
    </fieldset>
</form>
<?php


 
?>
<table border="2">
    <tr>
        <th>Produit</th>
        <th>libéllé du produit</th>
        <th>Prix unitaire</th>
        <th>Quantité</th>
        <th>Montant</th>
    </tr>
    <?php
        foreach($data2 as $produit){

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
<button onclick="window.location.href = '/../market/php/liste/factureList.php' ">Retour</button>

</body>
</html>

	</body>


