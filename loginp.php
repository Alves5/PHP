<?php 
require("sql/Conexao.class.php");
$login = $_POST['login'];
$senha = $_POST['senha'];
$entrar = $_POST['entrar'];
$connect = new Conexao("../sql/confi.ini");
if (isset($entrar)) {        
  $verifica = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
  $comando = $connect->getConexao()->prepare($verifica);
  $comando -> execute();
  if ($comando->fetchAll()<=0){
    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
    die();
  }

  if ($login == 'admin' and $senha ='diogo') {
    setcookie("login",$login);
    header("Location:admin.php");  
  }else{
    setcookie("login",$login);
    header("Location:inicio.php");
  }
}

?>