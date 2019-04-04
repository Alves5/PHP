<?php
require_once("lib/Controle/mysql.ini");
require_once("lib/Modelo/ContaModelo.class.php");
final class ContaControle{
    
    /*public function selecionarId($id){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $comando = $conexao->getConexao()->prepare("SELECT * FROM Conta WHERE id=:id");
        $comando->bindParam("id", $id);
        $comando->execute();
        $consulta = $comando->fetch();
        $conta = new ContaModelo();
        $conta->setId($consulta->id);
        $conta->setUsuario($consulta->usuario);
        $conta->setSenha($consulta->senha);
        $conexao->__destruct();
        return $conta;
    }
    public function consultaUsuarios(){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $comando = $conexao->getConexao()->prepare("SELECT * FROM Conta;");
        $comando->execute();
        $resultado = $comando->fetchAll();
        $lista = [];
        foreach($resultado as $item){
            $conta = new ContaModelo();
            $conta->setId($item->id);
            $conta->setUsuario($item->usuario);
            $conta->setSenha($item->senha);
            array_push($lista, $conta);
        }
        $conexao->__destruct();
        return $lista;
    }*/

    public function inserirUsuario($usuario){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $sql = "INSERT INTO Conta(usuario, senha) VALUES(:us,:se);";
        $comando = $conexao->getConexao()->prepare($sql);
        $comando->bindParam("us", $cartao->getUsuario());
        $comando->bindParam("se", $cartao->getSenha());
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
        $sql ="UPDATE Conta SET usuario=:us, senha=:se WHERE id=:id;";
        $comando = $conexao->getConexao()->prepare($sql);
        $comando->bindParam("id", $usuarioA->getId());
        $comando->bindParam("us", $usuarioA->getUsuario());
        $comando->bindParam("se", $usuarioA->getSenha());
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
        $sql="DELETE FROM Conta WHERE id=:id";
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