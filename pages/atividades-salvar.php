<?php
	// esse é o arquivo que recebe as solicitação de alteração de dados do Banco
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$tarefa     = $_POST["tarefa_atividades"];
			$tipo       = $_POST["tipo_atividades"];
			$prazo      = $_POST["prazo_atividades"];
			$descricao  = $_POST["descricao_atividades"];
			$realizada  = $_POST["realizada_atividades"];	
			//aqui pego a data e hora do sistema pra poder fazer a validação da criação de manutenções urgentes
			$dia = date("D"); 
			$hora = date("H");

			if($dia == "Fri" && $hora > 10 && $tipo === "Manutenção Urgente"){
				print "<script>alert('Não é possivel criar tarefas de manutenção urgente hoje');</script>";
				print "<script>location.href='?page=atividades-cadastrar';</script>"; 
			}else{
				$sql = "INSERT INTO atividades (tarefa_atividades, tipo_atividades, prazo_atividades, descricao_atividades, realizada_atividades) VALUES ('{$tarefa}', '{$tipo}', '{$prazo}', '{$descricao}','{$realizada}')";

				$res = $conn->query($sql) or die($conn->error);

				if($res==true){
					print "<script>alert('Cadastrou com sucesso');</script>";
					print "<script>location.href='?page=atividades-listar';</script>";
				}else{
					print "<script>alert('Não foi possível cadastrar');</script>";
					print "<script>location.href='?page=atividades-listar';</script>";
				}
			}
			break;
		
		case 'editar':
			$tarefa     = $_POST["tarefa_atividades"];
			$tipo       = $_POST["tipo_atividades"];
			$prazo      = $_POST["prazo_atividades"];
			$descricao  = $_POST["descricao_atividades"];
			$realizada  = $_POST["realizada_atividades"];	
			$d_tamanho = strlen($descricao); // tamanho do campo para validar os 50 caracteres

			if(($tipo ==="Manutenção Urgente" || $tipo ==="Atendimento") && $d_tamanho <= 50 && $realizada === "Concluida"){
				print "<script>alert('Este tipo de tarefa precisa ter mais de 50 caracteres de descrição');</script>";
				print "<script>location.href='?page=atividades-listar';</script>";
			}else{
			$sql = "UPDATE atividades SET tarefa_atividades='{$tarefa}', tipo_atividades='{$tipo}', prazo_atividades='{$prazo}', descricao_atividades='{$descricao}', realizada_atividades='{$realizada}' WHERE id_atividades=".$_POST["id_atividades"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso');</script>";
				print "<script>location.href='?page=atividades-listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=atividades-listar';</script>";
			}
			}
			break;

		case 'excluir':
			//Pego por aqui o tipo da atividade para tratar se pode excluir ou não
			$tipo = $_REQUEST['tipo_atividades'];


			if($tipo === "Manutenção Urgente"){
				print "<script>alert('Não é possivel excluir esta tarefa');</script>";
				print "<script>location.href='?page=atividades-listar';</script>"; 
			}else{
				$sql = "DELETE FROM atividades WHERE id_atividades=".$_REQUEST["id_atividades"];

				$res = $conn->query($sql) or die($conn->error);

				if($res==true){
					print "<script>alert('Excluido com sucesso');</script>";
					print "<script>location.href='?page=atividades-listar';</script>";
				}else{
					print "<script>alert('Não foi possível excluir');</script>";
					print "<script>location.href='?page=atividades-listar';</script>";
				}
			}
			break;
	}