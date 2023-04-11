<?php 
require 'C:/xampp/htdocs/market/php/config/config.php';
if (isset($_POST['btOk'])){
    $cat=$_POST['idcat'];
    $sql="SELECT * FROM client WHERE id_client = '$cat' ";
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
	<title>CLIENT</title>
   <link rel="stylesheet" type="text/css" href="/../market/css/fichiertype.css">
</head>
<body>
    <form method="post" action="/../market/php/modification/clientUpdateOk.php">
	<fieldset>
       <legend><h2>Client</h2></legend>
	            
                <label for=""> Saisir l'id :</label>
                <input type="number" id="txtID" name="txtID" placeholder="ID DU PRODUIT" value = "<?php echo $data[0]['id_client'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idID" id="idID"  value = "<?php echo $cat; ?>" >

				<label for=""> Saisir le nom  :</label>
   		 		<input type="text" id="txtClient" name="txtClient" placeholder="Nom" value = "<?php echo $data[0]['nom_client'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idClient" id="idClient"  value = "<?php echo $cat; ?>" >

                <label for=""> Saisir le numéro :</label>
   		 		<input type="text" id="txtNum" name="txtNum" placeholder="Numéro du client" value = "<?php echo $data[0]['tel_client'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idNum" id="idNum"  value = "<?php echo $cat; ?>" >

                <label for=""> Saisir une nouvelle info:</label>
   		 		<input type="text" id="txtInfo" name="txtInfo" placeholder="Infos" value = "<?php echo $data[0]['autreinfo_client'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idInfo" id="idInfo"  value = "<?php echo $cat; ?>" >


                        <input type="submit" name="envoyer" id="envoyer"  value="VALIDER" >


                        <input type="reset" name="annuler" id="annuler" value="ANNULER"class= "resetbtn" >
      
                </div>
		</fieldset>
   	</form>
	  
	 
	

</body>
</html>
