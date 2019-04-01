<?php
    class ContaModelo{
        private $id;
        private $usuario;
        private $senha;

            public function getId(){
                return $this->id;
            }
            public function setId($i){
                $this->id = $i;
            }
            public function getUsuario(){
                return $this->usuario;
            }
            public function setUsuario($u){
                $this->usuario = $u;
            }
            public function getSenha(){
                return $this->senha;
            }
            public function setSenha($p){
                $this->senha = $p;
            }
    }
?>