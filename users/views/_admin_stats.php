<h2>Estatísticas</h2>
<div class="row "> <!-- rows for Info Panels -->
    <div class="col-xs-12 col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Todos os usuários</strong> <span class="small">(Que tenham logado)</span></div>
      <div class="panel-body text-center">
        <div class="row">
          <div class="col-xs-3 "><h3><?=$hourCount?></h3><p>Por hora</p></div>
          <div class="col-xs-3"><h3><?=$dayCount?></h3><p>Por dia</p></div>
          <div class="col-xs-3 "><h3><?=$weekCount?></h3><p>Por semana</p></div>
          <div class="col-xs-3 "><h3><?=$monthCount?></h3><p>Por mês</p></div>
        </div>
      </div>
    </div><!--/panel-->


    <div class="panel panel-default">
      <div class="panel-heading"><strong>Visitantes</strong> <span class="small">(Logados ou não)</span></div>
      <div class="panel-body">
        <?php  if($settings->track_guest == 1){ ?>
          <?="Nos últimos 30 minutos tivemos  ".count_users()." visitante(s)<br>";?>
        <?php }else{ ?>
          Tracking dos visitantes está desligado. Ligue para ver opções avançadas de tracking dos visitantes.
        <?php } ?>
      </div>
    </div><!--/panel-->

  </div> <!-- /col -->

<div class="col-xs-12 col-md-6">
  <div class="panel panel-default">
    <div class="panel-heading"><strong>Usuários logados</strong> <span class="small">(Últimas 24hs)</span></div>
    <div class="panel-body">
      <div class="uvistable table-responsive">
        <table class="table">
          <?php if($settings->track_guest == 1){ ?>
            <thead><tr><th>Usuário</th><th>IP</th><th>Último login</th></tr></thead>
            <tbody>

              <?php foreach($recentUsers as $v1){
                $user_id=$v1->user_id;
                $username=echousername($v1->user_id);
                $timestamp=date("Y-m-d H:i:s",$v1->timestamp);
                $ip=$v1->ip;

                if ($user_id==0){
                  $username="guest";
                }

                if ($user_id==0){?>
                  <tr><td><?=$username?></td><td><?=$ip?></td><td><?=$timestamp?></td></tr>
                <?php }else{ ?>
                  <tr><td><a href="admin_user.php?id=<?=$user_id?>"><?=$username?></a></td><td><?=$ip?></td><td><?=echodatetime($timestamp)?></td></tr>
                <?php } ?>

              <?php } ?>

            </tbody>
          <?php }else{echo 'Guest tracking off. Turn "Track Guests" on below for advanced tracking statistics.';} ?>
        </table>
      </div>
    </div>
  </div><!--/panel-->

  <div class="panel panel-default">
    <div class="panel-heading"><strong>Eventos de segurança</strong><span align="right" class="small"><a href="tomfoolery.php"> (Ver Logs)</a></span></div>
    <div class="panel-body" align="center">
      Houveram<br>
      <h2><?=$tomC?></h2>
      eventos trigados
    </div>
  </div><!--/panel-->
</div>
</div>
