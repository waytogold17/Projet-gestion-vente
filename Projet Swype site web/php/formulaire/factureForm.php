<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UFT-8"/>
	<title>page 4 formulaire </title>
	<link rel="stylesheet" type="text/css" href="/../market/css/fichiertype.css">
</head>
<body>
	<body >
	
	<form method='post' action="/../market/php/insertion/factureInsert.php" class="formperso">
		
 		<fieldset class="fieldfacture">
			<legend>Facture</legend>
		    
		    <label>Id Fournisseur </label>
		   <?php
			 require 'C:/xampp/htdocs/market/php/config/config.php';
			 $sql='select * from fournisseur order by id_four asc';
                $reponse=$bdd->query($sql);
                $data=$reponse->fetchAll();
                
                echo ' <select name="txtFn" id="txtFn">';
                    foreach($data as $cat){
                        echo'  <option value="'.$cat['id_four'].'">'.$cat['lib_four'].'</option>' ; } 
                echo' </select>';
                echo '<br/>';
                ?>
		    <label>Nom client : </label>
		   <?php
			 require "C:/xampp/htdocs/market/php/config/config.php";
			 $sql='select * from client order by id_client asc';
                $reponse=$bdd->query($sql);
                $data=$reponse->fetchAll();
                
                echo ' <select name="txtCl" id="txtCl">';
                    foreach($data as $cat){
                        echo'  <option value="'.$cat['id_client'].'">'.$cat['nom_client'].'</option>' ; } 
                echo' </select>';
                ?>
                <br/>
                Date/heure  facture: <input type="date" name="df" id="df"  value="" placeholder="Veuillez entrez la date de la facture"required><br/>
		    Remise facture   : <input type="number" name="rmf" id="rmf" placeholder="veuillez entrer le montant de la remise " value=""> <br/>
		    livraison Facture: <input type="datetime-local" id="lvf" name="lvf" placeholder="" value=""><br/>
		    Observation facture : <input type="name" id="obvf" name="obvf" placeholder="veuillez entrer l'observation de la facture " value=""><br/>

		    <input type="submit" placeholder="" name="envoyer" id="envoyer" value="Soumettre ">
		     <input type="reset" placeholder="" name="annuler" id="annuler" value=" Annuler tout"> <br/>
 		</fieldset>
 </form>
 <button  class="avant" onclick="window.location.href = '/../market/php/formulaire/clientForm.php' ">Précedent</button>
 <button class="apres" onclick="window.location.href = '/../market/php/formulaire/produitForm.php' ">Suivant</button>
</body>