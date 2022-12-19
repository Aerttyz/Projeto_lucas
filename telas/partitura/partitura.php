<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="partitura.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Musicales</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Estilos customizados para este template -->
    <link href="album.css" rel="stylesheet">


    <?php
    include '../../conexao.php';

    $sql_code = 'SELECT * FROM `partituras`';
    $result = $mysqli->query($sql_code);
    ?>
  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Sobre</h4>
              <p class="text-muted">Você está no musicales, uma plataforma para cadastro e compartilhamento de partituras musicais, atualmente temos os serviços de criação de partituras e compartilhamento. Como ainda está em desenvolvimento, esperamos futuramente adicionar uma função para tocar os ritmos musicais de cada partitura</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Veja mais</h4>
              <ul class="list-unstyled">
                <li><a href="../perfil/perfil.html" class="text-white">Perfil</a></li>
                <li><a href="../../index.php" class="text-white">Fazer Logout</a></li>
                <li><a href="../pre_partitura/pre_partitura.html" class="text-white">Cadastrar partituras</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
           
            <strong>Musicales</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Conheça o melhor das partituras</h1>
          <p class="lead text-muted">Seja bem-vindo, aqui é onde você pode conhecer o melhor lado da música e apreciar suas belas partituras</p>
          
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <?php while ($row = mysqli_fetch_assoc($result)) {

                $id = $row['id'];
                $pauta = $row['pauta'];
                $nome = $row['nome'];
                
                $imagem = $row['imagem'];
                $descricao = $row['descricao'];
                ?>


                <div class='col-md-4'> 
                <div class='card mb-4 shadow-sm'>
                  <img class='card-img-top'  alt='Card image cap' src='<?php echo $imagem?>' data-holder-rendered='true'>
                  <div class='card-body'>
                    <p class='card-text'><h2><?php echo $nome?></h2> <?php echo $descricao?></p>
                    <div class='d-flex justify-content-between align-items-center'>
                      <div class='btn-group'>
                        <button type='button' class='btn btn-sm btn-outline-secondary Baixar' data-id='<?php echo $id?>'>Baixar</button>
                        <button type='button' class='btn btn-sm btn-outline-secondary edit' data-id='<?php echo $id?>'>Editar</button>
                        <button type='button' class='btn btn-sm btn-outline-secondary exc' data-id='<?php echo $id?>'>Excluir</button>
                      </div>
                      <!--<small class='text-muted'>9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>


            <?php
            } ?>
            </div>
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Voltar ao topo</a>
        </p>
        <p>Desenvolvido por Thauã Magalhães & Alesandro Alex</p>
        
      </div>
    </footer>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com.br/docs/4.1/assets/js/vendor/holder.min.js"></script>
    <script src="partitura.js"></script>
  </body>
</html>