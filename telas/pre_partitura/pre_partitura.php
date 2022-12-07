<?php
include('../../conexao.php');

if (isset($_POST['descricao']) && isset($_POST['nome_partitura'])) {

    $nome = $mysqli->real_escape_string($_POST['nome_partitura']);
    $descricao = $mysqli->real_escape_string($_POST['descricao']);
    $imagem = $_POST['imagem'];

    $sql_code = "INSERT INTO `partituras`(`nome`, `descricao`, `imagem`) VALUES ('$nome','$descricao','$imagem')";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código: " . $mysqli->error);

    $result = $sql_query;
    
    $id = $mysqli->insert_id;

    if ($result == '1') {
        echo "<script language='javascript' type='text/javascript'>
        alert('Cadastro realizado com sucesso!');window.location
        .href='../cadastro_partitura/cadastro_partitura.html?id=$id';</script>";
        die();
    }
    else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Houve um erro durante o cadastro');window.location
        .href='../cadastro_partitura/cadastro_partitura.html?id=$id';</script>";
        die();
    }
}
else {
    echo "<script language='javascript' type='text/javascript'>
        alert('Informe o nome e a descrição');window.location
        .href='../cadastro_partitura/cadastro_partitura.html?id=$id';</script>";
    die();
}
?>