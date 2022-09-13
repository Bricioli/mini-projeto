<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Chamados</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <style>
        #login {
            background-image: url("img/bg.jpg");
            background-size: 100%;
        }
    </style>
</head>

<body>
    <section id="login" class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <div class="box">
                        <h3 class="display-6">Cadastro de Chamados</h3>
                        <?php
                        if (isset($_SESSION['nao_autenticado'])) {
                            print "<div class='notification is-danger'>
                            <p>Usuário ou senha inválidos.</p>
                            </div>";
                        }
                        unset($_SESSION['nao_autenticado']);
                        ?>
                        <form action="pages/login.php" method="POST">
                            <div class="col-md mb-3">
                                <div class="form-floating">
                                    <input type="text" name="usuario" class="form-control" id="floatingUsuario" placeholder="Usuario">
                                    <label for="floatingUsuario">Usuario</label>
                                </div>
                            </div>
                            <div class="col-md mb-3">
                                <div class="form-floating">
                                    <input type="password" name="senha" class="form-control" id="floatingSenha" placeholder="Senha">
                                    <label for="floatingSenha">Senha</label>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-block">
                                <button class="btn btn-dark btn-lg" type="submit">Entrar</button>
                                <a href="pages/usuario-cadastrar.php"><button type="button" class=" btn btn-outline-dark btn-lg">Cadastrar</button></a>
                            </div>
                            <div class="mt-3">
                                <a href="pages/usuario.php">Esqueci minha senha</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>