<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/examples.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="js/bioep.min.js"></script>
    <script type="text/javascript" src="js/bioep.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

</head>

<body>

<script type="text/javascript">
     bioEp.init({
                html: '<div id="bio_ep_content">' +
                        '<img src="img/bolsonaro.png" alt="Bolsonaro 2018"/>' +
                        '<span>Bolsonaro Presidente</span><br>' +
                        '<span>Vote Bolsonaro para Presidente!<br>' +
                        'E Ganhe um desconto de 30%</span>' +
                        '<span></span>' +
                        '<a href="https://www.bolsonaro.com.br" class="bio_btn">Vote no Mito</a>' +
                        '</div>',
                css: '#bio_ep {width: 400px; height: 300px; color: #fff; background-color: #1a344d; text-align: center;}' +
                        '#bio_ep_content {padding: 24px 0 0 0; font-family: "Titillium Web";}' +
                        '#bio_ep_content span:nth-child(2) {display: block; color: #fff; font-size: 32px; font-weight: 600;}' +
                        '#bio_ep_content span:nth-child(3) {display: block; font-size: 16px;}' +
                        '#bio_ep_content span:nth-child(4) {display: block; margin: -5px 0 0 0; font-size: 16px; font-weight: 600;}' +
                        '.bio_btn {display: inline-block; margin: 18px 0 0 0; padding: 7px; color: #fff; font-size: 14px; font-weight: 600; background-color: #70bb39; border: 1px solid #47ad0b; cursor: pointer; -webkit-appearance: none; -moz-appearance: none; border-radius: 0; text-decoration: none;}',
                fonts: ['//fonts.googleapis.com/css?family=Titillium+Web:300,400,600'],
                cookieExp: 0
            });
</script>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a id="navTitle" class="navbar-brand" href="index.php"></a>
            </div>          
          
        <ul class="nav navbar-nav navbar-right">
            <li><a href="sair.php"><span class="glyphicon glyphicon-log-in text-danger"></span> Sair</a></li>
        </ul>
        
             <ul class="navbar-nav navbar-right"> 

        </ul>

        <ul class="nav navbar-nav navbar-right">
            <p> <?php if (!empty($_SESSION['id'])) { echo "<br> Olá " . $_SESSION['nome'] . ", Seja Bem vindo! "; } ?> </p>
        </ul>
       
  </div>
    </nav>

    <div class="container">
        <div class="form-inline">
            <form action="processa.php" method="POST">
                <h3><span class="glyphicon glyphicon-home text-dark" aria-hidden="true"></span> Formulário | Shopping Control
               
                 <div class="pull-right">           
            <div data-tooltip="Enviar E-mail" data-position="top center">
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModalcad"> <span class="glyphicon glyphicon-envelope"></span> E-mail</button>
            </div>               
        </div>
            
			<!-- Inicio Modal -->
			<div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title text-center" id="myModalLabel">Enviar E-mail</h4>
						</div>
						<div class="modal-body">
							<form method="POST" action="processa.php" enctype="multipart/form-data">
								<div class="form-group">
									<label for="recipient-name" class="control-label">Nome:</label>
									<input name="nome" type="text" class="form-control" placeholder="Digite seu nome">
                                </div>
                                <hr>
                                <div class="form-group">
									<label for="recipient-email" class="control-label">E-mail:</label>
									<input name="email" type="text" class="form-control" placeholder="Digite seu e-mail" required="">
                                </div>
                                <hr>
								<div class="form-group">
									<label for="message-text" class="control-label">Mensagem:</label>
									<textarea name="mensagem" class="form-control" placeholder="Sua Mensagem..."></textarea>
                                </div>
                                <hr>
								<div class="modal-footer">
                                    <button type="submit" id="btn-enviar" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span> Enviar</button>
                                    <button type="reset" id="limpar" class="btn btn-danger"><span class="glyphicon glyphicon-off"></span> Limpar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		<!-- Fim Modal -->

        <div class="ui icon button" data-tooltip="Agenda" data-position="top left">
            <a href="evento.php"><span class="glyphicon glyphicon-calendar"></span> </a>
        </div>
                </h3>
            </form>

            <div class="ui basic modal">
                <div class="ui icon header">
                    <i class="angellist icon"></i> Ola, Seja Bem Vindo! Ao Shopping Control
                </div>
                
                <div class="actions">
                    <div class="ui green ok inverted button">
                        <i class="lock icon"></i> Aceitar e entrar no sistema
                    </div>
                    <!-- <div class="ui green ok inverted button">
                        <i class="checkmark icon"></i> Yes
                    </div> -->
                </div>
            </div>

        <br>
        <div class="form-group">
            <input type="text" class="form-control" id="desc" placeholder="Descrição">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="amount" placeholder="Quantidade">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="value" placeholder="Valor">
        </div>
        <span id="btnUpdate" style="display: none;">
            <span id="inputIDUpdate"></span>
        <button onclick="updateData();" class="btn btn-default"> <span class="glyphicon glyphicon-ok text-success" aria-hidden="true"></span> Salvar</button>
        <button onclick="resetForm();" class="btn btn-default"> <span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span> Cancelar </button>
        </span>
        <span id="btnAdd">
            <button onclick="addData();" class="btn btn-default"><span class="glyphicon glyphicon-plus text-info" aria-hidden="true"></span> Adicionar</button>
            <button onclick="resetForm();" class="btn btn-default"><span class="glyphicon glyphicon-refresh text-warning" aria-hidden="true"></span> Resetar</button>
            <button onclick="deleteList();" class="btn btn-default"><span class="glyphicon glyphicon-ban-circle text-danger" aria-hidden="true"></span> Deletar lista</button>
        </span>

        </div>

    <div id="errors" style="display: none;"></div>
    <br>
    <table id="listTable" class="table table-hover">

        </table>
    </div>

    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <h3 class="text-center text-danger">Total: <span id="totalValue">R$: 0,00</span></h3>
        </div>
    </nav>

    <script>

    $('.ui.basic.modal')
        .modal('show');

     $("#btn-enviar").click(function(){
		toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-center",
                "preventDuplicates": false,
                "showDuration": "300",
                "onclick": null,
                "hideDuration": "1000",
                "timeOut": "2000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
			toastr.success("Mensagem enviada com Sucesso!");
	    });
		$("#limpar").click(function(){
			toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-center",
                "preventDuplicates": false,
                "showDuration": "300",
                "onclick": null,
                "hideDuration": "1000",
                "timeOut": "1000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
			toastr.error("Texto apagado");
        });
    </script>

    <script src="js/config.js"></script>
    <script src="js/main.js"></script>
</body>

</html>