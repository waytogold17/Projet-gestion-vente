<?php 
require 'C:/xampp/htdocs/market/php/config/config.php';
if (isset($_POST['btOk'])){
    $cat=$_POST['idcat'];
    $sql="SELECT * FROM Produit WHERE id_prod = '$cat' ";
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
	<title>PRODUIT</title>
   <link rel="stylesheet" type="text/css" href="styles.css">
   <link rel="stylesheet" type="text/css" href="/../market/css/fichiertype.css">
</head>
<body>
    <form method="post" action="/../market/php/modification/ProduitUpdateOk.php">
	<fieldset>
       <legend><h2>Produit</h2></legend>
	            
                <label for=""> Saisir l'id :</label>
                <input type="text" id="txtID" name="txtID" placeholder="ID DU PRODUIT" value = "<?php echo $data[0]['id_prod'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idID" id="idID"  value = "<?php echo $cat; ?>" >

				<label for=""> Saisir le nom  :</label>
   		 		<input type="text" id="txtProd" name="txtProd" placeholder="Nom" value = "<?php echo $data[0]['lib_prod'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idProd" id="idProd"  value = "<?php echo $cat; ?>" >

                <label for=""> Saisir le prix :</label>
   		 		<input type="text" id="txtPrix" name="txtPrix" placeholder="Prix" value = "<?php echo $data[0]['pu_prod'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idPrix" id="idPrix"  value = "<?php echo $cat; ?>" >

                <label for=""> Saisir l'info:</label>
   		 		<input type="text" id="txtInfo" name="txtInfo" placeholder="Infos" value = "<?php echo $data[0]['info_prod'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idInfo" id="idInfo"  value = "<?php echo $cat; ?>" >

                <label for=""> Saisir le lien de l'image :</label>
   		 		<input type="text" id="txtImage" name="txtImage" placeholder="L'image" value = "<?php echo $data[0]['img_prod'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idImage" id="idImage"  value = "<?php echo $cat; ?>" >


                        <input type="submit" name="envoyer" id="envoyer"  value="VALIDER" >


                        <input type="reset" name="annuler" id="annuler" value="ANNULER"class= "resetbtn" >
      
                </div>
		</fieldset>
   	</form>
	  
	 
	

</body>
</html>
