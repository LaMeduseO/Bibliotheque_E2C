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
            echo("Connexion impossible =" .$e->getMessage());
        }
        

        var_dump($this->bdd);
    }
    // Définir les méthode //
}