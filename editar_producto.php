<?php

include 'conector.php';

$id = $_GET['id'];


?>

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
            
            color: white;
            background-color: #2C497F;
           
          }

    </style>
  </head>
  <body>
      <div class="container" id="tContainer" style="margin-top:  40px">
      <h4>Editar Cadrastro</h4>
      <form class="mt-4" action="actualizar_producto.php" method="POST">

          <?php
            $sql = "SELECT * FROM stock WHERE id_stock =$id";

            $sql = $pdo->query($sql);
            if($sql->rowCount()> 0){
                // verificar se houve algum resultado
                foreach($sql ->fetchAll() as $usuarios):
                    ?>
                  
          <div class="form-group">
            <label for="">Nro Producto</label>
            <input name="nproducto" type="number" class="form-control" value="<?php echo $usuarios['nproducto'] ?>" disabled>
            <input type="number" class="form-control" name="id" value="<?php echo $usuarios['nproducto'] ?>" style="display:none">
            


          </div>
          <div class="form-group">
            <label for="">Nome Producto</label>
            <input name="producto" type="text" class="form-control"value="<?php echo $usuarios['producto'] ?>">
          </div>
          <div class="form-group">
            <label>Categoria</label>
              <select class="form-control" name="categoria" value="<?php echo $usuarios['categoria'] ?>">
              <option>Impressoras</option>
                <option >Hardware</option>
                <option >Software</option>
                <option >Celulares</option>
              </select>
            </div>
            <div class="form-group">
              <label>Quantidade</label>
            <input name="quantidade" type="number" class="form-control" value="<?php echo $usuarios['quantidade'] ?>">
          </div>
          <div class="form-group">
            <label>Fornecedor</label>
              <select class="form-control" name="fornecedor" value="<?php echo $usuarios['fornecedor'] ?>">
              <option>FornecedorA</option>
                <option >FornecedorB</option>
                <option >FornecedorC</option>
                </select>
                
            </div>
            <div class="d-flex justify-content-between">
            <a class="btn btn-primary" id="botao" href="index.php" role="button">Cancelar</a>
            
            <button type="submit" id="botao" class="btn btn-outline btn-sm ">Editar</button>
           </div>

           <?php
                    endforeach;
                    
                // e se houve algum resultado mostrar na tela
            }else{
              header("location: index.php");
            }
            
            ?>
      </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>