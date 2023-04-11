<?php
    require "C:/xampp/htdocs/market/php/config/config.php";

    //verification de l'existence du contenu de la variable aek insertion
    if(isset($_POST['envoyer'])){
        $modif1 = $_POST['txtID'];
        $cat1 = $_POST['idID'];

        $modif2 = $_POST['txtSigle'];
        $cat2 = $_POST['idSigle'];

        $modif3 = $_POST['txtLib'];
        $cat3 = $_POST['idLib'];

        $modif4 = $_POST['txtNum'];
        $cat4 = $_POST['idNum'];

        $modif5 = $_POST['txtEmail'];
        $cat5 = $_POST['idEmail'];

        $modif6 = $_POST['txtInfo'];
        $cat6 = $_POST['idInfo'];

        

        $sql1 = "UPDATE fournisseur SET sigle_four = '$modif2'  WHERE id_four = '$cat1' ";
        $sql2 = "UPDATE fournisseur SET lib_four  = '$modif3'  WHERE id_four = '$cat1' ";
        $sql3 = "UPDATE fournisseur SET tel_four  = '$modif4'  WHERE id_four = '$cat1' ";
        $sql4 = "UPDATE fournisseur SET email_four  = '$modif5'  WHERE id_four = '$cat1' ";
        //echo $sql4;exit;
        $sql5 = 'UPDATE fournisseur SET autreinfo_four = "$modif6" WHERE id_four = "$cat1" ';
        //echo $sql5;exit;
        
        $reponse1=$bdd->exec($sql1);
        $reponse2=$bdd->exec($sql2);
        $reponse3=$bdd->exec($sql3);
        $reponse4=$bdd->exec($sql4);
        $reponse5=$bdd->exec($sql5);

        header('location:/../market/php/liste/fournisseurList.php');

    }
?>