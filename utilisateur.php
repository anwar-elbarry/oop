<?php 
class Utilisateur {
    protected $nom;
    protected $prenom;
    protected $type_utilisateur;

    public function __construct($nom, $prenom, $type_utilisateur) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->type_utilisateur = $type_utilisateur;
    }

    public function afficherNomComplet() {
        return $this->nom . " " . $this->prenom;
    }

    public function changerNom($nom) {
        $this->nom = $nom;
    }

    public function changerPrenom($prenom) {
        $this->prenom = $prenom;
    }
}
?>