<?php 
require 'C:/xampp/htdocs/market/php/config/config.php';
if (isset($_POST['btOk'])){
    $cat=$_POST['idcat'];
    $sql="SELECT fa.* FROM Facture fa,Fournisseur fo,Client cl WHERE fa.id_four = fo.id_four and fa.id_client = cl.id_client and  id_fact = '$cat' ";
}

$reponse=$bdd->query($sql);
$data=$reponse->fetchAll();
//echo $data[0]['lib_cat'];exit;
echo '<pre>';
//print_r ($data);
echo '</pre>';
?>

<!DOCTYPE html>
<html>
<head>
	<title>FACTURE</title>
   <link rel="stylesheet" type="text/css" href="styles.css">
   <link rel="stylesheet" type="text/css" href="/../market/css/fichiertype.css">
</head>
<body>
    <form method="post" action="/../market/php/modification/FactureUpdateOk.php">
	<fieldset>
       <legend><h2>Facture </h2></legend>
	            
                <label for=""> Saisir l'id :</label>
                <input type="text" id="txtID" name="txtID" placeholder="ID DE LA FACTURE" value = "<?php echo $data[0]['id_fact']?>" required>
                    <div class="btn">
                        <input type="hidden" name="idID" id="idID"  value = "<?php echo $cat; ?>" >

                <label for=""> Saisir la date de facture  :</label>
   		 		<input type="text" id="txtDate" name="txtDate" placeholder="DATE " value = "<?php echo $data[0]['date_fact'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idDate" id="idDate"  value = "<?php echo $cat; ?>" >

                <label for=""> Saisir le montant de la remise :</label>
   		 		<input type="number" id="txtRemise" name="txtRemise" placeholder="Infos" value = "<?php echo $data[0]['remise_fact'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idRemise" id="idRemise"  value = "<?php echo $cat; ?>" >

                <label for=""> Saisir la date de livraison  :</label>
   		 		<input type="datetime-local" id="txtDateLiv" name="txtDateLiv" placeholder="L'image" value = "<?php echo $data[0]['livraison_fact'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idDateLiv" id="idDateLiv"  value = "<?php echo $cat; ?>" >

                <label for=""> Saisir les observations  :</label>
                <input type="text" id="txtObs" name="txtObs" placeholder="Saisir l'observation" value = "<?php echo $data[0]['obserb_fact'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idObs" id="idObs"  value = "<?php echo $cat; ?>" >


                        <input type="submit" name="envoyer" id="envoyer"  value="VALIDER" >


                        <input type="reset" name="annuler" id="annuler" value="ANNULER"class= "resetbtn" >
      
                </div>
		</fieldset>
   	</form>
	  
	 
	

</body>
</html>
