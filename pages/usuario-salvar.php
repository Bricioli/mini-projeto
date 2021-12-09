<?php
include("../config.php");
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$login    = $_POST["login_usuario"];
			$senha    = $_POST["senha_usuario"];

			$sql = "INSERT INTO usuario (login_usuario, senha_usuario) VALUES ('{$login}',md5('{$senha}'))";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso');</script>";
				print "<script>location.href='../index.php';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?../index.php';</script>";
			}
			break;
		
		case 'editar':
			$login    = $_POST["login_usuario"];
			$senha    = $_POST["senha_usuario"];


			$sql = "UPDATE usuario SET login_usuario='{$login}', senha_usuario=md5('{$senha}') WHERE id_usuario=".$_POST["id_usuario"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso');</script>";
				print "<script>location.href='?page=usuario-listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=usuario-listar';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM usuario WHERE id_usuario=".$_REQUEST["id_usuario"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso');</script>";
				print "<script>location.href='?page=usuario-listar';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=usuario-listar';</script>";
			}
			break;
	}