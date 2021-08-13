<?php
include('conexion.php');

$prd_name = $_POST['prdName'];
$prd_price = $_POST['prdPrice'];
$prd_stock = $_POST['prdStock'];


$query = "INSERT INTO productos(prd_nombre, prd_precio, prd_stock) VALUES ('$prd_name', $prd_price, $prd_stock)";
$result = mysqli_query($cnx, $query);
header('location:../productos.php');
/*echo "
<script src='js/sweetalert.js'>
  import swal from 'sweetalert';
  swal('Añadido correctamente', 'success);
  window.location.href='../productos.php';
</script> 
"; */