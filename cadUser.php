<?php
require('lib/Modelo/ContaModelo.class.php');
require('lib/Controle/Conexao.class.php');
$login = $_POST['login'];
$senha = $_POST['pwd'];
$cpf = $_POST['cpf'];
$connect = new Conexao("lib/Controle/mysql.ini");
$sql = "SELECT * FROM conta WHERE usuario = '$login'";  
$comando = $connect->getConexao()->prepare($sql);
$comando ->bindValue("usuario", $login);
$comando->execute();
$usu = new ContaModelo();
if($login == "" or $login == null or $senha == "" or $senha == null){
  echo"
  <script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');
    window.location.href='index.php';
  </script>";
 
}else{
  if($comando->fetchAll()  != NULL){
    echo"
    <script language='javascript' type='text/javascript'>
      alert('Esse login já existe');
      window.location.href='index.php';
    </script>";
    die();
  }else{
    require('lib/Controle/MyCripty.class.php');
    $mc = new MyCripty();
    $mc -> chave = 97;
    $mc -> add_text = md5(sha1("texto chave aqui"));
    $senha = $mc->enc($senha);
    //$cpf = $mc->enc($cpf);
    $query = "INSERT INTO conta(usuario,senha,cpf) VALUES ('$login','$senha','$cpf')";
    $insert = $connect->getConexao()->prepare($query);
    $insert->execute();
    if($insert){
      echo"
      <script language='javascript' type='text/javascript'>
        alert('Usuário cadastrado com sucesso!');
        window.location.href='index.php';
      </script>";
      /*echo"<script src='js/sweetalert.min.js'></script>  
      <script language='javascript' type='text/javascript'>
        swal('Usuário cadastrado com sucesso!', 'Clique no botão para voltar!', 'success');
        
      </script>";*/
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
