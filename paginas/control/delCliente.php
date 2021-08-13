<?php
include('conexion.php');
$id_cli = $_GET['idcli'];
var_dump($id_cli);
$query = "DELETE FROM clientes WHERE cli_id='$id_cli'";
$result = mysqli_query($cnx, $query);
var_dump($result);
header('location:../form/lstClientes.php');