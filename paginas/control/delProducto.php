<?php
include('conexion.php');
$id_prod = $_GET['idprd'];
var_dump($id_prod);
$query = "DELETE FROM productos WHERE prd_id='$id_prod'";
$result = mysqli_query($cnx, $query);
var_dump($result);
header('location:../form/lstProductos.php');