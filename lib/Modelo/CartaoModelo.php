<?php
    class CartaoModelo{
        private $saldo;
        private $tipoCartao;
        private $numeroCartao;
        private $nomeBanco;

        public function getSaldo(){
            return $this->saldo;
        }
        public function setSaldo($s){
            $this->saldo = $s;
        }
        public function gettipoCartao(){
            return $this->tipoCartao;
        }
        public function settipoCartao($t){
            $this->tipoCartao = $t;
        }
        public function getnumeroCartao(){
            return $this->numeroCartao;
        }
        public function setnumeroCartao($n){
            $this->numeroCartao = $n;
        }
        public function getnomeBanco(){
            return $this->nomeBanco;
        }
        public function setnomeBanco($b){
            $this->nomeBanco = $b;
        }

    }
?>