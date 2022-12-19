<?php
include('../../conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql_code = "DELETE FROM `partituras` WHERE id = '$id'";
    ($sql_query = $mysqli->query($sql_code)) or
        die('Falha na execução do código: ' . $mysqli->error);
    echo "<script language='javascript' type='text/javascript'>
        alert('Deletado com sucesso!');window.location
        .href='partitura.php';</script>";
}
?>
