<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style type="text/css">
          #tContainer{
            width: 500px;
          }
          .botao{
            text-align: end;
          }
          #botao{
            font-weight: bold;
            color: white;
            background-color: #2C497F;
           
          }

    </style>
  </head>
  <body>
      <div class="container" id="tContainer" style="margin-top:  40px">
      <h4>Formulario de Cadrastro</h4>
      <form class="mt-4" action="inserir_producto.php" method="POST">
          <div class="form-group">
            <label for="">Nro Producto</label>
            <input name="nproducto" type="number" class="form-control" placeholder="Digite o numero do producto" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="">Nome Producto</label>
            <input name="producto" type="text" class="form-control" placeholder="Digite o nome do producto" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label>Categoria</label>
              <select class="form-control" name="categoria" required>
                <option>Impressoras</option>
                <option >Hardware</option>
                <option >Software</option>
                <option >Celulares</option>
              </select>
            </div>
            <div class="form-group">
              <label>Quantidade</label>
            <input name="quantidade" type="number" class="form-control" placeholder="Digite o numero do producto" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label>Fornecedor</label>
              <select class="form-control" name="fornecedor" required>
                <option>FornecedorA</option>
                <option >FornecedorB</option>
                <option >FornecedorC</option>
                
              </select>
            </div>
            <div class="botao">
            <button type="submit" id="botao" class="btn btn-outline btn-sm">Cadastrar</button>
           </div>
      </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>