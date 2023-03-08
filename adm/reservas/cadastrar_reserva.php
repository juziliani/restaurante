<?php 
    include('../includes/conexao.php');

    $nome = $_POST['nome'];
    $telefone = $_POST['TELEFONE'];
    $email = $POST['email'];
    $data_reserva = $_POST['data_reserva'];
    $mensagem = $POST['mensagem'];
    $numero_pessoas = $POST['numero_pessoas'];

$sql = "INSERT INTO tb_reserva (nome, telefone, email, dat_reserva, mensagem, numero_pessoas) VALUES ('$nome','$telefone','$email',
'$data_reserva','$mensagem','$numero_pessoas')";

$conexao->query($sql);

$conexao->close();

header('location: ../index.php');

?>
