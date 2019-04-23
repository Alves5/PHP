<?php
require('lib/Modelo/ContaModelo.class.php');
require('lib/Controle/Conexao.class.php');
$user = $_POST['user'];
$senha = $_POST['senha'];
$connect = new Conexao("lib/Controle/mysql.ini");
$verifica = "SELECT * FROM conta WHERE usuario = '$user' AND senha = '$senha'";
$comando = $connect->getConexao()->prepare($verifica);
$comando -> execute();
//var_dump($comando->fetchAll());

if ($comando->fetchAll() == NULL){
  echo"
  <script language='javascript' type='text/javascript'>
    alert('Login e/ou senha incorretos');
    window.location.href='index.php';
  </script>";
  die();
}else{
    setcookie("login",$user);
    header("Location: index.php");
}


?>