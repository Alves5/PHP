<<<<<<< HEAD
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
<link rel='stylesheet' type='text/css' href='styles/contact.css'>
<link rel='stylesheet' type='text/css' href='styles/contact_responsive.css'>
<link rel='stylesheet' type='text/css' href='styles/services.css'>
<link rel='stylesheet' type='text/css' href='styles/services_responsive.css'>
<link rel="stylesheet" type='text/css' href='css/modal.css' >

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
                <li><a href='#' id='inde'>Home</a></li>
								<li><a href='#' id='servico'>Serviços</a></li>
								<li><a href='#' id='contato'>Contatos</a></li>'
							</ul>
						</nav>
						<div class='log_reg'>	
<?php
if (isset($_COOKIE['login'])) {
	echo"
							<font color='white'>Bem-Vindo, {$_COOKIE['login']} </font>
							<a class='btn btn-secondary' href='logout.php'> Sair</a>";
}else{
  echo "
							<div class='log_reg_content d-flex flex-row align-items-center justify-content-start'>							
								<div class='login log_reg_text'>
									<a href='#' data-toggle='modal' data-target='#ExemploModalCentralizado'>
										<img src='images/icon.png'>
									</a>
								</div>
							</div>";
}
?>
						</div>
						<div class='hamburger ml-auto'>
							<i class='fa fa-bars' aria-hidden='true'></i>
						</div>
					</div>
				</div>
			</div>
		</div>
=======
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
<link rel='stylesheet' type='text/css' href='styles/contact.css'>
<link rel='stylesheet' type='text/css' href='styles/contact_responsive.css'>
<link rel='stylesheet' type='text/css' href='styles/services.css'>
<link rel='stylesheet' type='text/css' href='styles/services_responsive.css'>
<link rel="stylesheet" type='text/css' href='css/modal.css' >

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
                            <li><a href='#' id='inde'>Home</a></li>
							<li><a href='#' id='servico'>Serviços</a></li>
							<li><a href='#' id='contato'>Contatos</a></li>
							</ul>
						</nav>
						<div class='log_reg'>
							<div class='log_reg_content d-flex flex-row align-items-center justify-content-start'>
								<div class='login log_reg_text'><a href='#' data-toggle='modal' data-target='#ExemploModalCentralizado'><img src='images/icon.png'></a></div>
								
							</div>
							
						</div>
						<div class='hamburger ml-auto'><i class='fa fa-bars' aria-hidden='true'></i></div>
					</div>
				</div>
			</div>
		</div>
>>>>>>> 8bc30b987131a673b1ecfa623c8505e5a9f4b515
	</header>