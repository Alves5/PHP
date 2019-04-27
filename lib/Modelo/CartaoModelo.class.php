<?php
    class CartaoModelo{
        private $id_conta;
        private $prazo;
        private $saldo;
        private $tipoCartao;
        private $numeroCartao;
        private $nomeBanco;       
        
        public function getIdConta(){
            return $this->id_conta;
        }
        public function setIdConta($id){
            $this->id_conta = $id;
        }
        
        public function getPrazo(){
            $dia = $this->prazo- date("d");
            if ($dia < 0) {
                $dia = $dia +30;
            }
            
            return $dia;
        }
        public function setPrazo($p){
            $this->prazo = $p;
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