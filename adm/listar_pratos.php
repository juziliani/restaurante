<?php 
include('../includes/conexao.php');
?>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <div class="container">
    <div class="row centered-form">
      <div class="col-lg-12 ">
          <p><a href="cadastro_pratos.php">Add New Record</a></p>
        <div class="panel panel-default">

        <?php
          $query = "SELECT * FROM tb_pratos";
          /* mydqli_query executa um comando no banco de dados sempre irá exigir dois parametros: o primeiro é a conexao com o 
          banco e o segundo é o comando que será executado*/

          $result = mysqli_query($conexao, $query);


          //conta numero de registros

          $total = mysqli_num_rows($result);

          //msqli_fetch_array transforma os resultados em vetores

          ?>
          
          <div class="panel-heading">
            <h3 class="panel-title">Listagem de Pratos</h3> </div>
          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Código</th>
                  <th>Nome do prato</th>
                  <th>Categoria</th>
                  <th>Descrição</th>
                  <th>Preço</th>
                  <th>Calorias</th>
                  <th>Destaque</th>
                </tr>
              </thead>
              <tbody>
            <?php
                  while ($dados = mysqli_fetch_array($result)){
                    //o array quebra em linha 
                       $id = $dados ['id'];
              ?>                     
                    <tr>
                    <td><?php echo $dados['id']?></td>
                    <td><?php echo $dados['codigo']?></td>
                    <td><?php echo $dados['nome']?></td>
                    <td><?php echo $dados['categoria']?></td>
                    <td><?php echo $dados['descricao']?></td>
                    <td><?php echo "R$" .$dados['preco']?></td>
                    <td><?php echo $dados['caloria']?></td>
                    <td><?php if($dados['destaque'] == 1){echo "sim";}else{echo "Não";}?></td>    
                    <td><a href="editar_pratos.php?idprato=<?php echo $id?>">Editar</button></a></td>
                    <td><a href="deletar_pratos.php?idprato=<?php echo $id?>">Deletar</button></a></td>
                  <?php }?>

                  </tr>
              
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style type="text/css">
  body {
    background-color: #fff;
  }
  
  .centered-form {
    margin-top: 60px;
  }
  
  .centered-form .panel {
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
  }
  </style>