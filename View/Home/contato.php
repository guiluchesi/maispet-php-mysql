<?php
    $caminhoUrl = $_SERVER['DOCUMENT_ROOT']."/maispet";

    require_once($caminhoUrl."/View/includes/header.php");
?>
			<section class="page-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h1>Contatos</h1>
						</div>
						<div class="col-md-6">
							<ul class="breadcrumb">
								<li><a href="?pagina=index">Inicial</a></li>
								<li class="active">Contatos</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Heading / End -->

			<!-- Page Content -->
			<section class="page-content">

				<div class="container">

					<!-- Google Map -->
					<div class="googlemap-wrapper">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.928168375079!2d-47.156058251347254!3d-22.768046885009273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8955faa36b1af%3A0x75a6d9274688b97!2sPRONTOPET!5e0!3m2!1spt-BR!2sbr!4v1509107634739" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<!-- Google Map / End -->
					
					<div class="row">
						<div class="col-md-9">
							<h2>Formulário de contato</h2>
							<form action="action.php" id="contact-form">

								<div class="alert alert-success hidden" id="contact-alert-success">
									<strong>Sucesso!</strong> Agradecemos o contato. Responderemos assim que possível!
								</div>
								<div class="alert alert-danger hidden" id="contact-alert-error">
									<strong>Ops!</strong> Algo deu errado...<br>
									Entre em contato conosco através do telefone ao lado
								</div>

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Nome <span class="required">*</span></label>
											<input type="text"
												value=""
												placeholder="Informe seu nome completo."
												class="form-control"
												name="name" id="name">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>E-mail <span class="required">*</span></label>
											<input type="email" 
												value=""
												placeholder="Informe seu email."
												data-msg-email="Email Invalido."
												class="form-control"
												name="email"
												id="email">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Telefone/Celular <span class="required">*</span></label>
											<input type="text" 
												value=""
												placeholder="Informe seu telefone/celular."
												data-msg-email="Email Invalido."
												class="form-control"
												name="phone"
												id="phone">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Tipo de Pet</label>
											<input type="text" 
												value=""
												placeholder="Escreva aqui o tipo de Pet."
												class="form-control"
												name="pet"
												id="pet">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Assunto</label>
											<input type="text" 
												value=""
												placeholder="Escreva aqui o assunto da sua mensagem."
												class="form-control"
												name="subject"
												id="subject">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Mensagem <span class="required">*</span></label>
											<textarea
												placeholder="Escreva aqui sua mensagem."
												rows="10"
												class="form-control"
												name="message"
												id="message"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Enviar mensagem" class="btn btn-primary" data-loading-text="Carregando...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-3">
							<hr class="visible-sm visible-xs lg">
							<!-- Widget :: Contacts Info -->
							<div class="contacts-widget widget widget__sidebar">
								<h3 class="widget-title">Fale conosco</h3>
								<div class="widget-content">
									<ul class="contacts-info-list">
										<li>
											<i class="fa fa-map-marker"></i>
											<div class="info-item">
												Av. Presidente Getúlio Vargas, 324. Paulínia - SP
											</div>
										</li>
										<li>
											<i class="fa fa-phone"></i>
											<div class="info-item">
												(19) 3833-3680<br>
									
											</div>
										</li>
										<li>
											<i class="fa fa-envelope"></i>
											<span class="info-item">
												<a href="mailto:atendimento@maispet.com">atendimento@maispet.com</a>
											</span>
										</li>
										<li>
											<i class="fa fa-skype"></i>
											<div class="info-item">
												<a href="#">Carlos_Junior</a><br>
												<a href="#">Ajude_carlosjunior</a>
											</div>
										</li>
										<li>
											<i class="fa fa-clock-o"></i>
											<div class="info-item">
												24h
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Widget :: Contacts Info -->
						</div>
					</div>

				</div>

			</section>
<?php
    require_once($caminhoUrl."/View/includes/footer-Registers.php");
?>
	