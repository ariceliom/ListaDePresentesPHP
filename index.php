<?php
    require_once 'config.php';

    $c = new Controller();
    $c->index();

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Dev Sys Web - HTML5, PHP, Bootstrap Framework</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./bootstrap/css/styles.css">
    </head>
    <body>
        <div class="container">
            <header class="row clearfix">
                <img src="./bootstrap/images/logo.png" alt="" srcset="">
            </header>
            <nav class="row clearfix caixa">
                <ul class="nav nav-pills menu-estilo">
                    <li>
                        <a href="index.html">Início</a>
                    </li>
                    <li>
                        <a href="listas.html">Listas</a>
                    </li>
                    <li>
                        <a href="produtos.html">Produtos</a>
                    </li>
                </ul>
            </nav>
            <section class="row clearfix caixa">
                <section class="col-md-6">
                    <form action="" method="post" class="form-estilo">
                        <?php
                            if ($c->loginIndex)
                            echo `<h4 class="alert alert-warning" style="margin: 10px auto; text-align: center;">`.$c->loginIndex. `</h4>`
                        ?>
                        <hr>
                        <h2 class="titulo">
                            <strong>Efetue o login</strong>
                        </h2>
                        <hr>
                        <p><input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email" required></p>
                        <p><input type="password" name="password" id="password" class="form-control" placeholder="Digite sua senha" required></p>
                        <label for="lembrete" class="checkbox">
                            <input type="radio" name="lembrete" > Lembrar senha
                        </label>
                        <p><button type="submit" name="login" class="btn btn-lg btn-info btn-block">Entrar</button></p>
                    </form>
                </section>
                <section class="col-md-6">
                    <form action="" method="post" class="form-estilo">
                        <?php
                            if ($c->cadastroIndex)
                            echo `<h4 class="alert alert-warning" style="margin: 10px auto; text-align: center">` . $c->cadastroIndex . `</h4>;`
                        ?>
                        <hr>
                        <h2>
                            <strong>Cadastre-se</strong>
                        </h2>
                        <hr>
                        <p><input type="text" name="nome" id="" class="form-control" placeholder="Digite seu nome" required></p>
                        <p><input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email" required></p>
                        <p><input type="password" name="password" id="password" class="form-control" placeholder="Digite sua senha" required></p>
                        <p><button type="submit" name="cadastrar" class="btn btn-lg btn-info btn-block">Cadastrar</button></p>
                    </form>
                </section>
                <section class="row clearfix caixa">
                    <hr>
                    <h2 class="titulo">
                        <strong>Como criar sua própria lista</strong>
                    </h2>
                    <hr>
                    <div class="col-md-6">
                        <img class="img-responsive" src="bootstrap/img/index/tutorial.jpg" alt="imagens" srcset="">
                    </div>
                    <div class="cal-md-6">
                        <p>Texto explicativo</p>
                    </div>
                </section>
            </section>
        </div>
    </body>
</html>