<?php
$db = DB::getInstance();
$query = $db->query("SELECT * FROM email");
$results = $query->first();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Hello <?=$fname;?>,</p>
    <p>O administrador do site <?=$sitename?> criou a sua conta. <?php if($force_pr == 0) {?>Por favor <a href="<?=$results->verify_url?>users/login.php" class="nounderline">clique aqui</a> para logar.<?php } ?></p>
    <p><label>Usuário:</label> <?=$username?></p>
    <p><label>Senha:</label> <?php if($force_pr == 1) {?><a href="<?php echo $results->verify_url."users/forgot_password_reset.php?email=".$email."&vericode=$vericode&reset=1"; ?>" class="nounderline">Definir senha</a><?php } else { ?><?=$password?><?php } ?></p>
    <p><?php if($force_pr == 1) {?>Você deve definir sua senha pelo link acima.<?php } else { ?>Vovê deve mudar a sua senha após logar.<?php } ?></p>
    <p>Até breve!</p>
  </body>
</html>
