<?php
    require "C:/xampp/htdocs/market/php/config/config.php";

    //verification de l'existence du contenu de la variable aek insertion
    if(isset($_POST['envoyer'])){
        $modif1 = $_POST['txtID'];
        $cat1 = $_POST['idID'];

        $modif2 = $_POST['txtProd'];
        $cat2 = $_POST['idProd'];

        $modif3 = $_POST['txtPrix'];
        $cat3 = $_POST['idPrix'];

        $modif4 = $_POST['txtInfo'];
        $cat4 = $_POST['idInfo'];

        $modif5 = $_POST['txtImage'];
        $cat5 = $_POST['idImage'];


        $sql1 = "UPDATE Produit SET lib_prod = '$modif2'  WHERE id_prod = '$cat1' ";
        $sql2 = "UPDATE Produit SET pu_prod = '$modif3'  WHERE id_prod = '$cat1' ";
        $sql3 = "UPDATE Produit SET info_prod = '$modif4'  WHERE id_prod = '$cat1' ";
        $sql4 = "UPDATE Produit SET img_prod = '$modif5'  WHERE id_prod = '$cat1' ";
        
       


        $reponse1=$bdd->exec($sql1);
        $reponse2=$bdd->exec($sql2);
        $reponse3=$bdd->exec($sql3);
        $reponse4=$bdd->exec($sql4);

        header('location:/../market/php/liste/ProduitList.php');

    }
?>