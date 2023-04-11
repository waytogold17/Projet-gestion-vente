<?php
  require "config.php";

  //verification de l'existence du contenu de la variable aek insertion
  if(isset($_POST['txtProd'])){
      $prod = $_POST['txtProd'];
      $sql = "DELETE FROM produit WHERE id_prod = '$prod'";
       //var_dump($_POST['txtCat'],$sql);exit;
      //echo $sql;exit;

      $reponse=$bdd->query($sql);
       if ($reponse){
                echo 'Produit: Suppression reussi!';
            }else{
                echo 'Une erreur s\'est produite';
            }
      header('Location:produitList.php');

  }
?>