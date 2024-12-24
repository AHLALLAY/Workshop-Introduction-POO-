<?php
    class Utilisateur
    {    
        protected $nom;
        protected $prenom;
        protected $type_utilisateur;

        function __construct($nom, $prenom, $type_utilisateur){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->type_utilisateur = $type_utilisateur;
        }

    }