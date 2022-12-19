<?php
include '../../conexao.php';

if (isset($_POST['pauta']) && isset($_POST['id'])) {
    echo $id = $_POST['id'];

    $pauta = $_POST['pauta'];
    $id = $_POST['id'];

    $sql_code = "SELECT * FROM `partituras` WHERE id = '$id'";
    ($sql_query = $mysqli->query($sql_code)) or
        die('Falha na execução do código: ' . $mysqli->error);
    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {
        $sql_code = "INSERT INTO `partituras`(`nome`, `descricao`, `imagem`) VALUES ('$nome','$descricao','$imagem')";
        $sql_code = "UPDATE partituras SET pauta='$pauta' WHERE id='$id'";
        ($sql_query = $mysqli->query($sql_code)) or
            die('Falha na execução do código: ' . $mysqli->error);

        $result = $sql_query;

        if ($result == '1') {
            echo "<script language='javascript' type='text/javascript'>
        alert('Partitura atualizada com sucesso!');window.location
        .href='../partitura/partitura.php';</script>";
            die();
        } else {
            echo "<script language='javascript' type='text/javascript'>
        alert('Houve um erro durante a atualização');window.location
        .href='../partitura/partitura.php';</script>";
            die();
        }
    } else {
        echo $id;
        echo "<script language='javascript' type='text/javascript'>
        alert('Partitura não encontrada');window.location
        .href='../partitura/partitura.php';</script>";
        die();
    }
} else {
    echo "<script language='javascript' type='text/javascript'>
        alert('Id ou pauta inválidos');window.location
        .href='../partitura/partitura.php';</script>";
    die();
}
?>
