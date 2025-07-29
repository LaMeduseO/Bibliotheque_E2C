<?php 
session_start();

require_once('../model/Model.php');

$bdd = new Model();

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
var_dump($email);
if(isset($email) && $email != null) {
    $user = $bdd->getUserByEmail($email);
    
    if(!$user){
        
            $message = "Compte Inexistant - vérifiant vos information de connexion";
        header("location: ../controller/homeController.php?message=$message");
    } else if($password != $user ["mdp"]) {
       
            $message = "Mot de passe érroné - file petit filou";
    //header("location: ../controller/homeController.php?message=$message");
    } else {
        
        // tout est ok //
        $_SESSION["userId"] = $user["id"] ; 
        $_SESSION["userName"] = $user["pseudo"];

       //header("location: ../controller/homeController.php?message=$message");
    }

} else {
   
    $message = "Mail Obligatoire";
    //header("location: ../controller/homeController.php?message=$message");
}