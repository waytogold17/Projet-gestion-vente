<?php
// Supposons que $stored_password contient la version chiffrée du mot de passe stockée dans la base de données
require "C:/xampp/htdocs/market/php/config/config.php";
if(isset($_POST['connexion'])) {
  $password = $_POST['password'];
  $nom = $_POST['nom'];
  $sql = "SELECT mdp from information where nom = '$nom'";
   $result = $bdd->query($sql);
  $row = $result->fetch(PDO::FETCH_ASSOC);
  $stored_password  = $row;
  
  foreach ($stored_password as $key) 
  {
     echo $key;
     if(password_verify($password, $key)) {
    header('Location:/../market/html/sitefinal.html');
    // Le mot de passe est correct
  } else {
    header('Location:/../market/html/connexion.html');
    // Le mot de passe est incorrect
  }
   };
  
  //echo $sql;exit;
  //echo $sql2;exit;
  /*$reponse2=$bdd->exec($sql2);
  echo $reponse2;exit;
  $data=$reponse->fetchAll();*/
  
  
  
  
}
?>
