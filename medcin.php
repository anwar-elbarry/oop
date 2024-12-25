<?php
class Medecin extends Utilisateur {
    protected $specialite;
    protected $consultations = [];

    public function __construct($nom, $prenom, $specialite) {
        parent::__construct($nom, $prenom, 'medecin');
        $this->specialite = $specialite;
    }

    public function consulterPatient($patient, $diagnostic) {
        if (!($patient instanceof Patient)) {
            throw new Exception("Le paramètre doit être un objet de type Patient");
        }

        $consultation = [
            'patient' => $patient,
            'date' => date('Y-m-d'),
            'diagnostic' => $diagnostic
        ];
        
        $this->consultations[] = $consultation;
        return true;
    }

    public function getSpecialite() {
        return $this->specialite;
    }

    public function getConsultations() {
        return $this->consultations;
    }
}
?>