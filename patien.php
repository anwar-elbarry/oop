<?php 

class Patient extends Utilisateur {
    protected $rendez_vous = [];

    public function __construct($nom, $prenom) {
        parent::__construct($nom, $prenom, 'patient');
    }

    public function prendreRendezVous($date, $heure) {
        $rendez_vous = [
            'date' => $date,
            'heure' => $heure,
            'status' => 'planifié'
        ];
        $this->rendez_vous[] = $rendez_vous;
        return true;
    }

    public function getRendezVous() {
        return $this->rendez_vous;
    }
}
?>