<?php

include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){

  $email = $_POST['email'];
  $senha = MD5($_POST['senha']);

  echo $email;
  echo $senha;

  if(strlen($email)==0){
    echo "Preencha seu e-mail";
  } else if (strlen($senha)==0){
    echo "Preencha sua senha";
  } else {
    $email = $mysqli->real_escape_string($_POST['email']);

    $sql_code = "SELECT * FROM `users` WHERE email = '$email' and senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código: " . $mysqli->error);
  
    $quantidade = $sql_query->num_rows;

    if($quantidade == 1){
      $usuario = $sql_query->fetch_assoc();

      if(!isset($_SESSION)) {
        session_start();
      }

      $_SESSION['user'] = $usuario['id'];
      $_SESSION['name'] = $usuario['nome'];

      echo $usuario['nome'];
      echo $usuario['email'];

      echo"<script language='javascript' type='text/javascript'>
        alert('Login realizado com sucesso!');window.location
        .href='./telas/partitura/partitura.html';</script>";
      header('location:telas/partitura/partitura.html');
    } else {
      echo "Falha ao logar! E-mail ou senha incorretos";
      echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='index.html';</script>";
      die();
    }
  }
}

/*$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db('db');
  if (isset($entrar)) {

    $verifica = mysqli_query("SELECT * FROM usuarios WHERE login =
    '$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='index.html';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:index.php");
      }
  }*/
?>