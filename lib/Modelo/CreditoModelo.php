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
        public function getMelhorDiaDeCompra(){
            return $this->melhorDiaDeCompra;
        }
        public function setMelhorDiaDeCompra($m){
            $this->melhorDiaDeCompra = $m;
        }
        public function getDataDeFatura(){
            return $this->dataDeFatura;
        }
        public function setDataDeFatura($d){
            $this->dataDeFatura = $d;
        }
        public function getLimitePago(){
            return $this->limitePago;
        }
        public function setLimitePago($p){
            $this->limitePago = $p;
        }        
        public function getLimiteAvista(){
            return $this->limiteAvista;
        }
        public function setLimiteAvista($a){
            $this->limiteAvista = $a;
        }
    }
?>