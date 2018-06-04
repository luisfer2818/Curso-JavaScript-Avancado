<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$mensagem = $_POST['mensagem'];
		
        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, $email); //de email
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "suporte@condominiodedicado.com.br"); //para tal email
        $content = new SendGrid\Content("text/html", "Olá Luis Fernando, <br><br>Nova mensagem de contato<br><br>Nome: $nome<br>Email: $email <br>Mensagem: $mensagem");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
            header("Location: index.php");
            echo "Mensagem enviada com sucesso";
        
        ?>

        <input type="button" value="Voltar" onClick="history.go(-1)">

    <script>

		$("#btn-enviar").click(function(){
			toastr.success("Mensagem envidada com Sucesso!");
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
	});
		$("#atualizar").click(function(){
			toastr.error("Texto apagado");
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
});
	</script>


    </body>
</html>
