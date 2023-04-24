<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  </head>
  <body class="d-flex flex-column h-100">

<header data-bs-theme="dark">

  <!-- Nav fixado no topo -->
  <div class="collapse text-bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4>Sobre</h4>
          <p class="text-body-secondary">Um pequeno atalho para cadastrar as Informções tanto de Pessoas quanto de Contatos</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4>Atalhos</h4>
          <ul class="list-unstyled">
            <li><a href="?page=pessoas" class="text-white">Listar Pessoas</a></li>
            <li><a href="?page=contato" class="text-white">Listar Contatos</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="index.php" class="navbar-brand d-flex align-items-center">
        <strong>Home</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>

</header>

<!-- Class de Conteúdo -->

<div class="container">
  <div class="row">
      <div class="col mt-5">
        <?php
        include("db\config.php");
            switch (@$_REQUEST["page"]){
                case "pessoas": 
                    include("utilites\Listar_Pessoa.php");
                break;
                case "contato": 
                    include("utilites\Listar_Contato.php");
                break;
            default: 
        print "<h1>Bem Vindo!</h1>";
    }
?>
      </div>
  </div>
</div>

<footer class="footer mt-auto py-3 bg-body-tertiary">
  <div class="container">
    <span class="text-body-secondary">Place sticky footer content here.</span>
  </div>
</footer>
        <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>   
    </body>
</html>