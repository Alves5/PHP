<div class='super_container'>
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
							<div class='home_title'>Cartões</div>
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
				<div class='col-lg-12 contact_col'>
	 				<div class='contact_content'>
						<div class='contact_title magic_fade_in'>Seus Cartões</div><br>
							<table class='table table-dark'>
								<thead>
									<tr>
										<th>Nº Cartão</th>
										<th>Bandeira</th>
										<th>Tipo</th>
										<th>Saldo</th>
										<th>Vencimento</th>
									</tr>
								</thead>
								<tbody>
						<?php
							session_start();
							require_once("lib/Controle/CartaoControle.class.php");
							require('lib/Controle/MyCripty.class.php');
							$mc = new MyCripty();
							$mc -> chave = 97;
							$mc -> add_text = md5(sha1("texto chave aqui"));
							$todos = new CartaoControle();
							$cpf = $_SESSION['cpf'];
							foreach ($todos->consultaCartoes($cpf) as $key) {
								echo "
									<tr>
										<td>{$mc -> dec($key->getNumeroCartao())}</td>
										<td>{$key->getNomeBanco()}</td>	
										<td>";
										if ($key->getTipoCartao() == 1) {
											echo "Débito";
										} else {
											echo "Crédito";
										}
										echo"
											
										</td>
										<td>{$key->getSaldo()}</td>
										<td>Falta apenas: {$key->getPrazo()} dias</td>

									</tr>";
							}
						?>
								</tbody>	
							</table>
                    </div>
				</div>
				<div class='col-lg-6 contact_col magic_fade_in'>
						<div class='message_form_container'>
							<div class='contact_title'>Inserir Novo</div>
							<?php
								require("formCartaoInserir.php");
							?>
						</div>
					</div>
				<div class='col-lg-6 contact_col magic_fade_in'>
					<div class='message_form_container'>
						<div class='contact_title'>Comentários</div>
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
