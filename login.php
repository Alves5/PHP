<?php
<<<<<<< HEAD
require('lib/Modelo/ContaModelo.class.php');
require('lib/Controle/Conexao.class.php');

$user = $_POST['user'];
$senha = $_POST['senha'];

$connect = new Conexao("lib/Controle/mysql.ini");
$verifica = "SELECT * FROM conta WHERE usuario = '$user' AND senha = '$senha'";
$comando = $connect->getConexao()->prepare($verifica);
$comando -> execute();
//var_dump($comando->fetchAll());

if ($comando->fetchAll()  == NULL){
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
=======
echo "
<html >
  <head>
    <meta charset='utf-8'>
    <title> Login de Usuário </title>
    <link rel='stylesheet' type='text/css' href='styles/bootstrap-4.1.2/bootstrap.min.css'>
    <link href='plugins/font-awesome-4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' type='text/css' href='styles/main_styles.css'>
    <link rel='stylesheet' type='text/css' href='styles/responsive.css'>
    <style>
      body{
        background-image: url(images/tabs.jpg);
      }
      #log{
        background: transparent;
      }
    </style>
    <link href='styles/btp.css' rel='stylesheet'>
    <link href='styles/signin.css' rel='stylesheet'>
  </head>
  <body class='text-center'>
    <div class='col-12 col-lg-6 '>
      <div class='card-columns'>
        <div class='card text-center' style='width:1337px;' id='log'>
          <div class='footer_about'>
            <div class='footer_logo'>Banco<span>Tech</span></div>
              <div class='contact_container'>
                <form action='#' id='contact_form' class='contact_form'>
                  <div class='row '>
                    <div class='col-md-3'>
                    </div>
                    <div class='col-md-3'>
                      <input type='email' class='contact_input' placeholder='Seu e-mail' required='required'>
                    </div>
                    <div class='col-md-3'>
                      <input type='password' class='contact_input' placeholder='Sua senha' required='required'> 
                    </div>
                  </div>
                  <input type='submit' class='contact_button' value='Login'>
                </form>
                </div>
              <a href='criar.php'> Cadastre-se </a>  
            </div>
        </div>
      </div>  
    </div>
  </body>
  <script src='js/jquery-3.2.1.min.js'></script>
  <script src='styles/bootstrap-4.1.2/popper.js'></script>
  <script src='styles/bootstrap-4.1.2/bootstrap.min.js'></script>
  <script src='js/custom.js'></script>
</html>
";
?>
>>>>>>> 8bc30b987131a673b1ecfa623c8505e5a9f4b515
