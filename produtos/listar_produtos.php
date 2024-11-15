<?php

include "../arquivoconexao.php";

$sql = "select * from produto order by descricao";
$seleciona = mysqli_query($conexao, $sql);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        img {
            width: 1.3em;
        }
    </style>
  </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- ----------------------------cabeçalho da lista-------------------------------- -->
            <div class="container">
                <a href="produtos.php">
                    <div class="text-end mt-5">
                        <button class="btn btn-primary" onclick="cadastrar_produtos.php">Cadastrar novo produto</button>
                    </div>
                </a>
                
                <h1 class="text-center mt-5">Lista de Produtos</h1>

                <div class="row mb-2 bg-dark text-light text-center">
                    <div class="col-2">id</div>
                    <div class="col-3">Descrição</div>
                    <div class="col-3">Preço</div>
                    <div class="col-2">Estoque</div>
                    <div class="col-2">Controle</div>
            </div>

        <!-- ----------------------------lista direta do banco de dados-------------------------------- -->
        <?php
        //convertendo sql em vetor
            while($exibe = mysqli_fetch_array($seleciona)) { 
                $id = $exibe['id'];
        ?>
                <div class="row text-center">
                    <div class="col-2"><?php echo $exibe['id']?></div>
                    <div class="col-3"><?php echo $exibe['descricao']?></div>
                    <div class="col-3"><?php echo $exibe['preco']?></div>
                    <div class="col-2"><?php echo $exibe['estoque']?></div>
                    <div class="col-2">

                        <a href="ver_produto.php?id=<?php echo $id?>"><img src="../img/ver.png" alt=""></a>
                        
                        <a href="editar_produto.php?id=<?php echo $id?>"><img src="../img/editar.png" alt=""></a>
                        
                        <a href="excluir_produto.php?id=<?php echo $id?>" onclick="return confirm('Confirma a exclusão do registro?')"><img src="../img/delete.png" alt=""></a>
                        <!-- ? = parametro pelo metodo get -->
                    </div>
                </div>
        <?php
            }
        ?>
            </div>
    </body>