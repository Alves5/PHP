<?php
echo"
<!DOCTYPE html>
<html lang='pt-br'>
<head>
<title>Contatos</title>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='description' content='HostSpace template project'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' href='styles/bootstrap-4.1.2/bootstrap.min.css'>
<link href='plugins/font-awesome-4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
<link rel='stylesheet' type='text/css' href='plugins/OwlCarousel2-2.2.1/owl.carousel.css'>
<link rel='stylesheet' type='text/css' href='plugins/OwlCarousel2-2.2.1/owl.theme.default.css'>
<link rel='stylesheet' type='text/css' href='plugins/OwlCarousel2-2.2.1/animate.css'>
<link rel='stylesheet' type='text/css' href='styles/contact.css'>
<link rel='stylesheet' type='text/css' href='styles/contact_responsive.css'>
</head>
<body>
<div class='super_container'>
	<header class='header trans_400'>
		<div class='container'>
			<div class='row'>
				<div class='col'>
					<div class='header_content d-flex flex-row align-items-center justify-content-start trans_400'>
						<div class='logo'><a href='#'>Banco<span>Tech</span></a></div>
						<nav class='main_nav ml-auto mr-auto'>
							<ul class='d-flex flex-row align-items-center justify-content-start'>
								<li><a href='index.php'>Home</a></li>
								<li><a href='servicos.php'>Serviços</a></li>
								<li class='active'><a href='contatos.php'>Contatos</a></li>
							</ul>
						</nav>
						<div class='log_reg'>
							<div class='log_reg_content d-flex flex-row align-items-center justify-content-start'>
							<div class='login log_reg_text'><a href='login.php'><img src='https://img.icons8.com/color/48/000000/businessman.png'></a></div>
							</div>
						</div>
						<div class='hamburger ml-auto'><i class='fa fa-bars' aria-hidden='true'></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class='menu_overlay trans_400'></div>
	<div class='menu trans_400'>
		<div class='menu_close_container'><div class='menu_close'><div></div><div></div></div></div>
		<div class='log_reg'>
			<div class='log_reg_content d-flex flex-row align-items-center justify-content-end'>
				<div class='login log_reg_text'><a href='#'>Login</a></div>
				<div class='register log_reg_text'><a href='#'>Criar</a></div>
			</div>
		</div>
		<nav class='menu_nav'>
			<ul>
				<li><a href='index.php'>Home</a></li>
				<li><a href='servicos.php'>Serviços</a></li>
				<li><a href='contatos.php'>Contatos</a></li>
			</ul>
		</nav>
	</div>
	<div class='home'>
		<div class='home_background'></div>
		<div class='background_image background_city' style='background-image:url(images/city_5.png)'></div>
		<div class='cloud cloud_1'><img src='images/cloud_left.png' alt=''></div>
		<div class='cloud cloud_2'><img src='images/cloud_left.png' alt=''></div>
		<div class='cloud cloud_3'><img src='images/cloud_left_full.png' alt=''></div>
		<div class='cloud cloud_4'><img src='images/cloud_left.png' alt=''></div>
		<div class='home_container'>
			<div class='container'>
				<div class='row'>
					<div class='col'>
						<div class='home_content'>
							<div class='home_title'>Contatos</div>
							<div class='breadcrumbs'>
								<ul class='d-flex flex-row align-items-center justify-content-start'>
									<li><a href='index.php'>Home</a></li>
									<li>Contatos</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class='contact'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-6 contact_col'>
	 					<div class='contact_content'>
						<div class='contact_title magic_fade_in'>Entre em contato</div>
						<div class='contact_text magic_fade_in'>
							<p>Nossa empresa tem como sede, a cidade de Fortaleza/Ce, então você que deseja um atendimento cara a cara, ligue para nós para mais informações.</p>
						</div>
						<div class='contact_logo magic_fade_in'><a href='#'>Banco<span>Tech</span></a></div>
						<div class='contact_list magic_fade_in'>
							<ul>
								<li>Rua Graça Aranha, Barra do Ceará, nº284</li>
								<li>+55 (85)99681-6314</li>
								<li>caylloc@gmail.com</li>
							</ul>
						</div>
					</div>
				</div>
				<div class='col-lg-6 contact_col magic_fade_in'>
					<div class='message_form_container'>
						<div class='contact_title'>Ou por E-mail</div>
						<form action='#' id='message_form' class='message_form'>
							<input type='text' class='message_input' placeholder='Seu nome' required='required'>
							<input type='email' class='message_input' placeholder='Seu e-mail' required='required'>
							<textarea class='message_input message_textarea' placeholder='Mensagem' required='required'></textarea>
							<button class='message_form_button'>Enviar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	";
		require_once("rodape.php");
		echo"
</div>
<script src='js/jquery-3.2.1.min.js'></script>
<script src='styles/bootstrap-4.1.2/popper.js'></script>
<script src='styles/bootstrap-4.1.2/bootstrap.min.js'></script>
<script src='plugins/greensock/TweenMax.min.js'></script>
<script src='plugins/greensock/TimelineMax.min.js'></script>
<script src='plugins/scrollmagic/ScrollMagic.min.js'></script>
<script src='plugins/greensock/animation.gsap.min.js'></script>
<script src='plugins/greensock/ScrollToPlugin.min.js'></script>
<script src='plugins/OwlCarousel2-2.2.1/owl.carousel.js'></script>
<script src='plugins/easing/easing.js'></script>
<script src='plugins/progressbar/progressbar.min.js'></script>
<script src='plugins/parallax-js-master/parallax.min.js'></script>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA'></script>
<script src='js/contact.js'></script>
</body>
</html>
";
?>