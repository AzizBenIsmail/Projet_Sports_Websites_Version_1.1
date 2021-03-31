<?php
    class User
    {
        private $id;
        private $pseudo;
        private $email;
        private $password;
        private $date;
        
        public function __construct($pseudo, $email, $password){
            $this->pseudo = $pseudo;
            $this->email = $email;
            $this->password = $password;
        }

        public function getIdUser () {
            return $this->id;
        }

        public function setIdUser ($id){
            $this->id = $id;
        } 

        public function getPseudo () {
            return $this->pseudo;
        }

        public function setPseudo ($pseudo){
            $this->pseudo = $pseudo;
        }

        public function getEmail () {
            return $this->email;
        }

        public function setEmail ($email){
            $this->email = $email;
        }

        public function getPassword () {
            return $this->password;
        }

        public function setPassword  ($password){
            $this->password = $password;
        }
        
        public function getDate () {
            return $this->date;
        }

        public function setDate  ($date){
            $this->date = $date;
        }
    }
?>