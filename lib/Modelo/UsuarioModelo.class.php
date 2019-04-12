 
<?php
    class UsuarioModelo{
        private $id;
        private $nome;
        private $cpf;
        private $email;
        private $idade;
        private $contato;
        
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
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
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($m){
            $this->email = $m;
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