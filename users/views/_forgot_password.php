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
<div class="row">
<div class="col-xs-12">
<h1>Reset de senha.</h1>
    <h3>Caso não esteja lembrando de sua senha siga os passos abaixo:</h3>
<ol>
	<li>Digite o seu e-mail e clique em Reset.</li>
	<li>Verifique o seu e-mail.</li>
	<li>Sigua as instruções enviadas para resetar sua senha.</li>
</ol>
<?php if(!$errors=='') {?><div class="alert alert-danger"><?=display_errors($errors);?></div><?php } ?>
<form action="forgot_password.php" method="post" class="form ">
	
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" name="email" placeholder="Endereço de e-mail..." class="form-control" autofocus>
	</div>

	<input type="hidden" name="csrf" value="<?=Token::generate();?>">
	<p><input type="submit" name="forgotten_password" value="Enviar" class="btn btn-success"></p>
</form>

</div><!-- /.col -->
</div><!-- /.row -->