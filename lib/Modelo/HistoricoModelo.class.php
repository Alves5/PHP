<?php
    class HistoricoModelo{
        private $id_history;
        private $id_card;
        private $nome;
        private $data;
        private $valorE;
        private $valorS;
        private $valorA;

        public function getIdHistorico(){
            return $this->id_history;
        }
        public function setIdHistorico($id_history){
            $this->id_history = $id_history;
        }

        public function getIdCartao(){
            return $this->id_card;
        }
        public function setIdCartao($i){
            $this->id_card = $i;
        }

        public function getNomeRegistro(){
            return $this->nome;
        }
        public function setNomeRegistro($m){
            $this->nome = $m;
        }
        public function getData(){
            return $this->data;
        }
        public function setData($d){
            $this->data = $d;
        }
        public function getValorE(){
            return $this->valorE;
        }
        public function setValorE($p){
            $this->valorE = $p;
        }        
        public function getValorS(){
            return $this->valorS;
        }
        public function setValorS($a){
            $this->valorS = $a;
        }

        public function getValorA(){
            return $this->valorA;
        }
        public function setValorA($a){
            $this->valorA = $a;
        }
    }
?>