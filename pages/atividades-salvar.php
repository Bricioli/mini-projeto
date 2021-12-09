<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$tarefa     = $_POST["tarefa_atividades"];
			$tipo       = $_POST["tipo_atividades"];
			$prazo      = $_POST["prazo_atividades"];
			$descricao  = $_POST["descricao_atividades"];
			$realizada  = $_POST["realizada_atividades"];	
	

			$sql = "INSERT INTO atividades (tarefa_atividades, tipo_atividades, prazo_atividades, descricao_atividades, realizada_atividades) VALUES ('{$tarefa}', '{$tipo}', '{$prazo}', '{$descricao}','{$realizada}')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso');</script>";
				print "<script>location.href='?page=atividades-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=atividades-listar';</script>";
			}
			break;
		
		case 'editar':
			$tarefa     = $_POST["tarefa_atividades"];
			$tipo       = $_POST["tipo_atividades"];
			$prazo      = $_POST["prazo_atividades"];
			$descricao  = $_POST["descricao_atividades"];
			$realizada  = $_POST["realizada_atividades"];	

			$sql = "UPDATE atividades SET tarefa_atividades='{$tarefa}', tipo_atividades='{$tipo}', prazo_atividades='{$prazo}', descricao_atividades='{$descricao}', realizada_atividades='{$realizada}' WHERE id_atividades=".$_POST["id_atividades"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso');</script>";
				print "<script>location.href='?page=atividades-listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=atividades-listar';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM atividades WHERE id_atividades=".$_REQUEST["id_atividades"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluido com sucesso');</script>";
				print "<script>location.href='?page=atividades-salvar';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=atividades-salvar';</script>";
			}
			break;
	}