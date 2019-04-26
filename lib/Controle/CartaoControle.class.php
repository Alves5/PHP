<?php
require_once("lib/Controle/Conexao.class.php");
require_once("lib/Modelo/CartaoModelo.class.php");
final class CartaoControle{
    public function selecionarId($id){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $comando = $conexao->getConexao()->prepare("SELECT * FROM Cartao WHERE id=:id");
        $comando->bindParam("id", $id);
        $comando->execute();
        $consulta = $comando->fetch();
        $filmes = new CartaoModelo();
        $filmes->setId($consulta->id);
        $filmes->setNumeroCartao($consulta->numeroCartao);
        $filmes->setSaldo($consulta->saldo);
        $filmes->setNomeBanco($consulta->nomeBanco);
        $filmes->setTipoCartao($consulta->tipoCartao);
        $conexao->__destruct();
        return $filmes;
    }
    public function consultaCartoes($cpf){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $comando = $conexao->getConexao()->prepare("SELECT * FROM Cartao WHERE id_conta = $cpf;");
        $comando->execute();
        $resultado = $comando->fetchAll();
        $lista = [];
        foreach($resultado as $item){
            $cartao = new CartaoModelo();
            //$cartao->setId($item->id);
            $cartao->setNumeroCartao($item->numeroCartao);
            $cartao->setSaldo($item->saldo);
            $cartao->setNomeBanco($item->nomeBanco);
            $cartao->setTipoCartao($item->tipoCartao);
            $cartao->setPrazo($item->prazo);
            array_push($lista, $cartao);
        }
        $conexao->__destruct();
        return $lista;
    }
    public function inserirCartao($cartao){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $sql = "INSERT INTO Cartao(numeroCartao, saldo, nomeBanco, tipoCartao,id_conta,prazo) VALUES(:nc,:sa,:nb,:tc,:id,:pr);";
        $comando = $conexao->getConexao()->prepare($sql);
        $comando->bindValue("nc", $cartao->getNumeroCartao());
        $comando->bindValue("sa", $cartao->getSaldo());
        $comando->bindValue("nb", $cartao->getNomeBanco());
        $comando->bindValue("tc", $cartao->getTipoCartao());
        $comando->bindValue("id", $cartao->getIdConta());
        $comando->bindValue("pr", $cartao->getPrazo());
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
        $comando->bindValue("id", $cartaoA->getId());
        $comando->bindValue("nc", $cartaoA->getNumeroCartao());
        $comando->bindValue("sa", $cartaoA->getSaldo());
        $comando->bindValue("nb", $cartaoA->getNomeBanco());
        $comando->bindValue("tc", $cartaoA->getTipoCartao());
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