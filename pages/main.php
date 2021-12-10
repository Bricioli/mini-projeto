<div class="container">
   <div class="row justify-content-md-center">
        <div id="center"class="col-md-auto">
            <h1 class="display-4">SISC</h1>
            <p class="fst-italic">Sistema de cadastro de chamados.</p>
            <h2 class="display-6">Olá, <?php print $_SESSION['usuario'];?></h2>
            <div>
                <a href="?page=atividades-cadastrar"><button class="btn btn-dark btn-lg mt-5">Cadastrar</button></a>
                <a href="logout.php"><button class="btn btn-dark btn-lg mt-5">Logout</button></a>
            </div>
            <div>
                <a href="?page=atividades-listar"><button class="btn btn-dark btn-lg mt-1"> Lista de atividades </button></a>
            </div>
        </div>
    </div>
</div>
