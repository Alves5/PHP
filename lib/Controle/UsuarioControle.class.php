<?php
require_once("lib/Controle/mysql.ini");
require_once("lib/Modelo/UsuarioModelo.class.php");
final class UsuarioControle{
    public function inserirUsuario($usuario){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $sql = "INSERT INTO Usuario(nome, cpf, email, idade, contato) VALUES(:no,:cp,:em,:da,:co);";
        $comando = $conexao->getConexao()->prepare($sql);
        $comando->bindParam("no", $cartao->getNome());
        $comando->bindParam("cp", $cartao->getCpf());
        $comando->bindParam("em", $cartao->getEmail());
        $comando->bindParam("da", $cartao->getIdade());
        $comando->bindParam("co", $cartao->getContato());
        if($comando->execute()){
            $conexao->__destruct();
            return true;
        }else{
            $conexao->__destruct();
            return false;
        }
    }
    public function atualizarUsuario($usuarioA){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $sql ="UPDATE Usuario SET nome=:no, cpf=:cp, email=:em, idade=:da, contato=:co WHERE id=:id;";
        $comando = $conexao->getConexao()->prepare($sql);
        $comando->bindParam("id", $usuarioA->getId());
        $comando->bindParam("no", $usuarioA->getNome());
        $comando->bindParam("cp", $usuarioA->getCpf());
        $comando->bindParam("em", $usuarioA->getEmail());
        $comando->bindParam("da", $usuarioA->getIdade());
        $comando->bindParam("co", $usuarioA->getContato());
        if($comando->execute()){
            $conexao->__destruct();
            return true;
        }else{
            $conexao->__destruct();
            return false;
        }
    }
    public function deletarUsuario($id){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $sql="DELETE FROM Usuario WHERE id=:id";
        $comando = $conexao->getConexao()->prepare($sql);
        $comando->bindParam("id", $id);
        if($comando->execute()){
            $conexao->__destruct();
            return true;
        }else{
            $conexao->__destruct();
            return false;
        }
    }
}
?>