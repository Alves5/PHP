<?php
echo "
<html >
  <head>
    <meta charset='utf-8'>
    <title> Crie sua conta</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='styles/bootstrap-4.1.2/bootstrap.min.css'>
    <link href='plugins/font-awesome-4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' type='text/css' href='plugins/OwlCarousel2-2.2.1/owl.carousel.css'>
    <link rel='stylesheet' type='text/css' href='plugins/OwlCarousel2-2.2.1/owl.theme.default.css'>
    <link rel='stylesheet' type='text/css' href='plugins/OwlCarousel2-2.2.1/animate.css'>
    <link rel='stylesheet' type='text/css' href='styles/main_styles.css'>
    <link rel='stylesheet' type='text/css' href='styles/responsive.css'>
    <link rel='stylesheet' type='text/css' href='styles/contact.css'>
    <link rel='stylesheet' type='text/css' href='styles/contact_responsive.css'>
    <style>
      body{
        background-image: url(images/tabs.jpg);
      }
    </style>
    <link href='styles/btp.css' rel='stylesheet'>
    <link href='styles/signin.css' rel='stylesheet'>
  </head>
  <body class='text-center'>
      <div class='col-lg-6 footer_col magic_fade_in'>
        <div class='footer_about'>
          <div class='footer_logo'><span>Cadastre-se</span></div>

         <div class='contact_container'>
          <form action='#' id='contact_form' class='contact_form'>
            <div class='row'>
              <div class='col-md-4'>
                <input type='text' class='contact_input' placeholder='Seu nome' required='required'>
              </div>
              <div class='col-md-4'>
                <input type='password' class='contact_input' placeholder='Sua senha' required='required'>
              </div>
              <div class='col-md-4'>
                <input type='password' class='contact_input' placeholder='Confirme sua senha' required='required'>
              </div>
            </div>
            <button class='contact_button'>Enviar</button>
          </form>
          <a href='login.php'> Logar </a>
        </div>
      </div>
    </div>
  </body>
</html>
";
?>