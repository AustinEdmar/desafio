<?php
 require __DIR__."/conector.php"; 

$id = $_POST['id'];

//$nproducto = $_POST['nproducto'];
$producto = $_POST['producto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];


$sql = "UPDATE `stock` SET `producto`=:producto,`categoria`= :categoria,`quantidade`= :quantidade,`fornecedor`=:fornecedor WHERE id_stock = $id";

$pegar = $pdo->prepare($sql);

$pegar->execute([':producto'=> $producto, ':categoria'=> $categoria, ':quantidade'=>$quantidade, ':fornecedor'=>$fornecedor]);

?>