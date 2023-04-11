<?php
    require "C:/xampp/htdocs/market/php/config/config.php";

    //verification de l'existence du contenu de la variable aek insertion
   if(isset($_POST['txtCat'])){
        $cat1 =$_POST['txtCat'];
        
        $sql = "INSERT INTO categorie(lib_cat) VALUE ('$cat1')";
        $reponse=$bdd->query($sql);
        if ($reponse){
            echo "Catégorie : Ajout réussis !";
        }
        else
        {
            echo " une erreur s'est produite ";
        }
        
        header('location:/../market/php/liste/categorieList.php');

    }
?>