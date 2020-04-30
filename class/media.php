<?php

require_once("/Applications/MAMP/htdocs/Repository-gitKraken/projet_cinema/include/bdd.php");

    class media {
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

        public static function getMedia($video_id = 1){
            // je récupère graçe à une requête une ligne de ma table
            $req = "SELECT * FROM `video` WHERE video_id = :video_id; ";
            $req = $GLOBALS['bdd']->prepare($req);
            $req->bindValue(":video_id", $video_id);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        }
    }

       