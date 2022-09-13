<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastrar Usuario</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../fontawesome/css/all.css" rel="stylesheet">

	<style>
		#form{
			margin-left: 30px;
			margin-right: 30px;
			background-color: whitesmoke;
			padding: 15px;
			border-radius: 10px;
		}
		body{
			background-image: url("../img/bg.jpg");
            background-size: 100%;
		}
	</style>
</head>
<body class="mt-5">
<form action="usuario-salvar.php" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div id="form">
		<h1 class="display-6 text-center mb-5"><i class="far fa-user text"></i> Cadastrar usuario</h1>
		<div class="row g-2 mb-3">
			<div class="col-md">
				<div class="form-floating">
					<input type="text" name="login_usuario" class="form-control" id="floatingLogin" placeholder="Login">
					<label for="floatingLogin">Login</label>
				</div>
			</div>
			<div class="col-md">
				<div class="form-floating">
					<input type="password" name="senha_usuario" class="form-control" id="floatingSenha" placeholder="Senha">
					<label for="floatingSenha">Senha</label>
				</div>
			</div>
			<div class="col-md">
				<div class="form-floating">
					<input type="email" name="email_usuario" class="form-control" id="floatingEmail" placeholder="E-mail">
					<label for="floatingSenha">E-mail</label>
				</div>
			</div>
		</div>
	
		<div class="d-grid gap-2 d-md-flex justify-content-md-center">
			<button class="btn btn-dark btn-lg" type="submit">Cadastrar</button>
			<a href="../index.php"><button class="btn btn-outline-dark btn-lg" type="button">Voltar</button></a>
		</div>
	</div>
</form>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
