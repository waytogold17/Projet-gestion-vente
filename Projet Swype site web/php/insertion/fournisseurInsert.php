<?php
    require "C:/xampp/htdocs/market/php/config/config.php";

    //verification de l'existence du contenu de la variable aek insertion
    if(isset($_POST['envoyer'])){
        $cl1=$_POST['txtSigle'];
        $cl2=$_POST['txtLib'];
        $cl3=$_POST['txtTel'];
        $cl4=$_POST['txtEmail'];
        $cl5=$_POST['txtInfo'];
     

$sql ="INSERT INTO fournisseur (sigle_four, lib_four, tel_four, email_four, autreinfo_four) VALUES('$cl1','$cl2','$cl3','$cl4','$cl5')";
        //echo $sql, exit; 
        $reponse=$bdd->query($sql);
        if ($reponse){
            echo "Produit : Ajout réussis !";
        }
        else
        {
            echo " une erreur s'est produite ";
        }
        header('Location:/../market/php/liste/fournisseurList.php');


}

?>