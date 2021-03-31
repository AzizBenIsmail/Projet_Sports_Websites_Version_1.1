<?php
    class Resr
    {
        private $id_reser ;
        private $id_user ;
        private $nom_reser;
        private $date;
        private $type;
        
        public function __construct($id_user, $nom_reser, $date, $type){
            $this->id_user = $id_user;
            $this->nom_reser = $nom_reser;
            $this->date = $date;
            $this->type = $type;
        }
        public function getIdRser () {
            return $this->id;
        }

        public function setIdReser($id_reser){
            $this->id_reser = $id_reser;
        } 

        public function getIdUser () {
            return $this->id_user;
        }

        public function setIdUser ($id_user){
            $this->id_user = $id_user;
        } 

        public function getNom_reser () {
            return $this->nom_reser;
        }

        public function setNom_reser ($nom_reser){
            $this->nom_reser = $nom_reser;
        }

        public function getDate () {
            return $this->date;
        }

        public function setDate ($date){
            $this->date = $date;
        }

        public function getType () {
            return $this->type;
        }

        public function setType  ($type){
            $this->type = $type;
        }

    }
?>