<?php 
if(isset($_POST['idProd']),isset($_POST['idCat']),isset($_POST['libProd']),isset($_POST['puProd']),isset($_POST['infoProd']),isset($_POST['imgProd']))
	
$cl1=$_POST['idProd'];
$cl2=$_POST['idCat'];
$cl3=$_POST['libProd'];
$cl4=$_POST['puProd'];
$cl5=$_POST['infoProd'];
$cl6=$_POST['imgProd'];

$sql = "INSERT INTO produit (id_prod,id_cat,lib_prod,pu_prod,info_prod,img_prod)
        VALUE ('$cl1','$cl2','$cl3','cl4','cl5','cl6') ";
        //echo sql, exit;

        if ($reponse){
            echo "Produit : Ajout réussis !";
        }
        else
        {
            echo " une erreur s'est produite ";
        }


        $reponse=$bdd->query($sql);
        header('location:produitList.php');



 ?>