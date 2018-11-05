<?php
// This file often teams up with during_user_creation.php although you can use that file without this one.
// However, if you add additional form fields here, you should process them there.
// We will do an example. Let's say you want to make use of the unused account_id column in the users table.

// Uncomment out the code below and it will automagically be inserted into your join form.


?>
<label for="confirm">Telefone*</label>
<input type="text" class="form-control" min="11" max="11" name="fone" id="fone" placeholder="Digite o telefone com DDD. Ex: 21987654321" value="<?php if (!$form_valid && !empty($_POST)){ echo $fone;} ?>" required>

<label for="confirm">CPF*</label>
<input type="text" class="form-control" min="11" max="11" name="cpf" id="cpf" placeholder="Digite o CPF sem pontos ou traços." value="<?php if (!$form_valid && !empty($_POST)){ echo $cpf;} ?>" required>

<label for="confirm">Identidade*</label>
<input type="text" class="form-control" min="11" max="11" name="rg" id="rg" placeholder="Digite a identidade." value="<?php if (!$form_valid && !empty($_POST)){ echo $rg;} ?>" required>

<label for="confirm">Nome da Mãe*</label>
<input type="text" class="form-control" min="11" max="11" name="nomemae" id="nomemae" placeholder="Digite o nome de sua mãe." value="<?php if (!$form_valid && !empty($_POST)){ echo $nomemae;} ?>" required>


<label class="control-label">Nascimento*</label>
<input type="date" class="form-control" name="nascimento" id="nascimento" value="" required>



<?php
//Now, go into the during_user_creation script to see how to process it.
 ?>