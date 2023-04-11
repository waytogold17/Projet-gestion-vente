<?php
    require "C:/xampp/htdocs/market/php/config/config.php";

    //verification de l'existence du contenu de la variable aek insertion
    if(isset($_POST['envoyer'])){
        $modif1 = $_POST['txtID'];
        $cat1 = $_POST['idID'];

        $modif2 = $_POST['txtDate'];
        $cat2 = $_POST['idDate'];

        $modif3 = $_POST['txtRemise'];
        $cat3 = $_POST['idRemise'];

        $modif4 = $_POST['txtDateLiv'];
        $cat4 = $_POST['idDateLiv'];

        $modif5 = $_POST['txtObs'];
        $cat5 = $_POST['idObs'];

    
        $sql1 = "UPDATE Facture SET date_fact = '$modif2'  WHERE id_fact = '$cat1' ";
        $sql2 = "UPDATE Facture SET remise_fact = '$modif3'  WHERE id_fact = '$cat1' ";
        $sql3 = "UPDATE Facture SET livraison_fact = '$modif4'  WHERE id_fact = '$cat1' ";
        $sql4 = "UPDATE Facture SET obserb_fact = '$modif5'  WHERE id_fact = '$cat1' ";
        
        
       


        $reponse1=$bdd->exec($sql1);
        $reponse2=$bdd->exec($sql2);
        $reponse3=$bdd->exec($sql3);
        $reponse4=$bdd->exec($sql4);
        

        header('location:/../market/php/liste/FactureList.php');

    }
?>