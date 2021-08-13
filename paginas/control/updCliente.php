<?php
include('conexion.php');
$cliid = $_POST['cliid'];
$clinam = $_POST['clinam'];
$clipat = $_POST['clipat'];
$climat = $_POST['climat'];
$clici = $_POST['clici'];
$clinac = $_POST['clinac'];
$cligen = $_POST['cligen'];
$clitel = $_POST['clitel'];

$query = "UPDATE clientes SET cli_nombre='$clinam', cli_ap_pat='$clipat', cli_ap_mat='$climat', cli_ci='$clici', cli_fecha_nac='$clinac', cli_gen='$cligen', cli_nro_tel='$clitel' WHERE cli_id='$cliid'";
$result = mysqli_query($cnx, $query);
header('location:../form/lstClientes.php');