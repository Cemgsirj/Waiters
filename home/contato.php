<?php
require_once 'init.php';
require_once $abs_us_root.$us_url_root.'users/includes/header.php';
require_once $abs_us_root.$us_url_root.'users/includes/navigation.php';
?>

<?php if (!securePage($_SERVER['PHP_SELF'])){die();} ?>

<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<section id="contact">
				    <div class="container">
				        <div class="row">
				            <div class="col-lg-12 text-center">
				                <h2 class="section-heading text-uppercase">Fale Conosco!!</h2>
				                <h3 class="section-subheading text-muted">Caso tenha alguma dúvida ou sugestão fique a vontade.</h3>
				            </div>
				        </div>
				        <div class="row">
				            <div class="col-lg-12">
				                <form id="contactForm" name="sentMessage" method="post" action="envia.php">
				                    <div class="row">
				                        <div class="col-md-6">
				                            <div class="form-group">
				                                <input class="form-control" type="text" name="tfNome"  id="tfnome" maxlength="60" placeholder="Seu nome... *" required data-validation-required-message="Por favor digite o seu nome.">
				                                <p class="help-block text-danger"></p>
				                            </div>
				                            <div class="form-group">
				                                <input class="form-control" type="text" name="tfEmail"  id="tfemail" maxlength="60" placeholder="Seu e-mail... *" required data-validation-required-message="Por favor digite o seu e-mail.">
				                                <p class="help-block text-danger"></p>
				                            </div>
				                            <div class="form-group">
				                                <input class="form-control" name="tfphone" id="tfphone" maxlenght="11" type="tel" placeholder="Seu telefone... *" required data-validation-required-message="Por favor digite o seu telefone.">
				                                <p class="help-block text-danger"></p>
				                            </div>
				                        </div>
				                        <div class="col-md-6">
				                            <div class="form-group">
				                                <textarea class="form-control" name="message" id="message" placeholder="Sua Mensagem... *" required data-validation-required-message="Por favor digite a sua mensagem."></textarea>
				                                <p class="help-block text-danger"></p>
				                            </div>
				                        </div>
				                        <div class="clearfix"></div>
				                        <div class="col-lg-12 text-center">
				                            <div id="success"></div>
				                            <input id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar Mensagem</input>
				                        </div>
				                    </div>
				                </form>
				            </div>
				        </div>
				    </div>
				</section>
			</div> <!-- /.col -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</div> <!-- /.wrapper -->


<!-- footers -->
<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls 
?>

<!-- Place any per-page javascript here -->
<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html 
?>
