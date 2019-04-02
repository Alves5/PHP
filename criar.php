<?php
echo "
<html >
  <head>
    <meta charset='utf-8'>
<title> Crie sua conta</title>
<style>

  body{
    background-image: url(images/tabs.jpg);
  }

</style>
    <link href='styles/btp.css' rel='stylesheet'>
    <link href='styles/signin.css' rel='stylesheet'>
  </head>
  <body class='text-center'>
    <div class='contact_container'>
      <form action='#' id='contact_form' class='contact_form'>
        <div class='row'>
          <div class='col-md-6'>
            <input type='text' class='contact_input' placeholder='Seu nome' required='required'>
          </div>
          <div class='col-md-6'>
            <input type='email' class='contact_input' placeholder='Seu e-mail' required='required'>
          </div>
        </div>
    <button class='contact_button'>Enviar</button>
  </form>
</div>
    <a style='color: #fff;' href='criar.php'>Cadastre-se.</a><br>
      <a style='color: #fff;' href='index.php'>Home</a>
  </body>
";
?>