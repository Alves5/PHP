<?php
$usuario = $_POST['usr'];
$senha = $_POST['pwd'];
require_once("lib/Controle/ContaControle.class.php");
$cnome = new ContaControle();
if($cnome->validarConta($u, $p)){
    session_start();
    $_SESSION['pwd'] = $senha;
    header("Location: AdminConf.php");
}else{
    header("Location: home.php");
}
?>