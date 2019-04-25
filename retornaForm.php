<?php
require_once("lib/Controle/historicoControle.class.php");
$executa = new HistoricoControle();
$registr = new HistoricoModelo();
$registr->setData($_POST['data']);
$registr->setNomeRegistro($_POST['nome']);
if ($_POST['idCartao'] == 0) {
    $registr->setIdCartao("a vista");
} else {
    $registr->setIdCartao($_POST['idCartao']);
}
//var_dump($_POST['idCartao']);
$tipo = $_POST['tipoRegistro'];
//var_dump($tipo);
if ( $tipo == 1) {
    $registr->setValorE($_POST['valor']);    
} else{
    $registr->setValorS($_POST['valor']);    
}
if($executa->inserirRegistro($registr)){
    echo "<script language='javascript' type='text/javascript'>
    alert('Deu certo!');
    window.location.href='index.php';
  </script>";
}else {
    echo "tente novamente";
}


/*if(isset($_GET['id'])){
    $pdo = new PDO("mysql:host=localhost;dbname=INTEGRACAO","root","123456");
    $sql ="SELECT form, tipo FROM Forms WHERE id=:id;";
    $comando = $pdo->prepare($sql);
    $comando->bindValue(":id", $_GET["id"]);
    $comando->execute();
    $forms = $comando->fetchAll(PDO::FETCH_ASSOC);
    header("Content-type: {$forms[0]['tipo']}");
    echo $forms[0]['form'];
}
*/



?>