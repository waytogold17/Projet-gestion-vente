<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UFT-8"/>
	<title>page 6 formulaire </title>
	<link rel="stylesheet" type="text/css" href="/../market/css/fichiertype.css">
</head>
<body>
	<body >
	
	<form method="post" action="/../market/php/insertion/clientInsert.php" class="formclient">
		
 		<fieldset>
			<legend>Client</legend>
			 <input type="number" placeholder="veuillez entrer l'identifiant du client " value=""> <br/>
			 <input type="text" name="txtNom" id="txtNom" placeholder="veuillez entrer le nom du client " value=""> <br/>
		     <input type="name" name="txtTel" id="txtTel" placeholder="veuillez entrer votre numéro de téléphone " value=""><br/>
		    <input type="text" name="txtInfo" id="txtInfo" placeholder="veuillez entrer d'autres informations éventuelles " value=""> <br/>
		    <input type="submit" placeholder="" name="envoyer" id="envoyer" value="Soumettre ">
		     <input type="reset" placeholder="" value=" Annuler tout"> <br/>
 		</fieldset>
		 
 		<br>
 		<br>
 		
 </form>
 <button class="avant" onclick="window.location.href = '/../market/php/formulaire/categorieForm.php' ">Précedent</button>
 <button class="apres" onclick="window.location.href = '/../market/php/formulaire/fournisseurForm.php' ">Suivant</button>
</body>