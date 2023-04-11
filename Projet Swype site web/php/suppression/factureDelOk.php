<?php
  require "C:/xampp/htdocs/market/php/config/config.php";

  //verification de l'existence du contenu de la variable aek insertion
  if(isset($_POST['txtFact'])){
      $fac = $_POST['txtFact'];
      $sql = "DELETE FROM facture WHERE id_fact = '$fac'";
       //var_dump($_POST['txtCat'],$sql);exit;
      //echo $sql;exit;

      $reponse=$bdd->query($sql);
       if ($reponse){
                echo 'Facture: Suppression reussi!';
            }else{
                echo 'Une erreur s\'est produite';
            }
      header('Location:/../market/php/liste/factureList.php');

  }
?>