<?php
require_once ("sql/Conexao.class.php");
require_once ("modelo/p.class.php");

final class Controle{
	public function consultaTodos(){
	    $conexao = new Conexao("../sql/confi.ini");
        //COMANDO SQL PARA SELECIONAR OS DADOS
        $sql = "SELECT * FROM pizzas";
        $comando = $conexao->getConexao()->prepare($sql);
        //executa o comando sql
        $comando->execute();
        $resu = $comando->fetchAll();
        //faz a varredura do array
        $lista = array();
        foreach($resu as $item){
            $pizza = new Pizza();
            $pizza->setId($item->id);               
            $pizza->setPreco($item->preco);
            $pizza->setNome($item->nome);
            $pizza->setFoto($item->foto);
            $pizza->setType($item->type);
            array_push($lista, $pizza);
        }
        $conexao->__destruct();
        return $lista;
    }

    public function selecionarId($id){
	    $conexao = new Conexao("../sql/confi.ini");
        //seleciona o pizza pelo id
        $sql = "SELECT * FROM pizzas WHERE id=:id";
        $comando = $conexao->getConexao()->prepare($sql);
        $comando->bindValue(":id", $id);
        $comando->execute();
        $resu = $comando->fetch();
        $pizza = new Pizza();
        $pizza->setId($resu->id);
        $pizza->setPreco($resu->preco);
        $pizza->setNome($resu->nome);
        $conexao->__destruct();
        return $pizza;
    }

	public function adicionarPizza($pizza){
	    //faz a conexao
        $imagemT = explode("/", $pizza->getType());
        $imagemT = $imagemT[1];
        $imagemB = file_get_contents($pizza->getFoto());
	    $conexao = new Conexao("../sql/confi.ini");
	    //COMANDO SQL PARA INSERIR OS DADOS
	    $sql = "INSERT INTO pizzas(nome,preco,foto,type) VALUES (:no,:pr,:fo,:ty)";
	    //prepara para ser modificada pelo php
	    $comando = $conexao->getConexao()->prepare($sql);
	    //substitue os valores de referencia para os valores das variaveis do pizza
	    $comando->bindParam(":no",$pizza->getNome());
	    $comando->bindParam(":pr",$pizza->getPreco());
        $comando->bindParam(":fo",$imagemB);
        $comando->bindParam(":ty",$imagemT);
	    //executa o comando sql
	    if($comando->execute()){
	        $conexao->__destruct();
	        return true;
	    }else{
	        $conexao->__destruct();
	        return false;
	    }
    }

    public function deletaPizza($id){
        $conexao = new Conexao("../sql/confi.ini");
        //deleta pizza
        $del = $conexao->getConexao()->prepare("DELETE FROM pizzas WHERE id=:id");
        $del->bindValue(":id",$id);
        if($del->execute()){
            $conexao->__destruct();
            return true;
        }else{
            $conexao->__destruct();
            return false;
        }
    }

    public function atualizaPizza($id){
            $imagemT = explode("/", $id->getType());
            $imagemT = $imagemT[1];
            $imagemB = file_get_contents($id->getFoto());
            $conexao = new Conexao("../sql/confi.ini");
            $sql = "UPDATE pizzas SET id=:id, nome=:no, preco=:pr, foto=:fo, type=:ti WHERE id=:id";
            $up = $conexao->getConexao()->prepare($sql);
            $up->bindParam(":no", $id->getNome());
            $up->bindParam(":pr", $id->getPreco());
            $up->bindParam(":id", $id->getId());
            $up->bindParam(":fo", $imagemB);
            $up->bindParam(":ti", $imagemT);
            if($up->execute()){
                $conexao->__destruct();
                return true;
            }else{
                $conexao->__destruct();
                return false;
        }
    }
}
?>