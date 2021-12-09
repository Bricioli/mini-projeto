<h1 class="display-6"><i class="far fa-user mb-3"></i> Cadastrar atividade</h1>
<form action="?page=atividades-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="row g-3 mb-3">
		<div class="col-md">
			<div class="form-floating">
				<input type="text" name="tarefa_atividades" class="form-control" id="floatingTarefa" placeholder="Tarefa">
				<label for="floatingTarefa">Nome da Tarefa</label>
			</div>
		</div>
		<div class="col-md mb-3">
			<div class="form-floating">
				<select class="form-select" name="tipo_atividades" id="floatingSTipo" aria-label="Tipo">
					<option selected>Tipo</option>
					<option value="Desenvolvimento">Desenvolvimento</option>
					<option value="Atendimento">Atendimento</option>
					<option value="Manutenção">Manutenção</option>
					<option value="Manutenção Urgente">Manutenção Urgênte</option>>
				</select>
			<label for="floatingSTipo">Tipo</label>
			</div>
 		</div>
		<div class="col-md">
			<div class="form-floating">
				<input type="date" name="prazo_atividades" class="form-control" id="floatingPrazo" placeholder="Prazo">
				<label for="floatingPrazo">Prazo</label>
			</div>
		</div>
	</div>
	<div class="form-floating mb-3	">
		<textarea type="text" name="descricao_atividades" class="form-control" id="floatingDescricao" placeholder="Descricao"> </textarea>
		<label for="floatingDescricao">Descrição</label>
	</div>
		<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
		<input type="radio" class="btn-check" name="realizada_atividades" value="A realizar" id="btnradio1" autocomplete="off" checked>
		<label class="btn btn-outline-dark" for="btnradio1" >A realizar</label>

		<input type="radio" class="btn-check" name="realizada_atividades"  value="Concluida" id="btnradio2" autocomplete="off">
		<label class="btn btn-outline-dark" for="btnradio2">Concluida</label>
	</div>	
	<div class="mb-3">
			<button type="submit" class="btn btn-dark btn-lg mt-3">Enviar</button>
		</div>
</form>