<?php
    class CartaoModelo{
        private $id_conta;
        private $saldo;
        private $tipoCartao;
        private $numeroCartao;
        private $nomeBanco;

        
        public function setIdConta($id){
            $this->id = $id;
        }
        public function getSaldo(){
            return $this->saldo;
        }
        public function setSaldo($s){
            $this->saldo = $s;
        }
        public function getTipoCartao(){
            return $this->tipoCartao;
        }
        public function setTipoCartao($t){
            $this->tipoCartao = $t;
        }
        public function getNumeroCartao(){
            return $this->numeroCartao;
        }
        public function setNumeroCartao($n){
            $this->numeroCartao = $n;
        }
        public function getNomeBanco(){
            return $this->nomeBanco;
        }
        public function setNomeBanco($b){
            $this->nomeBanco = $b;
        }

    }
?>