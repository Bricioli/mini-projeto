<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recuperar Senha</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../fontawesome/css/all.css" rel="stylesheet">

	<style>
		#form {
			margin-left: 30px;
			margin-right: 30px;
			background-color: whitesmoke;
			padding: 15px;
			border-radius: 10px;
		}

		body {
			background-image: url("../img/bg.jpg");
			background-size: 100%;
		}
	</style>
</head>

<body class="mt-5">
	<form action="usuario-salvar.php" method="POST">
		<input type="hidden" name="acao" value="recuperar">
		<div id="form">
			<h1 class="display-6 text-center mb-5"><i class="far fa-user text"></i> Recuperação de Senha</h1>
			<div class="row g-2 mb-3">
				<div class="col-md-1">

				</div>
				<div class="col-md">
					<p class="text-center">Digite seu email para recuperar a senha.</p>
					<div class="form-floating">
						<input type="email" name="email_usuario" class="form-control" id="floatingEmail" placeholder="E-mail" required>
						<label for="floatingEmail">E-mail</label>
					</div>
				</div>
				<div class="col-md-1">

				</div>
			</div>
			<div class="d-grid gap-2 d-md-flex justify-content-md-center">
				<button class="btn btn-dark btn-lg" type="submit">Enviar</button>
				<a href="../index.php"><button class="btn btn-outline-dark btn-lg" type="button">Voltar</button></a>
			</div>
		</div>
		</div>
	</form>
	<script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>