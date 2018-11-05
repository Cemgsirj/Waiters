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
    <p>Bem vido ao WaitersApp <?=$fname;?>,</p>
    <p>Obrigado pelo seu cadastro em nosso site. Agora você vai poder pedir Garçons para os seus eventos sem se preocupar com nada.</p>
    <p><a href="<?=$results->verify_url?>users/verify.php?email=<?=$email;?>&vericode=<?=$vericode;?>" class="nounderline">Verificar o seu e-mail</a></p>
    <p>Assim que concluir esta verificação de segurança, poderá logar em nosso sistema!</p>
    <p>Até Breve!</p>
  </body>
</html>
