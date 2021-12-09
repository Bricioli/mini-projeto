<h1 class="display-6"><i class="far fa-user"></i> Listar atividades</h1>
<div class="row">
	<div class="col-lg-12">
		<form action="?page=atividades-listar" class="row g-2 float-end" method="POST">
			<div class="col-auto">
				<input type="text" name="pesquisa" class="form-control" placeholder="Pesquisar...">
			</div>
			<div class="col-auto">
				<button type="submit" class="btn btn-outline-dark">
					<i class="fas fa-search"></i>
				</button>
			</div>
		</form>
	</div>
</div>
<?php
	if(empty($_REQUEST["pesquisa"])){
		$sql = "SELECT * FROM atividades WHERE realizada_atividades LIKE '%Concluida%'";
	}else{
		$sql = "SELECT * FROM atividades WHERE tarefa_atividades LIKE '%".$_REQUEST["pesquisa"]."%' OR tipo_atividades LIKE '%".$_REQUEST["pesquisa"]."%' OR realizada_atividades LIKE '%".$_REQUEST["pesquisa"]."%'" ;
	}

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Retornou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Tarefa</th>";
		print "<th>Tipo</th>";
		print "<th>Prazo</th>";
		print "<th>Realizada?</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_atividades."</td>";
			print "<td>".$row->tarefa_atividades."</td>";
			print "<td>".$row->tipo_atividades."</td>";
			print "<td>".ExibeData($row->prazo_atividades)."</td>";
			print "<td>".$row->realizada_atividades."</td>";
			print "<td>
					<button class='btn btn-outline-dark' 
					onclick=\"location.href='?page=atividades-editar&id_atividades=".$row->id_atividades."';\">
					<i class=\"fas fa-edit\"></i>
					</button>

					<button class='btn btn-dark' 
					onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=atividades-salvar&acao=excluir&id_atividades=".$row->id_atividades."';}else{flase;}\">
					<i class=\"fas fa-trash-alt\"></i>
					</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não encontrou resultados.</div>";
	}
?>