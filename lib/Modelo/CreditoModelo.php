<?php
    class CreditoModelo{

        private $id;
        private $melhorDiaDeCompra;
        private $limitePago;
        private $limiteAvista;
        private $dataDeFatura;

        public function getId(){
            return $this->id;
        }
        public function setId($i){
            $this->id = $i;
        }
        public function getmelhorDiaDeCompra(){
            return $this->melhorDiaDeCompra;
        }
        public function setmelhorDiaDeCompra($m){
            $this->melhorDiaDeCompra = $m;
        }
        public function getdataDeFatura(){
            return $this->dataDeFatura;
        }
        public function setdataDeFatura($d){
            $this->dataDeFatura = $d;
        }
        public function getlimitePago(){
            return $this->limitePago;
        }
        public function setlimitePago($p){
            $this->limitePago = $p;
        }        
        public function getlimiteAvista(){
            return $this->limiteAvista;
        }
        public function setlimiteAvista($a){
            $this->limiteAvista = $a;
        }
    }
?>