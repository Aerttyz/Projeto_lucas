<?php

include('../../conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {

  $email = $mysqli->real_escape_string($_POST['email']);
  $nome = $_POST['nome'];
  $senha = MD5($_POST['senha']);
  $senhanova = MD5($_POST['senhanova']);

  $sql_codeEmail = null;
  $sql_codeSenha = null;
  $sql_codeNome = null;

  if (strlen($email) == 0) { // email
  }
  else {
    $sql_codeEmail = "email='$email'";
  }

  if (strlen($senha) == 0) {
  }
  else {
    $sql_codeSenha = "senha='$senha'";
  }

  if (strlen($nome) == 0) {
  }
  else {
    $sql_codeNome = "nome='$nome'";
  }

  $sql_codeArr = array($sql_codeEmail,$sql_codeSenha,$sql_codeNome);
  $sql_codeUpdates = join(" ",$sql_codeArr);  

  $sql_codeUpdates = trim($sql_codeUpdates," ");
  $sql_codeArr = explode(" ",$sql_codeUpdates);

  $sql_codeUpdates = join(",",$sql_codeArr);  


  echo $sql_codeUpdates;

  if (!isset($_SESSION)) {
    session_start();
  }

  $id = $_SESSION['user'];

  $sql_code = "UPDATE users SET $sql_codeUpdates WHERE id='$id'";
  //UPDATE `users` SET `nome` = 'Thaua2', `email` = 'thaua2@thaua2.com2' WHERE `users`.`id` = 2;
  //UPDATE `users` SET `email` = 'thaua@thaua.co' WHERE `users`.`id` = 1;
  //"UPDATE MyGuests SET lastname='Doe' WHERE id=2";

  $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código: " . $mysqli->error);

  $_SESSION['name'] = $usuario['nome'];

  echo $usuario['nome'];
  echo $usuario['email'];

  echo "<script language='javascript' type='text/javascript'>
        alert('UPDATE realizado com sucesso!');window.location
        .href='./perfil.html';</script>";
  header('location:perfil.html');
}
/*$login = $_POST['login']; $entrar = $_POST['entrar']; $senha = md5($_POST['senha']); $connect = mysqli_connect('localhost','root',''); $db = mysqli_select_db('db');
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