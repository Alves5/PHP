<?php
require_once("lib/Controle/mysql.ini");
require_once("lib/Modelo/DebitoModelo.class.php");
final class DebitoControle{
    public function consultaCartoesDebito(){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $comando = $conexao->getConexao()->prepare("SELECT * FROM CartaoDebito;");
        $comando->execute();
        $resultado = $comando->fetchAll();
        $lista = [];
        foreach($resultado as $item){
            $debi = new DebitoModelo();
            $debi->setId($item->id);
            $debi->setDepositos($item->depositos);
            $debi->setSaques($item->saques);
            array_push($lista, $debi);
        }
        $conexao->__destruct();
        return $lista;
    }
    public function inserirCartaoDebito($cartaoD){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $sql = "INSERT INTO CartaoDebito(depositos, saques) VALUES(:de,:sa);";
        $comando = $conexao->getConexao()->prepare($sql);
        $comando->bindParam("de", $cartaoD->getDepositos());
        $comando->bindParam("sa", $cartaoD->getSaques());
        if($comando->execute()){
            $conexao->__destruct();
            return true;
        }else{
            $conexao->__destruct();
            return false;
        }
    }
    public function atualizarCartaoDebito($cartaoA){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $sql ="UPDATE CartaoDebito SET depositos=:de, saques=:sa WHERE id=:id;";
        $comando = $conexao->getConexao()->prepare($sql);
        $comando->bindParam("id", $cartaoA->getId());
        $comando->bindParam("de", $cartaoA->getDepositos());
        $comando->bindParam("sa", $cartaoA->getSaques());
        if($comando->execute()){
            $conexao->__destruct();
            return true;
        }else{
            $conexao->__destruct();
            return false;
        }
    }
    public function deletarCartaoDebito($id){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $sql="DELETE FROM CartaoDebito WHERE id=:id";
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