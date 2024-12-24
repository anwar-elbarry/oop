<?php 

class Patient extends utilisateur   {

    protected $rendez_vous ;

    public function prendreRendezVous($rendez_vous){
       return  $this -> rendez_vous;
    };
};
?>