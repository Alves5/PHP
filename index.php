<?php
echo"
<!DOCTYPE html>
<html lang='pt-br'>
<head>
<title>Banco Tech</title>
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
								<li class='active'><a href='index.php'>Home</a></li>
								<li><a href='servicos.php'>Serviços</a></li>
								<li><a href='contatos.php'>Contatos</a></li>
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
		<div class='background_image background_city' style='background-image:url(images/city.png)'></div>
		<div class='cloud cloud_1'><img src='images/cloud.png' alt=''></div>
		<div class='cloud cloud_2'><img src='images/cloud.png' alt=''></div>
		<div class='cloud cloud_3'><img src='images/cloud_full.png' alt=''></div>
		<div class='cloud cloud_4'><img src='images/cloud.png' alt=''></div>
		<div class='home_container'>
			<div class='container'>
				<div class='row'>
					<div class='col'>
						<div class='home_content text-center'>
							<div class='home_title'>Gerenciamento Financeiro</div>
							<div class='home_text'>Nossa empresa está disposta a propôr um gerenciamento financeiro de alta qualidade, de forma rápida e simples.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class='intro'>
		<div class='container'>
			<div class='row'>
				<div class='col magic_fade_in'>
					<div class='section_title text-center'><h2>Principais benefícios</h2></div>
				</div>
			</div>
			<div class='row intro_row'>
				<div class='intro_dots magic_fade_in' style='background-image:url(images/dots.png)'></div>
				<div class='col-lg-4 intro_col magic_fade_in'>
					<div class='intro_item d-flex flex-column align-items-center justify-content-start text-center'>
						<div class='intro_icon_container d-flex flex-column align-items-center justify-content-center'>
							<div class='intro_icon'><img src='images/icon_1.svg' alt='https://www.flaticon.com/authors/freepik'></div>
						</div>
						<div class='intro_item_content'>
							<div class='intro_item_title'>Simplicidade</div>
							<div class='intro_item_text'>
								<p>A Tech criou um sistema de gerenciamento bem simples, rápido e prático, para uma experiência de alta qualidade.</p>
							</div>
						</div>
					</div>
				</div>
				<div class='col-lg-4 intro_col magic_fade_in'>
					<div class='intro_item d-flex flex-column align-items-center justify-content-start text-center'>
						<div class='intro_icon_container d-flex flex-column align-items-center justify-content-center'>
							<div class='intro_icon'><img src='images/icon_2.svg' alt='https://www.flaticon.com/authors/freepik'></div>
						</div>
						<div class='intro_item_content'>
							<div class='intro_item_title'>Servidores rápidos</div>
							<div class='intro_item_text'>
								<p>Nossos servidores tem um alto sistema de carregamentos de dados, com uma extrema velocidade e baixo risco de travamentos.</p>
							</div>
						</div>
					</div>
				</div>
				<div class='col-lg-4 intro_col magic_fade_in'>
					<div class='intro_item d-flex flex-column align-items-center justify-content-start text-center'>
						<div class='intro_icon_container d-flex flex-column align-items-center justify-content-center'>
							<div class='intro_icon'><img src='images/icon_3.svg' alt='https://www.flaticon.com/authors/freepik'></div>
						</div>
						<div class='intro_item_content'>
							<div class='intro_item_title'>Super adaptável</div>
							<div class='intro_item_text'>
								<p>A nossa companhia provém de um sistema super adaptável, tendo versões para todos os dispositivos eletrônicos disponíveis.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col text-center'>
					<div class='intro_button text-center trans_200 ml-auto mr-auto'><a href='#'>Por apenas R$99,99 mensais</a></div>
				</div>
			</div>
		</div>
	</div>
	<div class='choice'>
		<div class='container'>
			<div class='row row-lg-eq-height'>
				<div class='col-lg-6 choice_col magic_fade_in'>
					<div class='choice_image'><img src='images/choice.png' alt=''></div>
				</div>
				<div class='col-lg-6 choice_col magic_fade_in'>
					<div class='choice_content'>
						<div class='section_title magic_fade_in'><h2>Por que o Banco Tech?</h2></div>
						<div class='choice_text'>
							<p>Como já citado acima, a nossa companhia tem como requisito, a qualidade e o compromisso em manter um ambiente adequado de gerenciamento.<p>
						</div>
						<div class='choice_list'>
							<ul class='d-flex flex-row align-items-start justify-content-between'>
								<li class='d-flex flex-column align-items-center justify-content-center magic_fade_in'>
									<div class='choice_icon'><img src='images/icon_7.svg' alt='https://www.flaticon.com/authors/freepik'></div>
									<div class='choice_title'>Marketing</div>
								</li>
								<li class='d-flex flex-column align-items-center justify-content-center magic_fade_in'>
									<div class='choice_icon'><img src='images/icon_8.svg' alt='https://www.flaticon.com/authors/freepik'></div>
									<div class='choice_title'>Status</div>
								</li>
								<li class='d-flex flex-column align-items-center justify-content-center magic_fade_in'>
									<div class='choice_icon'><img src='images/icon_9.svg' alt='https://www.flaticon.com/authors/freepik'></div>
									<div class='choice_title'>Servidores</div>
								</li>
								<li class='d-flex flex-column align-items-center justify-content-center magic_fade_in'>
									<div class='choice_icon'><img src='images/icon_10.svg' alt='https://www.flaticon.com/authors/freepik'></div>
									<div class='choice_title'>Qualidade</div>
								</li>
							</ul>
						</div>
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
<script src='js/custom.js'></script>
</body>
</html>
";
?>
