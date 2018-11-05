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
    <p>Você tem uma nova mensagem de <?=$sendfname;?>!</p>
        <p><a href="<?=$results->verify_url?>users/message.php?id=<?=$msg_thread?>" class="nounderline">Clique aqui</a> para visualizar.</p>
        <hr />
    <?=html_entity_decode($body)?>
  </body>
</html>
