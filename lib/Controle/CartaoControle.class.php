<?php
require_once("lib/Controle/mysql.ini");
require_once("lib/Modelo/CartaoModelo.class.php");
final class CartaoControle{
    public function selecionarId($id){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $comando = $conexao->getConexao()->prepare("SELECT * FROM Cartao WHERE id=:id");
        $comando->bindParam("id", $id);
        $comando->execute();
        $consulta = $comando->fetch();
        $modelo = new CartaoModelo();
        $modelo->setId($consulta->id);
        $modelo->setNumeroCartao($consulta->numeroCartao);
        $modelo->setSaldo($consulta->saldo);
        $modelo->setNomeBanco($consulta->nomeBanco);
        $modelo->setTipoCartao($consulta->tipoCartao);
        $conexao->__destruct();
        return $modelo;
    }
    public function consultaCartoes(){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $comando = $conexao->getConexao()->prepare("SELECT * FROM Cartao;");
        $comando->execute();
        $resultado = $comando->fetchAll();
        $lista = [];
        foreach($resultado as $item){
            $cartao = new CartaoModelo();
            $cartao->setId($item->id);
            $cartao->setNumeroCartao($item->numeroCartao);
            $cartao->setSaldo($item->saldo);
            $cartao->setNomeBanco($item->nomeBanco);
            $cartao->setTipoCartao($item->tipoCartao);
            array_push($lista, $cartao);
        }
        $conexao->__destruct();
        return $lista;
    }

    public function inserirCartao($cartao){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $sql = "INSERT INTO Cartao(numeroCartao, saldo, nomeBanco, tipoCartao) VALUES(:nc,:sa,:nb,:tc);";
        $comando = $conexao->getConexao()->prepare($sql);
        $comando->bindParam("nc", $cartao->getNumeroCartao());
        $comando->bindParam("sa", $cartao->getSaldo());
        $comando->bindParam("nb", $cartao->getNomeBanco());
        $comando->bindParam("tc", $cartao->getTipoCartao());
        if($comando->execute()){
            $conexao->__destruct();
            return true;
        }else{
            $conexao->__destruct();
            return false;
        }
    }
    public function atualizarCartao($cartaoA){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $sql ="UPDATE Cartao SET numeroCartao=:nc, saldo=:sa, nomeBanco=:nb, tipoCartao=:tc WHERE id=:id;";
        $comando = $conexao->getConexao()->prepare($sql);
        $comando->bindParam("id", $cartaoA->getId());
        $comando->bindParam("nc", $cartaoA->getNumeroCartao());
        $comando->bindParam("sa", $cartaoA->getSaldo());
        $comando->bindParam("nb", $cartaoA->getNomeBanco());
        $comando->bindParam("tc", $cartaoA->getTipoCartao());
        if($comando->execute()){
            $conexao->__destruct();
            return true;
        }else{
            $conexao->__destruct();
            return false;
        }
    }
    public function deletarCartao($id){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $sql="DELETE FROM Cartao WHERE id=:id";
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