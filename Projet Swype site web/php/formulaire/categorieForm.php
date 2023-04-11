<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UFT-8"/>
	<title>page 3 formulaire </title>
	<link rel="stylesheet" type="text/css" href="/../market/css/fichiertype.css">
</head>
<body>
	<body>
	
	<form method="post" action="/../market/php/insertion/categorieInsert.php" class="formcategorie">
		
	
 		<fieldset style="border-radius: 10px;border-width: 5px;">
			<legend>Catégorie</legend>
			<input type="text" id="txtCat" name="txtCat" placeholder="veuillez entrer le libellé de la catégorie" value="" required>
		    <input type="submit" placeholder="" value="Soumettre ">
		     <input type="reset" placeholder="" value=" Annuler tout"> <br/>
		     
 		</fieldset>
 </form>
 <button class="avant" onclick="window.location.href = '/../market/html/sitefinal.html'">Précedent</button>
 		<button class="apres" onclick="window.location.href = '/../market/php/formulaire/clientForm.php' ">Suivant</button>
</body>

