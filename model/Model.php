<?php 

class Model{
    // Définir propriétés //
    private PDO $bdd;
    // Constructeur //
    public function __construct()
    {
        try{
            $this->bdd = new PDO('mysql:host=localhost;dbname=pn_livres;charset=utf8','pn_livres_admin','9!5v*SgVtW$64n');
        } catch(Exception $e) {
            $message = "Connexion impossible - réesayer ultérieurement";
            header("location: ../controller/homeController.php?message=$message");
        }
        
    }

    public function gettAllBooks () {
        // On écrit la requête sql dans une variable //
        $sql = "SELECT * FROM livres_vw" ;
        // On applique cette sql dans une variable (cette ligne ne change jamais) //
        $query = $this->bdd->prepare($sql);
        // On éxecute la requête //
        $query->execute([]);
        // On récupère les résultat dans une variable - deux option fetch ou fetchALL
        $result = $query-> fetchAll();

        // retournant le résultat //
        return $result;

    }

    public function getUserByEmail($email){
        // On écrit la requête sql dans une variable //
        $sql = "SELECT id, mail, mdp, pseudo FROM user WHERE mail = :email" ;
        // On applique cette sql dans une variable (cette ligne ne change jamais) //
        $query = $this->bdd->prepare($sql);
        // On éxecute la requête //
        $query->execute([
            "email" => $email
        ]);
        // On récupère les résultat dans une variable - deux option fetch ou fetchALL
        $result = $query-> fetch();

        // retournant le résultat //
        return $result;
    }
    // Définir les méthode //
}