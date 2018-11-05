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
    <p>Olá <?=$fname;?>,</p>
    <p>O administrador do <?=$sitename?> mudou sua senha.</p>
    <p><label>Usuário:</label> <?=$username?></p>
    <p><label>Senha:</label> <a href="<?php echo $results->verify_url."users/forgot_password_reset.php?email=".$email."&vericode=$vericode&reset=1"; ?>" class="nounderline">Definir senha</a></p>
    <p>YVocê deve definir sua senha pelo link acima..</p>
    <p>Até breve!</p>
  </body>
</html>
