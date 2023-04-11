<?php 
require 'C:/xampp/htdocs/market/php/config/config.php';
if (isset($_POST['btOk'])){
    $cat=$_POST['idcat'];
    $sql="SELECT * FROM fournisseur WHERE id_four = '$cat' ";
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
	<title>Fournisseur</title>
   <link rel="stylesheet" type="text/css" href="/../market/css/fichiertype.css">
</head>
<body>
    <form method="post" action="/../market/php/modification/fournisseurUpdateOk.php" class="formperso">
	<fieldset>
       <legend><h2>Fournisseur</h2></legend>
	            
                <label for=""> Saisir l'id :</label>
                <input type="number" id="txtID" name="txtID" placeholder="ID DU PRODUIT" value = "<?php echo $data[0]['id_four'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idID" id="idID"  value = "<?php echo $cat; ?>" >

				<label for=""> Saisir le sigle :</label>
   		 		<input type="text" id="txtSigle" name="txtSigle" placeholder="Nom" value = "<?php echo $data[0]['sigle_four'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idSigle" id="idSigle"  value = "<?php echo $cat; ?>" >

                <label for=""> Saisir le libellé:</label>
   		 		<input type="text" id="txtLib" name="txtLib" placeholder="Numéro du client" value = "<?php echo $data[0]['lib_four'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idLib" id="idLib"  value = "<?php echo $cat; ?>" >

                <label for=""> Saisir le numéro:</label>
                <input type="text" id="txtNum" name="txtNum" placeholder="Numéro du client" value = "<?php echo $data[0]['tel_four'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idNum" id="idNum"  value = "<?php echo $cat; ?>" >

                <label for=""> Saisir l'email:</label>
                <input type="email" id="txtEmail" name="txtEmail" placeholder="Numéro du client" value = "<?php echo $data[0]['email_four'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idEmail" id="idEmail"  value = "<?php echo $cat; ?>" >

                <label for=""> Saisir une nouvelle info:</label>
   		 		<input type="text" id="txtInfo" name="txtInfo" placeholder="Infos" value = "<?php echo $data[0]['autreinfo_four'] ?>" required>
                    <div class="btn">
                        <input type="hidden" name="idInfo" id="idInfo"  value = "<?php echo $cat; ?>" >


                        <input type="submit" name="envoyer" id="envoyer"  value="VALIDER" >


                        <input type="reset" name="annuler" id="annuler" value="ANNULER"class= "resetbtn" >
      
                </div>
		</fieldset>
   	</form>
	  
	 
	

</body>
</html>
