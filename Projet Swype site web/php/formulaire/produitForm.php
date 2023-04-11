<?php

?>
<html>
<head>
	<meta charset="UFT-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>page 2 formulaire </title>
	<link rel="stylesheet" type="text/css" href="/../market/css/fichiertype.css">
</head>
<body>
	
	<form method='post' action="/../market/php/insertion/produitInsert.php" class="formperso">
		<fieldset class="fieldproduit">
		
			<legend>Produit</legend>

			<input type="text" id="idProd" name="idProd" placeholder="veuillez entrer l'identifiant du produit " value="" required> 
		   <?php
			 require "C:/xampp/htdocs/market/php/config/config.php";
			 $sql='select * from categorie order by id_cat asc';
                $reponse=$bdd->query($sql);
                $data=$reponse->fetchAll();
                
                echo ' <select name="txtCat" id="txtCat">';
                    foreach($data as $cat){
                        echo'  <option value="'.$cat['id_cat'].'">'.$cat['lib_cat'].'</option>' ; } 
                echo' </select>';
                ?>
  		</select><br/>
		 <br/>
  		<input type=" name" id="libProd" name="libProd" placeholder="veuillez entrer le libellé du produit " value="" required><br/>
		<input type="number" id="puProd" name="puProd" placeholder="veuillez entrer le prix unitaire du produit" value="" required> <br/>
		<input type=" name"  id="infoProd" name="infoProd" placeholder="veuillez entrer les informations sur le produit " value="" required><br/>
		 <input type="file"  id="imgProd" name="imgProd" placeholder="" value="selectionner une image" required> <br/>

  			<input type="submit" name="envoyer" id="envoyer" placeholder="" value="VALIDER">
		     <input type="reset" placeholder="" value="Annuler"> <br/>
 		
  			
  			<br/>
		    
 		</fieldset>
		 <button onclick="window.location.href = '/../market/php/formulaire/factureForm.php' ">Précedent</button>
 		 <button onclick="window.location.href = '/../market/php/formulaire/detaillerForm.php' ">Suivant</button>
 </form>

 
</body>
