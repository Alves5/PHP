<?php
require('lib/Controle/MyCripty.class.php');
$mc = new MyCripty();
$mc -> chave = 97;
$mc -> add_text = md5(sha1("texto chave aqui"));
$Qform = $_POST["form"];
switch($Qform){
    case "Inserir":
        $saldo = $_POST["saldo"];
        $tCartao = $_POST["tipoCartao"];
        $nCartao = $mc->enc($_POST["numeroCartao"]);
        $nBanco = $_POST["nomeBanco"];
        $idConta = $_POST["cpf"];
        require_once("lib/Controle/CartaoControle.class.php");
        $executar = new CartaoControle();
        $modelo = new CartaoModelo();
        $modelo->setIdConta($idConta);
        $modelo->setSaldo($saldo);
        $modelo->setTipoCartao($tCartao);
        $modelo->setNumeroCartao($nCartao);
        $modelo->setNomeBanco($nBanco);
        if($executar->inserirCartao($modelo)){
            echo "<script language='javascript' type='text/javascript'>
            alert('Cartão cadastrado');
            window.location.href='index.php';
          </script>";
        }else{
            echo"Não deu certo";
        }
        break;
    case "Atualizar":
        $id = $_POST["id"];
        $saldo = $_POST["saldo"];
        $tCartao = $_POST["tipoCartao"];
        $nCartao = $_POST["numeroCartao"];
        $nBanco = $_POST["nomeBanco"];
            
        require_once("lib/Controle/CartaoControle.class.php");

        $executar = new CartaoControle();
        $modelo = new CartaoModelo();
        $modelo->setId($id);
        $modelo->setSaldo($saldo);
        $modelo->setTipoCartao($tCartao);
        $modelo->setNumeroCartao($nCartao);
        $modelo->setNomeBanco($nBanco);
        if($executar->atualizarCartao($modelo)){
            echo"Deu certo";
        }else{
            echo"Não deu certo";
        }
        break;
    case "Deletar":
        break;
}


?>