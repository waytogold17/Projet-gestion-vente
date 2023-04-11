<?php
    require "C:/xampp/htdocs/market/php/config/config.php";

    //verification de l'existence du contenu de la variable aek insertion
    if(isset($_POST['envoyer'])){
        $modif1 = $_POST['txtID'];
        $cat1 = $_POST['idID'];

        $modif2 = $_POST['txtClient'];
        $cat2 = $_POST['idClient'];

        $modif3 = $_POST['txtNum'];
        $cat3 = $_POST['idNum'];

        $modif4 = $_POST['txtInfo'];
        $cat4 = $_POST['idInfo'];

        

        $sql1 = "UPDATE client SET nom_client = '$modif2'  WHERE id_client = '$cat1' ";
        //echo $sql1;exit;
        $sql2 = "UPDATE client SET tel_client = '$modif3'  WHERE id_client = '$cat1' ";
        $sql3 = "UPDATE client SET autreinfo_client = '$modif4'  WHERE id_client = '$cat1' ";
        //echo $sql3;exit;
        
        $reponse1=$bdd->exec($sql1);
        $reponse2=$bdd->exec($sql2);
        $reponse3=$bdd->exec($sql3);

        header('location:/../market/php/liste/clientList.php');

    }
?>