<div id='index'>
	<div class='home'>
		<div class='home_background'></div>
		<div class='background_image background_city' style='background-image:url(images/city_3.png)'></div>
		<div class='cloud cloud_1'><img src='images/cloud.png' alt=''></div>
		<div class='cloud cloud_2'><img src='images/cloud.png' alt=''></div>
		<div class='cloud cloud_3'><img src='images/cloud_full_2.png' alt=''></div>
		<div class='cloud cloud_4'><img src='images/cloud.png' alt=''></div>
		<div class='home_container'>
			<div class='container'>
				<div class='row'>
					<div class='col'>
						<div class='home_content'>
							<div class='home_title'>Serviços</div>
							<div class='breadcrumbs'>
								<ul class='d-flex flex-row align-items-center justify-content-start'>
									<li><a href='index.php'>Home</a></li>
									<li>Serviços</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class='services'>
		<div class='container'>
			<div class='row'>
				<div class='col'>
					<div class='contact_title magic_fade_in text-center'><h2>Serviços disponíveis</h2></div>
				</div>
			</div>
			
			<div class='row services_row'>
				<div class='col-lg-4 col-md-6 service_col magic_fade_in'>
					<div class='service d-flex flex-column align-items-center justify-content-start text-center trans_200'>
						<div class='service_icon'><img class='png' src='images/transacoes.png' ></div>
						<div class='service_title'><h3>Entrada-Saída</h3></div>
						<div class='service_text'>
							<p>Monitore suas entradas e saídas de dinheiro do seu cartão.</p>
						</div>
						<!-- Botão para acionar modal -->
						<div class='service_button trans_200'><a href='#' name='register' data-toggle="modal" data-target="#modalExemplo">Registrar</a></div>
					</div>
				</div>
				<!-- Modal -->
					<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<?php
									if (!isset($_COOKIE['login'])){
										echo "
										<h5 class='modal-title' id='exampleModalLabel'>Faça login</h5>
										<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
											<span aria-hidden='true'>&times;</span>
										</button>
										</div>
										<div class='modal-body'>
											<p> É preciso estar logado </p>
										</div>
										<div class='modal-footer'>
											<button type='button' class='btn btn-secondary' data-dismiss='modal'>Voltar</button>
										</div> ";
									} else {
									?>
									<h5 class="modal-title" id="exampleModalLabel">Fazer Registro</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form id='message_form' class='message_form' action='retornaForm.php' enctype='multipart/form-data' method='POST'>
										<label>Data</label></br>
										<input type='date' class='message_input' name='data' placeholder='' /></br>
										<label>Nome do registro</label></br>
										<input type='text' class='message_input' name='nome' placeholder='Nome Registro' /></br>
										<label>Tipo do Registro</label></br>
										<select name='tipoRegistro' class='form-control' >
											<option selected disabled>Selecione o Tipo</option>
											<option value='1'> Entrada</option>
											<option value='0'> Saída </option>
										</select>
										<br>
										<label>Qual cartão</label></br>
										<select name='idCartao' class='form-control'>
											<option selected disabled>Selecione como vai pagar</option>
											<option value="0">A vista</option>
											<?php
											require_once("lib/Controle/CartaoControle.class.php");
											$todos = new CartaoControle();
											foreach ($todos->consultaCartoes() as $key) {
												echo"<option value='{$key->getNumeroCartao()}'>{$key->getNomeBanco()}</option>";	
											}
											?>
										</select>
										<label>Valor</label></br>
										<input type='text' name='valor' class='message_input' placeholder='Valor'/></br>
										<input type='submit' name='form' value='Inserir' class='message_form_button'/>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
								</div>
									<?php
									}?>
							</div>
						</div>
					</div>
				<!--Fim Modal-->
				<div class='col-lg-4 col-md-6 service_col magic_fade_in'>
					<div class='service d-flex flex-column align-items-center justify-content-start text-center trans_200'>
						<div class='service_icon'><img class='png' src='images/historico.png'></div>
						<div class='service_title'><h3>Histórico</h3></div>
						<div class='service_text'>
							<p>Histórico com suas compras e avisos de vencimento.</p>
						</div>
						<div class='service_button trans_200'>
							<?php
									if (isset($_COOKIE['login'])){
										echo"<a href='historico.php' id='historico'>Ver mais</a>";
									}else{
										echo"<a href='#' id='historico'>Ver mais</a>";
									};
							?>
						</div>
					</div>
				</div>
				<div class='col-lg-4 col-md-6 service_col magic_fade_in'>
					<div class='service d-flex flex-column align-items-center justify-content-start text-center trans_200'>
						<div class='service_icon'><img class='png' src='images/orcamento.png' alt='https://www.flaticon.com/authors/freepik'></div>
						<div class='service_title'><h3>Resultado do mês</h3></div>
						<div class='service_text'>
							<p>Mensalmente você receberá uma informação de quanto deve ou sobra.</p>
						</div>
						<div class='service_button trans_200'><a href='#'  data-toggle="modal" data-target="#modalExemplo2">Ver mais</a></div>
					</div>
				</div>
				<!-- Modal -->
					<div class="modal fade" id="modalExemplo2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Fazer Registro</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<?php
									if (!isset($_COOKIE['login'])) {
										echo " <p> Você precisa estar logado";
									} 
									?>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				<!--Fim Modal-->	
			</div>
		</div>
	</div>
	
	
	<div class='support'>
		<div class='background_image support_background'></div>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-6'>
						<div class='support_content magic_fade_in'>
							<div class='support_title'><span>24/7</span>Atedimento online</div>
							<div class='support_text'>
								<p>Se você, nosso cliente, não se sentir a vontade ou não gostar de um gerenciamento assim, poderá ter acessoa a um atendimento em tempo real pelo o funcionário responsável pelo seu gerenciamento financeiro, de forma que a ligação será gravada para caso acontecer algum problema,você tê-la guardada.</p>
							</div>
							<div class='support_price'>Por apenas <span>R$99.99</span> mensais</div>
							<div class='button trans_200'><a href='#'>Comece agora</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>