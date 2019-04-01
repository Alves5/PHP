 
<?php
    class UsuarioModelo{
        private $nome ;
        private $cpf ;
        private $mail ;
        private $idade ;
        private $contato ;
        
        public function getNome(){
            return $this->nome;
        }
        public function setNome($n){
            $this->nome = $n;
        }
        public function getCpf(){
            return $this->usuario;
        }
        public function setCpf($c){
            $this->cpf= $c;
        }
        public function getMail(){
            return $this->mail;
        }
        public function setMail($m){
            $this->mail = $m;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($i){
            $this->idade = $i;
        }
        public function getContato(){
            return $this->contato;
        }
        public function setContado($o){
            $this->contato = $o;
        }
    }
?>