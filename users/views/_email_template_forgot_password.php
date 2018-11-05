<?php
$db = DB::getInstance();
$query = $db->query("SELECT * FROM email");
$results = $query->first();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <p>Olá <?=$fname;?>,</p>
    <p>Você solicitou o reset de sua senha no site WaitersApp.com.br. Caso não reconheça está solicitação, favor desconsiderar.</p>
    <p>Caso tenha sido pedido, clique no link abaixo para trocar a sua senha.</p>
    <p><a href="<?php echo $results->verify_url."users/forgot_password_reset.php?email=".$email."&vericode=$vericode&reset=1"; ?>" class="nounderline">Reset de senha</a></p>
    <p>Sincerely,</p>
    <p>-The Team-</p>
  </body>
</html>
