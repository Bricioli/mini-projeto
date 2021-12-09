<?php
    include('validalogin.php');
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet" >
    <link href="../fontawesome/css/all.css" rel="stylesheet">
    <title>Painel do Usuario!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="painel.php">  SISC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="painel.php">Inicio</a>
            <a class="nav-link" href="?page=atividades-cadastrar">Cadastrar</a>
            <a class="nav-link" href="?page=atividades-listar">Todas as tarefas</a>
            <a class="nav-link" href="?page=atividades-listar-r">A realizar</a>
            <a class="nav-link" href="?page=atividades-listar-c">Concluidas</a>

          </div>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mt-5">
          <?php
            include('../config.php'); 
            switch(@$_REQUEST["page"]){
              case "atividades-cadastrar":
                include("atividades-cadastrar.php");
              break;
              case "atividades-listar":
                include("atividades-listar.php");
              break;
              case "atividades-listar-c":
                include("atividades-listar-c.php");
              break;
              case "atividades-listar-r":
                include("atividades-listar-r.php");
              break;
              case "atividades-editar":
                include("atividades-editar.php");
              break;
              case "atividades-salvar":
                include("atividades-salvar.php");
              break;
              default:
                include("main.php");
            }
            ?>
          </div>
        </div>
      </div> 
    <script src="../js/bootstrap.bundle.min.js" ></script>
  </body>
</html>

