<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
        
    <h1 class="m">Cadastro de Alunos</h1>
        <hr>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <form name="cadastrar" method="post" action="cadastrar_alunos.php">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone"  name="telefone" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="foto">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div>

            <div class="mb-3 text-end">
                <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
                <button type="reset" class="btn btn-outline-danger" onclick="history.go(-1)">Cancelar</button>
            </div>

        </form>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
<script>
        $(document).ready(function(){
             $('#telefone').mask('(00) 00000-0000');
             $('#cpf').mask('000.000.000-00');
        });
</script>
</body>
</html>