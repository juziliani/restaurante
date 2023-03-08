<?php
include('../../includes/conexao.php');


$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];

$nivel = $_POST['nivel'];
$modified = $_POST['modified'];
$senha_cript = md5($senha);

$sql = "INSERT INTO tb_usuario (nome, email, usuario, senha, 
nivel) VALUES ('$nome', '$email',
'$usuario', '$senha', '$nivel')";

 $conexao->query($sql);

 $conexao->close();

 header('location: ../../index.php');
 ?>