<?php
include('conexion.php');
$id_prod = $_POST['prdId'];
$nam_prod = $_POST['prdName'];
$prc_prod = floatval($_POST['prdPrice']);
$stk_prod = intval($_POST['prdStock']);

$query = "UPDATE productos SET prd_nombre = '$nam_prod', prd_precio = '$prc_prod', prd_stock = '$stk_prod' WHERE prd_id = '$id_prod'";
$result = mysqli_query($cnx, $query);

header('location:../form/lstProductos.php');


