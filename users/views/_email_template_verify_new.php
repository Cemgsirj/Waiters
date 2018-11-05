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
    <p>Um pedido de troca de e-mail foi solicitado por você.</p>
    <p><a href="<?=$results->verify_url?>users/verify.php?new&email=<?=$email;?>&vericode=<?=$vericode;?>" class="nounderline">Verifique o seu e-mail</a></p>
  </body>
</html>
