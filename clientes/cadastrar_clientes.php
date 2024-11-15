<?php
    include "../arquivoconexao.php";
    //Reaproveitamento de código, vai incluir a conexao do BD com o PHP

    if(isset($_POST['nome'])){
        // entrada
        $nome = trim($_POST['nome']);
        $telefone = trim($_POST['telefone']);
        $email = trim($_POST['email']);

        // processamento

        $sql = "insert into cliente(nome,telefone,email) values ('$nome','$telefone','$email')";
        $cadastrar = mysqli_query($conexao, $sql);

        // saida feedback ao usuário

        if ($cadastrar) {
            echo "
            <script> 
            alert('Pessoa Cadastrada com Sucesso!');
            window.location = 'listar_clientes.php';
            </script>
            ";
        } else {
            echo "
            <p> Banco de dados Temporariamente fora do ar. Tente novamente more later! <br> Entre em contato com o ADM do site para reportar o problema.</p>
            <p> Clique <a href='clientes.php'> aqui </a> para retornar ao site.</p>
            ";
        }
    }else{
        // tratamento de erro e redirecionamento
        echo "
        <p> Esta é uma página de tratamento de dados</p>
        <p> Clique <a href='clientes.php'>aqui</a> para acessar o formulário de cadastro.</p>
        ";
    }

