 <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Código fonte formulario php"/>
        <meta name="keywords" content="formulario php, bootstrap, bootstrap validator"/>
        <meta name="author" content=""/>

        <title>Cadastro de Pratos</title>

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
        <style>
            main, footer, .mensagem-alerta{
                text-align: center; 
            }
            form{
                max-width: 800px;
                padding-top: 30px;
                display: block;
                margin: 0 auto;
            }
            .mensagem-alerta{
                max-width: 500px;
                margin: 20px auto;
            }
        </style>

    </head>
    <body>

        <main class="container">
            <h1>Insira as informações para reserva</h1>
            <br>
            <form class="form-horizontal" action="cadastrar-reserva.php" method="POST" role="form" data-toggle="">
                <div class="form-group">
                    <label class="control-label col-sm-3">Nome:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Telefone:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="" >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Email:</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="email" id="email" placeholder="" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Mensagem:</label>
                    <div class="col-sm-9">
                        <textarea type ="" class="form-control" name="mensagem" id="mensagem" placeholder= "mensagem" required></textarea>
                        <div class= "help block with-errors"></div>
                    </div>    
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Data Reserva:</label>
                    <div class="col-sm-9">
                        <input type="datetime-local" class="form-control" name="data" id="data" placeholder="Selecione a data da rerserva" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Número pessoas:</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="npessoas" required id="npessoas" placeholder ="">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 text-right">
                        <input class = "btn btn-primary" id="submit" name="btnSend" type="submit" value="ENVIAR">
                        <a name="formulario"></a>
                        <div class="mensagem-alerta"></div>
                    </div>
                </div>
            </form>
        </main>
        <footer>
            <hr>
            <div class="copyright">Desenvolvido por
                <a href="" target="_blank">SENAC</a>
            </div>  
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

    </body>
</html>
