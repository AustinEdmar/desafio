<?php

include 'conector.php';
// aqui recebe o valor do producto
$nproducto = $_POST['nproducto'];
$producto = $_POST['producto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];




$sql = "INSERT INTO `stock`( `nproducto`, `producto`, `categoria`, `quantidade`, `fornecedor`) 
        VALUES ($nproducto,'$producto', '$categoria', $quantidade, '$fornecedor')";
        // so coloco em aspas o que e texto

        
 //$inserir = mysqli_query($conexao, $sql);
  $sql = $pdo->query($sql);
 
?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container" style="width: 400px; margin-top:130px">


    <h4>Producto Adicionado Sucesso!</h4>
    <div style="padding-top: 20px; margin-left:70px;">
        <a href="index.php" role="button" class="btn btn-primary">Cadastrar novo Producto</a>
    </div>
</div>



<!-- create table stock(
    id_stock int AUTO_INCREMENT,
    nproducto int not null,
    producto varchar (200) not null,
    categoria varchar(100) not null,
    quantidade int not null,
    fornecedor varchar (100) not null, 
    PRIMARY KEY (id_stock)
) -->