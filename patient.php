<?php
require_once ('index.php');

class Patient extends Utilisateur{
    private $rendez_vous;

    function __construct($rendez_vous){
        $this->rendez_vous = $rendez_vous;
    }

    function prendreRendezVous(){
        
    }

}
