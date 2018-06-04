<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
        body {         
            background-image: url(img/img-4.jpg);
            background-position: center top;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        
        body>.grid {
            height: 100%;
        }
        
        .image {
            margin-top: -100px;
        }
        
        .column {
            max-width: 450px;
        }
        .div-div{
            padding: 4px 0px;
            margin-bottom: 15px;
            background: #f8f8f9;
            border-radius: 5px;
            text-shadow: 1px 1px 1px #a5a5a5;
        }
    </style>
    <script>
        $(document)
            .ready(function() {
                $('.ui.form')
                    .form({
                        fields: {
                            email: {
                                identifier: 'email',
                                rules: [{
                                    type: 'empty',
                                    prompt: 'E-mail invalido'
                                }, {
                                    type: 'email',
                                    prompt: 'Entre com um e-mail válido'
                                }]
                            },
                            password: {
                                identifier: 'password',
                                rules: [{
                                    type: 'empty',
                                    prompt: 'Senha invalida'
                                }, {
                                    type: 'length[2]',
                                    prompt: 'Entre com senha de 3 caracteres'
                                }]
                            }
                        }
                    });
            });
    </script>
</head>

<body>

    <div class="ui middle aligned center aligned grid">
        <div class="column">
        <div class="div-div">          
            <h2 class="ui teal image header">
                <img src="img/logo.png" class="image">
                <div class="content">
                    Login Shopping Control
                </div>
            </h2>  
            </div>        
            <form class="ui large form" method="POST" action="valida.php">
                <div class="ui stacked segment">
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" name="usuario" placeholder="E-mail ">
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" name="senha" placeholder="Senha">
                        </div>
                    </div>                
                   <input type="submit" name="btnLogin" class="btn btn-primary btn-lg btn-block" value="Entrar">
                </div>

                <div class="ui error message"></div>

            </form>

            <div class="ui message">
                Não é registrado? <a href="#">Cadastro</a>
            </div>
            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
        </div>
    </div>
    
</body>

</html>