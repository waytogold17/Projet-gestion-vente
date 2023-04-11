<?php
  require "C:/xampp/htdocs/market/php/config/config.php";

  //verification de l'existence du contenu de la variable aek insertion
  if(isset($_POST['txtCat'])){
      $cat = $_POST['txtCat'];
      $sql = 'DELETE FROM categorie WHERE id_cat = '.$cat;
        //var_dump($_POST['txtCat'],$sql);exit;
      $reponse=$bdd->query($sql);
      header('Location:/../market/php/liste/categorieList.php');

  }
?>