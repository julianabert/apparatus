<?php
    include "../arquivoconexao.php";

    if(isset($_POST['id'])) {
        //entrada
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $cpf = $_POST['cpf'];

        //processamento
        $sql = "update aluno set nome = '$nome', telefone = '$telefone', endereco = '$endereco', cpf = $cpf where id='$id'";
        $alterar = mysqli_query($conexao, $sql);

        //saída
        if($alterar) {
            echo "
                <script>
                    alert('Registro alterado com sucesso!')
                    window.location = 'listar_alunos.php';
                </script>
            ";
        } else {
            echo "
               <p> Esta é uma página de tratamento de dados</p>
               <p> Clique <a href='listar_alunos.php'>aqui</a> para acessar a lista de alunos cadastrados.</p>
            ";
        }

    } else {
        // tratamento de erro e redirecionamento
        echo "
        <p> Esta é uma página de tratamento de dados.</p>
        <p> Clique <a href='listar_alunos.php'>aqui</a> para acessar a lista de alunos cadastrados.</p>
        ";
    }
?>