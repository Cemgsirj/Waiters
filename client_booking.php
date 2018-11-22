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
    $data1 = $_POST['dtp_input1'];
    $data2 = $_POST['dtp_input2'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $num = $POST['num'];
    $comp = $_POST['comp'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $qtdgarcons = $_POST['qtdgarcons'];

    $evento_result=cadastra_evento($data1,$data2,$cep,$rua,$num,$comp,$bairro,$cidade,$uf,$qtdgarcons);

    if($evento_result){
        echo '<div class="alert alert-success" role="alert">Evento agendado com sucesso</div><br/>';
    }else{
        echo '<div class="alert alert-danger" role="alert">Erro no cadastro, contate-nos pelo formulário de contato informando este erro. Obrigado!</div><br/>';
    }
}
?>
<div class="container">
    <section id="cadastra_evento">
        <div class="row">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Novo Evento!</h2>
                <h3 class="section-subheading text-muted">É fácil pedir os Garçons para a sua festa, confira.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                <form id="endereco_evento" name="endereco_evento" method="post" action="cliente_booking.php">
                    <div class="container-fluid">
                        <div class="control-group">
                            <div class='col-6 col-offset-3'>
                                <div class="form-group">
                                    <div class='input-group date' id='dtp_input1'>
                                        <input type='text' class="form-control" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class='col-6 col-offset-3'>
                                <div class="form-group">
                                    <div class='input-group date' id='dtp_input2'>
                                        <input type='text' class="form-control" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>



                        </div>

                        <div class="form-group pull-left col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <input class="form-control" name="cep" type="text" id="cep" value="" size="10" maxlength="9" placeholder="Cep..." required data-validation-required-message="Informe o cep do evento" onblur="pesquisacep(this.value);" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group pull-right col-xs-12 col-sm-9 col-md-9 col-lg-9">
                            <input class="form-control" type="text" name="rua"  id="rua" maxlength="60" placeholder="Logradouro..." required data-validation-required-message="Informe o logradouro"/>
                            <p class="help-block text-danger"></p>
                        </div>


                        <div class="form-group pull-left col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <input class="form-control" type="text" name="num"  id="num" maxlength="10" placeholder="Número..." required data-validation-required-message="Informe o número"/>
                            <p class="help-block text-danger"></p>
                        </div>
                            <div class="form-group pull-right col-xs-12 col-sm-9 col-md-9 col-lg-9">
                            <input class="form-control" type="text" name="comp"  id="comp" maxlength="20" placeholder="Complemento..." required data-validation-required-message="Informe o complemento"/>
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="container-fluid">
                        <div class="form-group pull-left col-xs-12 col-sm-5 col-md-5 col-lg-5">
                            <input class="form-control" type="text" name="bairro"  id="bairro" maxlength="20" placeholder="Bairro..." required data-validation-required-message="Informe o bairro"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group pull-left col-xs-12 col-sm-5 col-md-5 col-lg-5">
                            <input class="form-control" type="text" name="cidade"  id="cidade" maxlength="20" placeholder="Cidade..." required data-validation-required-message="Informe a cidade"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group pull-left col-xs-12 col-sm-2 col-md-2 col-lg-2">
                            <input class="form-control" type="text" name="uf"  id="uf" maxlength="2" placeholder="Estado..." required data-validation-required-message=""/>
                            <p class="help-block text-danger"></p>
                        </div>
                        </div>


                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="qtdgarcons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Garçons
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">+5</a></li>
                                <!--li role="separator" class="divider"></li>
                                <li><a href="#"></a></li-->
                            </ul>
                        </div>
                    </div>
                <div class="clearfix"></div>
                <!-- Button Submit -->
                <div class="col-lg-12 text-center">
                    <div id="cadastra"></div>
                    <input id="cadastra_endereco" class="btn btn-primary btn-xl text-uppercase" data-toggle="modal" href="#confirma_evento" value="Prosseguir"></input>
                </div>

                </form>
            </div>
        </div>

    </section>
</div>

<!-- Modal 1 -->
<div class="portfolio-modal modal fade col-lg-6 col-md-6 col-sm-8" id="confirma_evento" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body" align="center">
                            <!-- Project Details Go Here -->
                            <h2 class="text-uppercase">Confirmação de agendamento</h2>
                            <p class="item-intro text-muted">Leia com atenção e confirme o seu evento.</p>
                            <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                            <p>Aqui terão as informaçõe sobre o agendamento criado para o cliente confirmar antes de agendar o mesmo! Ainda temos que ver se o agendamento poderá ou não ser realizado pelo cliente.
                            </p>
                            <ul class="list-inline">
                                <li>Data início: <?php echo document.getElementById('dtp_input1').value;?></li><br/>
                                <!--
                                <li>Endereço: <?php document.getElementById('rua').value.', '.document.getElementById('num').value;?> </li><br/>
                                <li>Quantidade de Garçons: <?php document.getElementById('qtdgarcons').value;?></li>
                                -->
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="submit">
                                Confirmar!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<script language="JavaScript" src="users/js/viacep.js"></script>

<!-- DATEPICKER -->
<script type="text/javascript" src="users/js/jquery-1.8.3.min.js" charset="UTF-8"></script>
<!--script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script-->
<script type="text/javascript" src="users/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="users/js/locales/bootstrap-datetimepicker.pt-BR.js" charset="UTF-8"></script>

<!--script type="text/javascript">
    $('#datetimepicker').datetimepicker('setStartDate', '2018-02-05 12:00');
    $('.form_datetime').datetimepicker({
        //language:  'pt-BR',
        weekStart: 1,
        todayBtn:  0,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 0
    });
</script-->

<script type="text/javascript">
    $(function () {
        $('#dtp_input1').datetimepicker();
        $('#dtp_input2').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#dtp_input1").on("dp.change", function (e) {
            $('#dtp_input2').data("DateTimePicker").minDate(e.date);
        });
        $("#dtp_input2").on("dp.change", function (e) {
            $('#ddtp_input1').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>

<!-- END DATEPICKER-->

<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
