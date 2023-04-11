<!DOCTYPE html>
<html>
<head>
	<meta charset="UFT-8"/>
	<title>page 7 formulaire </title>
	<link rel="stylesheet" type="text/css" href="/../market/css/fichiertype.css">
</head>
<body>
	<body bgcolor="palegoldenrod"/>
	
	<form method="post" action="/../market/php/insertion/fournisseurInsert.php" class="formfournisseur">
		
 		<fieldset>
			<legend>Fournisseur</legend>
			 <input type="number" name="" id="" placeholder="veuillez entrer l'identifiant du fournisseur " value=""> <br/>
			 <input type="text" name="txtSigle" id="txtSigle" placeholder="veuillez entrer le sigle de la société du fournisseur " value=""> <br/>
		     <input type="name" name="txtLib" id="txtLib" placeholder="veuillez entrer le libellé sur le fournisseur " value=""><br/>
		     <input type="text" name="txtTel" id="txtTel" placeholder="veuillez entrer le numéro du fournisseur " value=""> <br/>
		    <input type="email" name="txtEmail" id="txtEmail"  placeholder="veuillez entrer l'email du fournisseur " value=""><br/>
		     <input type="name"  name="txtInfo" id="txtInfo" placeholder="veuillez les autres infos possible sur le fournisseur " value=""> <br/>

		    <input type="submit" name="envoyer" id="envoyer" placeholder="" value="Soumettre ">
		     <input type="reset" placeholder="" value=" Annuler tout"> <br/>
 		</fieldset>
 		<br>
 		<br>

 	</fieldset>
	 
 </form>
 <button class="avant" onclick="window.location.href = '/../market/php/formulaire/clientForm.php' ">Précedent</button>
 <button class="apres" onclick="window.location.href = '/../market/php/formulaire/factureForm.php' ">Suivant</button>
</body>