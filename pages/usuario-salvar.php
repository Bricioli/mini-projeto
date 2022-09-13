<?php
// para cada usuario dei preferencia para criar uma pagina fora do sistema, para que possa ser acessada sempre, assim podendo ser feito o cadastro sem que necessário. 
include("../config.php");
switch ($_REQUEST["acao"]) {
	case 'cadastrar':
		$login    = $_POST["login_usuario"];
		$senha    = $_POST["senha_usuario"];
		$email    = $_POST["email_usuario"];


		$sql = "INSERT INTO usuario (login_usuario, senha_usuario,email_usuario) VALUES ('{$login}',md5('{$senha}'), '{$email}')";

		$res = $conn->query($sql) or die($conn->error);

		if ($res == true) {
			print "<script>alert('Cadastrou com sucesso');</script>";
			print "<script>location.href='../index.php';</script>";
		} else {
			print "<script>alert('Não foi possível cadastrar');</script>";
			print "<script>location.href='?../index.php';</script>";
		}
		break;

	case 'editar':
		$login    = $_POST["login_usuario"];
		$senha    = $_POST["senha_usuario"];

		$sql = "UPDATE usuario SET senha_usuario=md5('{$senha}') WHERE id_usuario=" . $_POST["id_usuario"];

		$res = $conn->query($sql) or die($conn->error);

		if ($res == true) {
			print "<script>alert('Senha Alterada com sucesso');</script>";
			print "<script>location.href='../index.php';</script>";
		} else {
			print "<script>alert('Não foi possível alterar a senha');</script>";
			print "<script>location.href='usuario-recuperar.php?id_usuario=" . $id_usuario . "';</script>";
		}
		break;

	case 'recuperar':

		$email    = $_POST["email_usuario"];
		$sql = $conn->prepare("SELECT * FROM usuario WHERE email_usuario = ?");
		$sql->bind_param('s', $email);
		$sql->execute();
		$res = $sql->get_result();
		$row = $res->fetch_object();
		$total = $res->num_rows;
		$id_usuario = $row->id_usuario;
		if ($total > 0) {
			// $dados = $res->fetch_assoc();
			//print "<script>location.href='usuario-recuperar.php?id_usuario=".$id_usuario."' </script>";
			$text = "http://localhost/projeto/pages/usuario-recuperar.php?id_usuario=" . $id_usuario;
			send_email($text, $email);
		}
		echo '<script> alert(" Caso este endereço de email esteja cadastrado você receberá um link para redefinição de senha, cheque seu email ! ")</script>';
		echo "<script>location.href='../index.php';</script>";

		break;
}

function send_email($text, $email)
{

	require_once('../vendor/autoload.php');

	$smtp = new Nette\Mail\SmtpMailer([
		'host' => 'smtp.mailosaur.net',
		'port' => 2525,
		'username' => '5yvzbyn7@mailosaur.net',
		'password' => 'OwaMXofGGpgXGYSd',
		'secure' => 'starttls',
	]);

	$message = new Nette\Mail\Message;
	$message->setFrom('Our Company <5yvzbyn7@mailosaur.net>')
		->addTo('Test User <' . $email . '>')
		->setSubject('Recuperação de senha')
		->setHtmlBody('<p> Clique no link para criar uma nova senha </p><br> 
		<a href='. $text .'> Alterar Senha </a>');

	$smtp->send($message);
};
