<?php 

require_once('../model/Model.php');

$bdd = new Model();

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

if(isset($email) && $email != null) {

} else {
    $message = "Mail Obligatoire";
    header("location: ../controller/homeController.php?message=$message");
}