<?php
require "C:/xampp/htdocs/market/php/config/config.php";
if(isset($_POST['Connexion'])) {
    $cl1=$_POST['nom'];
    $cl2=$_POST['prenoms'];
    $cl3=$_POST['email'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  
  if($password != $confirm_password) {
    echo "Les mots de passe ne correspondent pas";
    header('Location:/../market/html/inscription.html');

  } else {
    // Le mot de passe est valide, vous pouvez maintenant l'enregistrer dans votre base de données ou prendre d'autres mesures nécessaires.
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    //echo $hashed_password;exit;
    $sql = "INSERT INTO information ( nom, prenoms, email, mdp) VALUES ('$cl1','$cl2','$cl3','$hashed_password') ";
               // echo $sql;exit;
    $reponse=$bdd->query($sql);
    header('Location:/../market/html/connexion.html');
  }
}
?>
 