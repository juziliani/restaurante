<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Código fonte formulario php"/>
    <meta name="keywords" content="formulario php, bootstrap, bootstrap validator"/>


    <title>Cadastro de Usuários</title>

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
        <h1>Formulário de Contato</h1>
        <br>
        <form class="form-horizontal" action="cadastrar_usuario.php" method="post" role="form" data-toggle="validator" enctype = "multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-3">Nome*:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira o seu nome" required>
                    <div class="help-block with-errors"></div>
                </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Email*:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Insira o seu nome" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-3">Usuario*:</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Insira a senha" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Senha*:</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Insira a senha" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            
            <div class="form-group">
                    <label class="control-label col-sm-3">Nivel*:</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="categoria" id="categoria" required>
                            <option value="0" selected="selected" disabled="disabled">Selecione o cargo</option>
                            <option value="1">Gerente</option>
                            <option value="2">Funcionario</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Código fonte formulario php"/>
    <meta name="keywords" content="formulario php, bootstrap, bootstrap validator"/>


    <title>Cadastro de Usuários</title>

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
        <h1>Formulário de Contato</h1>
        <br>
        <form class="form-horizontal" action="cadastrar_usuario.php" method="post" role="form" data-toggle="validator" enctype = "multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-3">Nome*:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira o seu nome" required>
                    <div class="help-block with-errors"></div>
                </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Email*:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Insira o seu nome" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-3">Usuario*:</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Insira a senha" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Senha*:</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Insira a senha" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            
            <div class="form-group">
                    <label class="control-label col-sm-3">Nivel*:</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="categoria" id="categoria" required>
                            <option value="0" selected="selected" disabled="disabled">Selecione o cargo</option>
                            <option value="1">Gerente</option>
                            <option value="2">Funcionario</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
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
