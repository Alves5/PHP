<?php
require('lib/Modelo/ContaModelo.class.php');
require('lib/Controle/Conexao.class.php');

$login = $_POST['login'];
$senha = $_POST['pwd'];
$connect = new Conexao("lib/Controle/mysql.ini");
$sql = "SELECT usuario FROM conta WHERE usuario = '$login'";  
$comando = $connect->getConexao()->prepare($sql);
$comando ->bindValue("usuario", $login);
$comando->execute();
$quer = "SELECT usuario FROM conta";
$comand = $connect->getConexao()->prepare($quer);
$comand->execute();
$resu = $comand->fetch();

$usu = new ContaModelo();

if($login == "" or $login == null or $senha == "" or $senha == null){
  echo"
  <script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');
    window.location.href='index.php';
  </script>";
 
}else{
  if($resu == $login){
    echo"
    <script language='javascript' type='text/javascript'>
      alert('Esse login já existe');
      window.location.href='index.php';
    </script>";
    die();
  }else{
    $query = "INSERT INTO conta(usuario,senha) VALUES ('$login','$senha')";
    $insert = $connect->getConexao()->prepare($query);
    $insert->execute();
    if($insert){
      echo"
      <script language='javascript' type='text/javascript'>
        alert('Usuário cadastrado com sucesso!');
        window.location.href='index.php';
      </script>";
    }else{
      echo"
      <script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse usuário');
        window.location.href='cadastro.php';
      </script>";
    }
  }
}
?>
