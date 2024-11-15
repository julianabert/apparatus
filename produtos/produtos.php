<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>
      <div class="container">
        <h1 class="m">Cadastro de produtos</h1>
        <hr>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <form name="cadastrar" method="post" action="cadastrar_produtos.php">
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="emailHelp" required>
      </div>

      <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input type="number" class="form-control" id="preco"  name="preco" step = "0.1" required>
      </div>

      <div class="mb-3">
          <label class="form-label" for="estoque"> Estoque </label>
          <input type="number" class="form-control" id="estoque" name="estoque" step = "0.10" required>
      </div>

      <div class="mb-3 text-end">
          <button type="submit" class="btn btn-outline-primary">Cadastro</button>
          <button type="reset" class="btn btn-outline-danger" onclick="history.go(-1)">Cancelar</button>
      </div>

    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
<script>
        $(document).ready(function(){
             $('#telefone').mask('(00) 00000-0000');
             $('#cpf').mask('000.000.000-00');
        });
</script>

</div>
  </body>
</html>