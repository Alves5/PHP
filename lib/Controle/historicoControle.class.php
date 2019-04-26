<?php
require_once("lib/Controle/Conexao.class.php");
require_once("lib/Modelo/HistoricoModelo.class.php");
final class HistoricoControle{
    public function consultaEntrada(){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $comando = $conexao->getConexao()->prepare("SELECT * FROM historico WHERE valorE != 0;");
        $comando->execute();
        $resultado = $comando->fetchAll();
        $lista = [];
        foreach($resultado as $item){
            $cartao = new HistoricoModelo();
            $cartao->setIdHistorico($item->id_history);
            $cartao->setIdCartao($item->id_card);
            $cartao->setNomeRegistro($item->nome);
            $cartao->setData($item->data);
            $cartao->setValorE($item->valorE);
            array_push($lista, $cartao);
        }
        $conexao->__destruct();
        return $lista;
    }
    public function consultaSaida(){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $comando = $conexao->getConexao()->prepare("SELECT * FROM historico WHERE valorS != 0;");
        $comando->execute();
        $resultado = $comando->fetchAll();
        $lista = [];
        foreach($resultado as $item){
            $cartao = new HistoricoModelo();
            $cartao->setIdHistorico($item->id_history);
            $cartao->setIdCartao($item->id_card);
            $cartao->setNomeRegistro($item->nome);
            $cartao->setData($item->data);
            $cartao->setValorS($item->valorS);
            array_push($lista, $cartao);
        }
        $conexao->__destruct();
        return $lista;
    }
    public function inserirRegistro($registro){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $sql = "INSERT INTO historico(nome,data,valorE,valorS) VALUES(:no,:da,:ve,:vs);";
        $comando = $conexao->getConexao()->prepare($sql);
        //$comando->bindValue(":id", $registro->getIdCartao());
        //var_dump($registro->getIdCartao());
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
    public function balanco(){
        $conexao = new Conexao("lib/Controle/mysql.ini");
        $sqlE ="SELECT SUM(valorS)-SUM(valorE) as valor1 FROM historico;";
        //$sqlS ="SELECT SUM(valorS) as valor2 FROM historico;";
        $comandoE = $conexao->getConexao()->prepare($sqlE);
        //$comandoS = $conexao->getConexao()->prepare($sqlS);
        if($comandoE->execute()){
            
            while ($resultado = $comandoE->fetchAll()){;
                var_dump($resultado[0]);
            }
            $conexao->__destruct();
        }
    }
}
?>