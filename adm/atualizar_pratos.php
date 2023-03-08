<?php

include('../includes/conexao.php');

$id = $_GET['idprato'];

$imagem = $_FILES['imagem'];
$nprato = $_POST['nprato'];
$codigo = $_POST['codigo'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$caloria = $_POST['caloria'];
$destaque = $_POST['destaque'];





$sql = "UPDATE tb_pratos set nome = '$nprato', codigo = '$codigo', categoria = '$categoria',
preco = '$preco', descricao = '$descricao', caloria = '$caloria' , destaque = '$destaque' WHERE id = '$id'";


$conexao->query($sql);

header('location:listar_pratos.php');
?>