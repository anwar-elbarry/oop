<?php
 class Medecin  extends utilisateur {

    protected $specialite;

    public function consulterPatient($specialite ){
        $this -> specialite = $specialite;
        return $specialite;
    };
};
?>