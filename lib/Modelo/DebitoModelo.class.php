<?php
    class DebitoModelo{
        private $id;
        private $depositos;
        private $saques;

        public function getId(){
            return $this->id;
        }
        public function setId($i){
            $this->id = $i;
        }
        public function getDepositos(){
            return $this->depositos;
        }
        public function setDepositos($d){
            $this->depositos = $d;
        }
        public function getSaques(){
            return $this->saques;
        }
        public function setSaques($s){
            $this->saques = $s;
        }
    }
?>