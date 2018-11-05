<?php
/*
UserSpice 4
An Open Source PHP User Management System
by the UserSpice Team at http://UserSpice.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<?php
require_once 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/header.php';
require_once $abs_us_root.$us_url_root.'users/includes/navigation.php';
?>
<?php if (!securePage($_SERVER['PHP_SELF'])){die();} ?>
<?php
                if (!empty($_POST)){
                  $to = 'noreply@waitersapp.com.br';
                  $cc = $_POST['contatoemail'];
                  $nome = $_POST['contatonome'];
                  $subject = 'Contato_de_'.$_POST['contatonome'];
                  $body = $_POST['contatonome'].' '.$_POST['contatofone'].' '.$_POST['contatomensagem'];
                  $mail_result=email($to,$cc,$nome,$subject,$body);

                    if($mail_result){
                        echo '<div class="alert alert-success" role="alert">E-mail enviado com sucesso</div><br/>';
                    }else{
                        echo '<div class="alert alert-danger" role="alert">Erro no envio</div><br/>';
                    }
                }
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<!-- Page Heading -->
		<div class="row">
			<div class="col-sm-12">
				<!-- Content goes here -->
				<section id="contact">
				    <div class="container">
				        <div class="row">
				            <div class="col-lg-12 text-center" img>
				                <h2 class="section-heading text-uppercase">Fale Conosco!</h2>
				                <h3 class="section-subheading text-muted">Caso tenha alguma problema, dúvida ou sugestão fique a vontade e mande sua mensagem.</h3>
				            </div>
				        </div>
				        <div class="row">
				            <div class="col-lg-12">
				                <form id="contactForm" name="sentMessage" method="post" action="contato.php">
				                    <div class="row">
				                        <div class="col-md-12">
				                            <div class="form-group">
				                                <input class="form-control" type="text" name="contatonome"  id="tfnome" maxlength="60" placeholder="Seu nome... *" required data-validation-required-message="Por favor digite o seu nome.">
				                                <p class="help-block text-danger"></p>
				                            </div>
				                            <div class="form-group">
				                                <input class="form-control" type="text" name="contatoemail"  id="tfemail" maxlength="60" placeholder="Seu e-mail... *" required data-validation-required-message="Por favor digite o seu e-mail.">
				                                <p class="help-block text-danger"></p>
				                            </div>
				                            <div class="form-group">
				                                <input class="form-control" name="tfphone" id="contatofone" maxlenght="11" type="tel" placeholder="Seu telefone... *" required data-validation-required-message="Por favor digite o seu telefone.">
				                                <p class="help-block text-danger"></p>
				                            </div>
				                            <div class="form-group">
				                                <textarea rows="6" cols="60" 	class="form-control" name="contatomensagem" id="message" placeholder="Sua Mensagem... *" required data-validation-required-message="Por favor digite a sua mensagem."></textarea>
				                                <p class="help-block text-danger"></p>
				                            </div>
				                        </div>
				                        <div class="clearfix"></div>
				                        <div class="col-lg-12 text-center">
				                            <div id="success"></div>
				                            <input id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit"></input>
				                        </div>
				                    </div>
				                </form>
				            </div>
				        </div>
				    </div>
				</section>

				<!-- Content Ends Here -->
			</div> <!-- /.col -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</div> <!-- /.wrapper -->


<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<!-- Place any per-page javascript here -->

<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
