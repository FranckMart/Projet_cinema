<?php

    class formulaireFS {
        protected $_id;
        protected $_titre;
        protected $_type;
        protected $_genre;
        protected $_couleur;
        protected $_realisateur;
        protected $_acteurP;
        protected $_casting;
        protected $_duree;
        protected $_origine;
        protected $_note;
        protected $_dateSortie;
        protected $_distributeur;
        protected $_boxoffice;
        protected $_synopsis;


        #le constructeur
        // public function __construct($id, $titre, $type, $genre, $couleur, $realisateur, $acteurP, $casting, $duree, $origine, $note, $dateSortie, $distributeur, $boxoffice, $synopsis){
        //     $this->titre = $id;
        //     $this->titre = $titre;
        //     $this->type = $type;
        //     $this->genre = $genre;
        //     $this->couleur = $couleur; 
        //     $this->realisateur = $realisateur;
        //     $this->acteurP = $acteurP;
        //     $this->casting = $casting;
        //     $this->duree = $duree;
        //     $this->origine = $origine;
        //     $this->note = $note;
        //     $this->dateSortie = $dateSortie;
        //     $this->distributeur = $distributeur;
        //     $this->boxoffice = $boxoffice;
        //     $this->synopsis = $synopsis;
        // }

        public static function getVideo(){
            // je récupère graçe à une requête une ligne de ma table
            $req = "SELECT * FROM `video`; ";
            $req = $GLOBALS['bdd']->prepare($req);
            $req->execute();
        }
    }

        #les getters
        // public function getId(){
        //     return $this->id;
        // }

        // public function getTitre(){
        //     return $this->titre;
        // }

        // public function getType(){
        //     return $this->type;
        // }

        // public function getGenre(){
        //     return $this->genre;
        // }

        // public function getCouleur(){
        //     return $this->couleur;
        // }

        // public function getRealisateur(){
        //     return $this->realisateur;
        // }

        // public function getActeurP(){
        //     return $this->acteurP;
        // }

        // public function getCasting(){
        //     return $this->casting;
        // }

        // public function getduree(){
        //     return $this->duree;
        // }

        // public function getOrigine(){
        //     return $this->origine;
        // }

        // public function getNote(){
        //     return $this->note;
        // }

        // public function getDateSortie(){
        //     return $this->dateSortie;
        // }
        // public function getDistributeur(){
        //     return $this->distributeur;
        // }

        // public function getBoxOffice(){
        //     return $this->boxoffice;
        // }

        // public function getSynopsis(){
        //     return $this->synopsis;
        // }




        #les setters

        // public function setTitre($newtitre){
        //     $this->titre =$newtitre;
        // }

        // public function setGenre($newgenre){
        //     $this->genre =$newgenre;
        // }

        // public function setDuree($newduree){
        //     $this->duree =$newduree;
        // }

        // public function setBoxOffice($newboxoffice){
        //     $this->boxoffice =$newboxoffice;
        // }



