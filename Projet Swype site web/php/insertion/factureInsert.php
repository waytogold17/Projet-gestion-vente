<?php 
    require "C:/xampp/htdocs/market/php/config/config.php";

    if(isset($_POST['envoyer'])){
            $df = $_POST['df'];
            $rmf = $_POST['rmf'];
            $lvf = $_POST['lvf'];
            $obvf = $_POST['obvf'];
            $cat1 = $_POST['txtFn'];
            $cat2 = $_POST['txtCl'];
            /*$cat1=$_POST['txtCat']+1;
            $cat1=$cat1-1;*/
            //var_dump($cat1);
            
            $sql = "INSERT INTO facture ( id_four, id_client, date_fact, remise_fact, livraison_fact, obserb_fact) VALUES ($cat1,$cat2,'$df',$rmf,'$lvf','$obvf') ";
               // echo $sql;exit;
            $reponse=$bdd->query($sql);
            if ($reponse){
                echo 'Produit: Ajout reussi!';
            }else{
                echo 'Une erreur s\'est produite';
            }
            header('Location:/../market/php/liste/factureList.php');

    }
?>