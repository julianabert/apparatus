<?php
    include "../arquivoconexao.php";

    if(isset($_GET['id'])) {

        //entrada - recebe os dados
        $id = $_GET['id']; 
        

        //processamento - escreve e executa o sql
        $sql = "delete from aluno where id = '$id'";
        $excluir = mysqli_query($conexao,$sql);


        //saida - feedback ao usuario e redirecionar a pagina
        if($excluir) {
            echo "
            <script>
                alert('Registro excluído com sucesso!');
                window.location = 'listar_alunos.php';
            </script>
            ";

        //redirecionamento de pag pelo php
        //header ('location: listar_alunos.php')
        } else {
            echo "
            <p>
                Banco de Dados temporariamente fora do ar. Tente novamente mais tarde.
            </p>
            ";
            echo mysqli_error($conexao);
        }
    } else {
         
    }
?>