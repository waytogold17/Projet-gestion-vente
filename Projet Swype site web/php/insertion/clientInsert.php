<?php
    require "C:/xampp/htdocs/market/php/config/config.php";

    //verification de l'existence du contenu de la variable aek insertion
    if(isset($_POST['envoyer'])){
        $cl1=$_POST['txtNom'];
        $cl2=$_POST['txtTel'];
        $cl3=$_POST['txtInfo'];
     

$sql ="INSERT INTO client (nom_client, tel_client, autreinfo_client) VALUES('$cl1',$cl2,'$cl3')";
        //echo $sql, exit; 
        $reponse=$bdd->query($sql);
        if ($reponse){
            echo "Produit : Ajout réussis !";
        }
        else
        {
            echo " une erreur s'est produite ";
        }
        header('Location:/../market/php/liste/clientList.php');


}

?>