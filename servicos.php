<div id='servi'>
	<div id='cont'>
		<div id='index'>
			<div class='super_container'>
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
				<!-- BEGIN # MODAL LOGIN -->
				<div class='modal fade' id='login-modal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' style='display: none;'>
    	<div class='modal-dialog'>
			<div class='modal-content'>
				<div class='modal-header' align='center'>
					<img class='img-circle' id='img_logo' src='http://bootsnipp.com/img/logo.jpg'>
					<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
						<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
					</button>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id='div-forms'>
                
                    <!-- Begin # Login Form -->
                    <form id='login-form'>
		                <div class='modal-body'>
				    		<div id='div-login-msg'>
                                <div id='icon-login-msg' class='glyphicon glyphicon-chevron-right'></div>
                                <span id='text-login-msg'>Type your username and password.</span>
                            </div>
				    		<input id='login_username' class='form-control' type='text' placeholder='Username (type ERROR for error effect)' required>
				    		<input id='login_password' class='form-control' type='password' placeholder='Password' required>
                            <div class='checkbox'>
                                <label>
                                    <input type='checkbox'> Remember me
                                </label>
                            </div>
        		    	</div>
				        <div class='modal-footer'>
                            <div>
                                <button type='submit' class='btn btn-primary btn-lg btn-block'>Login</button>
                            </div>
				    	    <div>
                                <button id='login_lost_btn' type='button' class='btn btn-link'>Lost Password?</button>
                                <button id='login_register_btn' type='button' class='btn btn-link'>Register</button>
                            </div>
				        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id='lost-form' style='display:none;'>
    	    		    <div class='modal-body'>
		    				<div id='div-lost-msg'>
                                <div id='icon-lost-msg' class='glyphicon glyphicon-chevron-right'></div>
                                <span id='text-lost-msg'>Type your e-mail.</span>
                            </div>
		    				<input id='lost_email' class='form-control' type='text' placeholder='E-Mail (type ERROR for error effect)' required>
            			</div>
		    		    <div class='modal-footer'>
                            <div>
                                <button type='submit' class='btn btn-primary btn-lg btn-block'>Send</button>
                            </div>
                            <div>
                                <button id='lost_login_btn' type='button' class='btn btn-link'>Log In</button>
                                <button id='lost_register_btn' type='button' class='btn btn-link'>Register</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id='register-form' style='display:none;'>
            		    <div class='modal-body'>
		    				<div id='div-register-msg'>
                                <div id='icon-register-msg' class='glyphicon glyphicon-chevron-right'></div>
                                <span id='text-register-msg'>Register an account.</span>
                            </div>
		    				<input id='register_username' class='form-control' type='text' placeholder='Username (type ERROR for error effect)' required>
                            <input id='register_email' class='form-control' type='text' placeholder='E-Mail' required>
                            <input id='register_password' class='form-control' type='password' placeholder='Password' required>
            			</div>
		    		    <div class='modal-footer'>
                            <div>
                                <button type='submit' class='btn btn-primary btn-lg btn-block'>Register</button>
                            </div>
                            <div>
                                <button id='register_login_btn' type='button' class='btn btn-link'>Log In</button>
                                <button id='register_lost_btn' type='button' class='btn btn-link'>Lost Password?</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
                <!-- End # DIV Form -->
                
			</div>
		</div>
    </div>
<!-- END # MODAL LOGIN -->
					<div class='services'>
						<div class='container'>
							<div class='row'>
								<div class='col'>
									<div class='section_title text-center magic_fade_in'><h2>Serviços disponíveis</h2></div>
								</div>
							</div>
							<div class='row services_row'>
								<div class='col-lg-4 col-md-6 service_col magic_fade_in'>
									<div class='service d-flex flex-column align-items-center justify-content-start text-center trans_200'>
										<div class='service_icon'><img class='png' src='images/transacoes.png' ></div>
										<div class='service_title'><h3>Transações</h3></div>
										<div class='service_text'>
											<p>Todos os eventos que você efetuar com alguns dos seus cartões.</p>
										</div>
										<div class='service_button trans_200'><a href='#'>Ver mais</a></div>
									</div>
								</div>
								<div class='col-lg-4 col-md-6 service_col magic_fade_in'>
									<div class='service d-flex flex-column align-items-center justify-content-start text-center trans_200'>
										<div class='service_icon'><img class='png' src='images/historico.png'></div>
										<div class='service_title'><h3>Histórico</h3></div>
										<div class='service_text'>
											<p>Histórico com as transações,valores,dias e etc.</p>
										</div>
										<div class='service_button trans_200'><a href='#'>Ver mais</a></div>
									</div>
								</div>
								<div class='col-lg-4 col-md-6 service_col magic_fade_in'>
									<div class='service d-flex flex-column align-items-center justify-content-start text-center trans_200'>
										<div class='service_icon'><img class='png' src='images/orcamento.png' alt='https://www.flaticon.com/authors/freepik'></div>
										<div class='service_title'><h3>Orçamento</h3></div>
										<div class='service_text'>
											<p>Mensalmente você receberá uma informação de quanto deve ou sobra.</p>
										</div>
										<div class='service_button trans_200'><a href='#'>Ver mais</a></div>
									</div>
								</div>	
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
		</div>
	</div>
</div>