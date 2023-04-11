<?php
    require "C:/xampp/htdocs/market/php/config/config.php";

    //verification de l'existence du contenu de la variable aek insertion
    if(isset($_POST['envoyer'])){
    
        $cl1=$_POST['idProd'];
        $cl2=$_POST['txtCat'];
        $cl3=$_POST['libProd'];
        $cl4=$_POST['puProd'];
        $cl5=$_POST['infoProd'];
        $cl6=$_POST['imgProd'];

$sql ="INSERT INTO produit (id_prod, id_cat, lib_prod, pu_prod, info_prod, img_prod) VALUES('$cl1',$cl2,'$cl3',$cl4,'$cl5','$cl6')";
        //echo $sql, exit; 
        $reponse=$bdd->query($sql);
        if ($reponse){
            echo "Produit : Ajout réussis !";
        }
        else
        {
            echo " une erreur s'est produite ";
        }
        header('Location:/../market/php/liste/produitList.php');


}

?>