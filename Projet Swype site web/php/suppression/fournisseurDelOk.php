<?php
  require "C:/xampp/htdocs/market/php/config/config.php";

  //verification de l'existence du contenu de la variable aek insertion
  if(isset($_POST['txtProd'])){
      $prod = $_POST['txtProd'];
      $sql = "DELETE FROM fournisseur WHERE id_four = $prod";
      //echo $sql;exit;
       //var_dump($_POST['txtCat'],$sql);exit;
      //echo $sql;exit;

      $reponse=$bdd->query($sql);
       if ($reponse){
                echo 'Profil client: Suppression reussi!';
            }else{
                echo 'Une erreur s\'est produite';
            }
      header('Location:/../market/php/liste/fournisseurList.php');

  }
?>