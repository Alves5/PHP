<?php
session_start();
require('header.php');
require('log.txt');
echo"
<div id='index'>
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
</div>";
require_once("rodape.php");
?>