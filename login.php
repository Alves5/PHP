<?php
echo "
<html >
  <head>
    <meta charset='utf-8'>
<title> Login de Usuário </title>
<style>

  body{
    background-image: url(images/tabs.jpg);
  }

</style>
    <link href='styles/btp.css' rel='stylesheet'>
    <link href='styles/signin.css' rel='stylesheet'>
  </head>
  <body class='text-center'>
    <form class='form-signin' method='post' action='salvar2.php'>
      <img class='mb-4' src='images/.png' alt='' width='72' height='72'>
      <h1 style='color: #fff;' class='h3 mb-3 font-weight-normal'>Entre na sua conta</h1>
      <label for='login' class='sr-only'>Nome de usuário:</label>
      <input type='text' id='login' name='login' class='form-control' placeholder='Login' required autofocus>
      <label for='senha' class='sr-only'>Senha</label>
      <input type='password' id='senha' name='senha' class='form-control' placeholder='Senha' required><br>
      <button class='btn btn-lg btn-success btn-block' type='submit' id='entrar' name='entrar'>Entrar</button>
      <a style='color: #fff;' href='criar.php'>Cadastre-se.</a><br>
      <a style='color: #fff;' href='index.php'>Home</a>
    </form>
  </body>
";
?>