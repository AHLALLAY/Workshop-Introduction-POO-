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

        function getNom(){
            return $this->nom;
        }

        function getPrenom(){
            return $this->prenom;
        }
        
        function getType_utilisateur(){
            return $this->type_utilisateur;
        }
        
        function afficherNomComplet(){
            return "{$this->nom} {$this->prenom}";
        }
        
        function changerNom($newName){
            $this->nom = $newName;
        }
        
        function changerPrenom($newPrenom){
            $this->prenom = $newPrenom;
        }
    }