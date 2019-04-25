<?php
require('lib/Modelo/ContaModelo.class.php');
require('lib/Controle/Conexao.class.php');
require('lib/Controle/MyCripty.class.php');
$mc = new MyCripty();
$mc -> chave = 97;
$mc -> add_text = md5(sha1("texto chave aqui"));
$senha = $mc->enc($_POST['senha']);
$user = $_POST['user'];

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