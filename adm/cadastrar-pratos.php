<?php
/**recebendo as informações do formulario e atribuindo sesu valores as variaveis */

include('../includes/conexao.php');

$imagem = $_FILES['imagem']; 
$nprato = $_POST['nome'];
$codigo = $_POST['codigo'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$caloria = $_POST['calorias'];
$destaque = $_POST['destaque'];




$dir = "../img/cardapio/";
//recebendo o arquivo multipart e renomeado o arquivo para o codigo do prato//
$imagem['name']= $codigo.".jpg";

//Move o arquivo da pasta temporaria de upload para a pasta de destino//

if(move_uploaded_file($imagem["tmp_name"],"$dir".$imagem["name"])){

    echo "Arquivo enviado com sucesso!";
}
else{
    echo "Erro, o arquivo não pode ser enviado.";
}



$sql = "INSERT INTO tb_pratos (codigo, nome, categoria, descricao, preco, caloria, destaque) 
VALUES ('$codigo','$nprato','$categoria','$descricao','$preco','$caloria', '$destaque')";

if($conexao ->query($sql)){
    echo"Salvo com sucesso";
}else{
    echo"Erro ao salvar";
}
$conexao ->close();

header('location: listar_pratos.php');


?>