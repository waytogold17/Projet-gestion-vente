<?php 
require 'config.php';
/*
#requête simple
$sql='SELECT p.*,c.lib_cat
FROM produit p, categorie c
 WHERE c.id_cat=p.id_cat
 ';

$reponse=$bdd->query($sql);
$data=$reponse->fetchAll();

//print_r( $data);*/
/*
# Requête paramétrée(un paramètre) et préparée
 $sql='SELECT p.*,c.lib_cat
FROM produit p, categorie c
 WHERE c.id_cat=p.id_cat AND id_prod = ?
 ';
$reponse=$bdd->prepare($sql);
//$reponse->execute(['BRUME']);
$reponse->execute(array('BRUME'));
$data=$reponse->fetchAll();
print_r($data);*/

/*
# Requête paramétrée(2 paramètres) et préparée

$sql='SELECT p.*,c.lib_cat
FROM produit p, categorie c
 WHERE c.id_cat=p.id_cat AND id_prod = ? 
 AND lib_prod LIKE ?
 ';
$reponse=$bdd->prepare($sql);
//$reponse->execute(['BRUME','%fum%']);
$reponse->execute(array('BRUME','%fum%'));
$data=$reponse->fetchAll();
print_r($data);*/
/*
# Requête avec un paramètre renommé et préparée
$sql='SELECT p.*,c.lib_cat
FROM produit p, categorie c
 WHERE c.id_cat=p.id_cat AND id_prod = :id_p
 ';

$reponse=$bdd->prepare($sql);
//$reponse->execute(['id_p'=>'BMW03']);
$reponse->execute(array('id_p'=>'BMW03'));
$data=$reponse->fetchAll();
print_r($data);*/

/*$sql='SELECT p.*,c.lib_cat
FROM produit p, categorie c
 WHERE c.id_cat=p.id_cat AND id_prod = :id_p
 AND lib_prod LIKE :lib_p
 ';
$reponse=$bdd->prepare($sql);
//$reponse->execute(['id_p'=>'BRUME','lib_p'=>'%fum%']);
$reponse->execute(array(
    'id_p'=>'BMW03',
    'lib_p'=>'%W-2%'
));
$data=$reponse->fetchAll();
echo'<pre>';
print_r($data);
/*
# insertion avec une requête simple
$sql = "INSERT INTO categorie (lib_cat) VALUE ('AERONAUTIQUE'),('ROBOTIQUE') ";

$reponse=$bdd->exec($sql);

if ($reponse){
    echo '<br> Ajout reussi ☺☺☺';
}else{
    echo ' Une erreur s\'est produite ';
}*/

#Insertion avec une requête préparée
/*
$sql = "INSERT INTO categorie (lib_cat) VALUE (?),(?) ";// un petit 'for'(?) pour permettre de inserer le nombre d'element voulu  ( à tester biensur)

$reponse=$bdd->prepare($sql);
$reponse->execute(['PÂTISSERIE','DECORATION']);  //$POST['name_champs']
if ($reponse){
    echo ' Ajout reussi ☺☺☺';
}else{
    echo ' Une erreur s\'est produite ';
}

echo '</pre>';

// script php qui permet de realiser un enregistrement dans la table produit, utiliser une requête paramétrée et préparée
*/

//requête préparée insertion produit

$sql = "INSERT INTO produit (id_prod,id_cat,lib_prod,pu_prod,info_prod,img_prod) VALUE (:id_prod,:id_cat,:lib_prod,:pu_prod,:info_prod,:img_prod)";
$reponse=$bdd->prepare($sql);

$reponse->execute(array(
    'id_prod'=>'AVT',
    'id_cat'=>'6',
    'lib_prod'=>'AVENTADOR',
    'pu_prod'=>'45000000',
    'info_prod'=>'Marque de renom couteuse',
    'img_prod'=>'aventador.jpeg',
    
));
if ($reponse){
    echo ' Ajout reussi ☺☺☺';
}
else
{
    echo ' Une erreur s\'est produite ';
}
echo '</pre>';




echo '</pre>';
?>