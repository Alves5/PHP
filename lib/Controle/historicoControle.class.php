<?php
require_once("lib/Controle/Conexao.class.php");
require_once("lib/Modelo/HistoricoModelo.class.php");
final class HistoricoControle{
    public function consultaEntrada(){
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
    public function inserirRegistro($registro){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $sql = "INSERT INTO historico(nome,data,valorE,valorS) VALUES(:no,:da,:ve,:vs);";
        $comando = $conexao->getConexao()->prepare($sql);
        $comando->bindValue(":no", $registro->getNomeRegistro());
        $comando->bindValue(":da", $registro->getData());
        $comando->bindValue(":ve", $registro->getValorE());
        $comando->bindValue(":vs", $registro->getValorS());
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