<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Formulário Teste</title>
</head>

<body>


    <div class="row justify-content-md-center">
        <div class="container col-md-6">
            <form enctype="multipart/form-data" action="script.php" method="POST" id="formEnviarArquivo">
                <div class="alert alert-primary text-center mt-5 text-uppercase" role="alert">
                    Validação de Formulários
                </div>

                <?php
                include "servicos/msgSession.php";

                $mensagemDeSucesso = obterMensagemSucesso();
                if(!empty($mensagemDeSucesso))
                {
                    echo $mensagemDeSucesso;
                }

                $mensagemDeErro = obterMensagemErro();
                if(!empty($mensagemDeErro))
                {
                    echo $mensagemDeErro;
                }
                ?>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="input-group-text">Nome</button>
                    </div>
                    <input name="nome" type="text" class="form-control" placeholder="Insira seu Nome">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="input-group-text">Idade</button>
                    </div>
                    <input name="idade" type="text" class="form-control" placeholder="Insira seu Nome">
                </div>

                <button class="submit btn btn-primary btn-block mt-3">Enviar</button>

            </form>
        </div>
    </div>

</body>

</html>