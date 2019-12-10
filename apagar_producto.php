<?php

include 'conector.php';

$id = $_GET['id'];

print_r($id) ;
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
        <body>

 <div class="container mt-4">
<form method="">
    
 <table class="table table-striped">
 <tr>
         <th scope="col">ID</th>
          <th scope="col">Nro Producto</th>
          <th scope="col">Nome Producto</th>
          <th scope="col">Categoria</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Fornecedor</th>
          <th scope="col"></th>
          <th scope="col"></th>
</tr>
      
    <?php
   
        $sql = "DELETE  FROM stock WHERE id_stock =$id";
    

    // listar os itens do banco de dados//
    
    $sql = $pdo->query($sql);
    if($sql->rowCount()> 0){
        // verificar se houve algum resultado
        foreach($sql ->fetchAll() as $usuarios):
            ?>
            <tr>
                <td><?php echo $usuarios['id_stock']; ?></td>
                <td><?php echo $usuarios['nproducto']; ?></td>
                <td><?php echo $usuarios['producto']; ?></td>
                <td><?php echo $usuarios['categoria']; ?></td>
                <td><?php echo $usuarios['quantidade']; ?></td>
                <td><?php echo $usuarios['fornecedor']; ?></td>
                <td><a class="btn btn-warning btn-sm text-white" href="editar_producto.php?id=<?php echo $usuarios['id_stock']?>" role="button">Editar</a></td>
                <td><a class="btn btn-danger btn-sm" href="" role="button">Apagar</a></td>
             </tr>
            <?php
            endforeach;
            header("location: listar_productos.php");
        // e se houve algum resultado mostrar na tela
    }
    ?>

 </table> 
</form>
 </div>


 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>

 