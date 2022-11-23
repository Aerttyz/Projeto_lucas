<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){

  $email = $_POST['email'];
  $senha = MD5($_POST['senha']);
  $nome = $_POST['nome'];

  
  $sql_code = "SELECT * FROM `users` WHERE email = '$email' and senha = '$senha'";
  $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código: " . $mysqli->error);
  $quantidade = $sql_query->num_rows;

  if($quantidade>0){
    echo"<script language='javascript' type='text/javascript'>
        alert('Já há um usuário cadastrado com esse email');window.location
        .href='index.php';</script>";
    die();
  }

  if(strlen($email)==0){
    echo "Preencha seu e-mail";
  } else if (strlen($senha)==0){
    echo "Preencha sua senha";
  } else {
    $email = $mysqli->real_escape_string($_POST['email']);

    $sql_code = "INSERT INTO `users`(`email`, `senha`, `nome`) VALUES ('$email','$senha','$nome')";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código: " . $mysqli->error);
  
    $result = $sql_query;

    if($result=='1'){
      echo"<script language='javascript' type='text/javascript'>
        alert('Cadastro realizado com sucesso!');window.location
        .href='index.php';</script>";
        die();
    } else {
      echo"<script language='javascript' type='text/javascript'>
        alert('Houve um erro durante o cadastro');window.location
        .href='index.php';</script>";
        die();
    }

    /*if($quantidade == 1){
      $usuario = $sql_query->fetch_assoc();

      if(!isset($_SESSION)) {
        session_start();
      }

      $_SESSION['user'] = $usuario['id'];
      $_SESSION['name'] = $usuario['nome'];
    } else {
      echo "Falha ao cadastrar!";
    }*/
  }
}

/*

$mysqli = new mysqli()
$connect = mysqli_connect('localhost','root','','db');

if(!$connect) {
  echo 'nao conectou';
}
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysqli_query($query_select, $connect);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    index.html';</script>";

    }else{
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        index.html';</script>";
        die();

      }else{
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha','$nome')";
        $insert = mysqli_query($query,$connect);

        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('$insert')";
          /* echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='index.html'</script>"; 
        }
      }
    } */
?>