<?php

    class formulaireFS {
        protected $titre;
        protected $genre;
        protected $duree;
        protected $boxoffice;
        protected $realisateur;
        protected $couleur;
        protected $description;
        protected $acteur;
        protected $note;
        protected $origine;
        protected $distributeur;

        #le constructeur
        public function __construct($a, $b, $c, $d, $e){
            $this->titre = $a;
            $this->genre = $b;
            $this->duree = $c;
            $this->boxoffice = $d;
            $this->realisateur = $e;
        }

        #les getters
        public function getTitre(){
            return $this->titre;
        }

        public function getGenre(){
            return $this->genre;
        }

        public function getduree(){
            return $this->duree;
        }

        public function getBoxOffice(){
            return $this->boxoffice;
        }

        public function getRealisateur(){
            return $this->realisateur;
        }

        #les setters

        public function setTitre($newtitre){
            $this->titre =$newtitre;
        }

        public function setGenre($newgenre){
            $this->genre =$newgenre;
        }

        public function setDuree($newduree){
            $this->duree =$newduree;
        }

        public function setBoxOffice($newboxoffice){
            $this->boxoffice =$newboxoffice;
        }

    }

