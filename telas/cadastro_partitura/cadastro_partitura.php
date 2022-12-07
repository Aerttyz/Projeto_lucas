<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar partitura</title>
  <link rel="stylesheet" href="cadastro_partitura.css">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <title>Musicales</title>

  <!-- Principal CSS do Bootstrap -->
  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Estilos customizados para este template -->
  <link href="album.css" rel="stylesheet">
</head>
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Sobre</h4>
          <p class="text-muted">Adicione alguma informação sobre o álbum abaixo (autor ou qualquer outro background).
            Faça essas informações terem algumas frases, para a galera ter algumas informações que besliscar. Além
            disso, use link nelas para as redes sociais ou informações de contato.</p>
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
      <a href="../partitura/partitura.html" class="navbar-brand d-flex align-items-center">

        <strong>Musicales</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
        aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<body>
  <main role="main">
    <section class="section text-center">
      <div class="container botaoNotasContainer">
        <!--<button class="botaoNotas"><img class="botaoNotasImg" src="../../simbolos/notas/semibreve.png" /></button>-->
        <!--<button class="botaoNotas"><img class="botaoNotasImg" src="../../simbolos/notas/minima.png" /></button>-->
        <button class="botaoNotas" onclick="handleClick('Seminima', false)"><img class="botaoNotasImg" src="../../simbolos/notas/seminima.png" /></button>
        <button class="botaoNotas" onclick="handleClick('Colcheia', false)"><img class="botaoNotasImg" src="../../simbolos/notas/colcheia.png" /></button>
        <button class="botaoNotas" onclick="handleClick('Semicolcheia', false)"><img class="botaoNotasImg" src="../../simbolos/notas/semicolcheia.png" /></button>
        <button class="botaoNotas" onclick="handleClick('Fusa', false)"><img class="botaoNotasImg" src="../../simbolos/notas/fusa.png" /></button>
        <button class="botaoNotas" onclick="handleClick('Semifusa', false)"><img class="botaoNotasImg" src="../../simbolos/notas/semifusa.png" /></button>
      </div>
      <div class="container botaoNotasContainer">
        <!-- <button class="botaoNotas"><img class="botaoNotasImg" src="../../simbolos/Pausas/" /></button> -->
        <!-- <button class="botaoNotas"><img class="botaoNotasImg" src="../../simbolos/Pausas/minima.png" /></button> -->
        <button class="botaoNotas" onclick="handleClick('Seminima', true)"><img class="botaoNotasImg" src="../../simbolos/Pausas/Seminima.png" /></button>
        <button class="botaoNotas" onclick="handleClick('Colcheia', true)"><img class="botaoNotasImg" src="../../simbolos/Pausas/Colcheia.png" /></button>
        <button class="botaoNotas" onclick="handleClick('Semicolcheia', true)"><img class="botaoNotasImg"
            src="../../simbolos/Pausas/Semicolcheia.png" /></button>
        <button class="botaoNotas" onclick="handleClick('Fusa', true)"><img class="botaoNotasImg" src="../../simbolos/Pausas/Fusa.png" /></button>
        <button class="botaoNotas" onclick="handleClick('Semifusa', true)"><img class="botaoNotasImg" src="../../simbolos/Pausas/Semifusa.png" /></button>
      </div>
    </section>
    <div id="partituraContainer">
      
    </div>
    <div class="mt-5 text-center botaoSalvar"><button class="btn btn-primary profile-button" type="submit">Salvar</button></div>
  </main>
</body>
<script src="cadastro_partitura.js"></script>
<?php
echo "<script type='text/JavaScript'> 
defineNotas([{tempo: 'Semicolcheia', pausa: false},{tempo: 'Semicolcheia', pausa: false}]);
renderizarPartitura();
     </script>";
?>
</html>