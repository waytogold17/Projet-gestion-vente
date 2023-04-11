<?php 
require 'C:/xampp/htdocs/market/php/config/config.php';
if (isset($_POST['btOk'])){
    $cat= $_POST['idcat'];

}
$sql='SELECT * FROM categorie WHERE id_cat = '.$cat;
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
	<title>CATEGORIE</title>
   <link rel="stylesheet" type="text/css" href="styles.css">
   <link rel="stylesheet" type="text/css" href="/../market/css/fichiertype.css">
</head>
<body>
    <form method="post" action="/../market/php/modification/categorieUpdateOk.php">
	<fieldset>
       <legend><h2> Categorie</h2></legend>
	   
				<label for=""> Saisir la categorie:</label>
   		 		<input type="text" id="txtCat" name="txtCat" placeholder="Catégorie" value = "<?php echo $data[0]['lib_cat'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idCat" id="idCat"  value = "<?php echo $cat; ?>" >
                        <input type="submit" name="envoyer" id="envoyer"  value="VALIDER" >


                        <input type="reset" name="annuler" id="annuler" value="ANNULER"class= "resetbtn" >
      
                </div>
		</fieldset>
   	</form>
	  
	 
	

</body>
</html>
