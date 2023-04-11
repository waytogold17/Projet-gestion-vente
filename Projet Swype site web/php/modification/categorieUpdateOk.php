<?php
    require "C:/xampp/htdocs/market/php/config/config.php";

    //verification de l'existence du contenu de la variable aek insertion
    if(isset($_POST['envoyer'])){
        $modif = $_POST['txtCat'];
        $cat = $_POST['idCat'];
        $sql = "UPDATE categorie SET lib_cat = '$modif'  WHERE id_cat = $cat ";

        $reponse=$bdd->exec($sql);
        header('location:/../market/php/liste/categorieList.php');

    }
?>