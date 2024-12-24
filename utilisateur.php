<?php 
 class utilisateur {

    protected $nom ;
    protected $prenome ;
    protected $typ_utilisateur ;

    public function afficherNomComplet(){
       return  $this ->nome $this ->prenome;
    };
    public function changerNom($nome){
        $this -> nome = $nome;
    };
    public function changerPrenom($prenome){
        $this -> prenome = $prenome;
    };
}
?>