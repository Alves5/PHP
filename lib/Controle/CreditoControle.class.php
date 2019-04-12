<?php
require_once("lib/Controle/Conexao.class.php");
require_once("lib/Modelo/CreditoModelo.class.php");
final class CreditoControle{
    public function consultaCartoesCredito(){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $comando = $conexao->getConexao()->prepare("SELECT * FROM CartaoCredito;");
        $comando->execute();
        $resultado = $comando->fetchAll();
        $lista = [];
        foreach($resultado as $item){
            $credito = new CreditoModelo();
            $credito->setId($item->id);
            $credito->setMelhorDiaDeCompra($item->melhorDiaDeCompra);
            $credito->setLimitePago($item->limitePago);
            $credito->setLimiteAvista($item->limiteAvista);
            $credito->setDataDeFatura($item->dataDeFatura);
            array_push($lista, $credito);
        }
        $conexao->__destruct();
        return $lista;
    }

    public function inserirCartaoCredito($cartaoC){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $sql = "INSERT INTO CartaoCredito(melhorDiaDeCompra, limitePago, limiteAvista, dataDeFatura) VALUES(:mc,:lp,:la,:df);";
        $comando = $conexao->getConexao()->prepare($sql);
        $comando->bindParam("mc", $cartaoC->getMelhorDiaDeCompra());
        $comando->bindParam("lp", $cartaoC->getLimitePago());
        $comando->bindParam("la", $cartaoC->getLimiteAvista());
        $comando->bindParam("df", $cartaoC->getDataDeFatura());
        if($comando->execute()){
            $conexao->__destruct();
            return true;
        }else{
            $conexao->__destruct();
            return false;
        }
    }
    public function atualizarCartaoCredito($atualizarCC){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $sql ="UPDATE CartaoCredito SET melhorDiaDeCompra=mc, limitePago=:lp, limiteAvista=:la, dataDeFatura=:df WHERE id=:id;";
        $comando = $conexao->getConexao()->prepare($sql);
        $comando->bindParam("id", $atualizarCC->getId());
        $comando->bindParam("mc", $atualizarCC->getMelhorDiaDeCompra());
        $comando->bindParam("lp", $atualizarCC->getLimitePago());
        $comando->bindParam("la", $atualizarCC->getLimiteAvista());
        $comando->bindParam("df", $atualizarCC->getDataDeFatura());
        if($comando->execute()){
            $conexao->__destruct();
            return true;
        }else{
            $conexao->__destruct();
            return false;
        }
    }
    public function deletarCartaoCredito($id){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $sql="DELETE FROM CartaoCredito WHERE id=:id";
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