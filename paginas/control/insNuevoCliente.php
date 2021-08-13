<?php
include('conexion.php');

$cli_nombre = $_POST['cliNombre'];
$cli_pat = $_POST['cliApePaterno'];
$cli_mat = $_POST['cliApeMaterno'];
$cli_ci = $_POST['cliCI'];
$cli_nac = $_POST['cliFechaNac'];
$cli_gen = $_POST['cliGenero'];
$cli_tel = $_POST['cliNroTel'];

$query = "INSERT INTO clientes(cli_nombre, cli_ap_pat, cli_ap_mat, cli_ci, cli_fecha_nac, cli_gen, cli_nro_tel) VALUES ('$cli_nombre', '$cli_pat', '$cli_mat', '$cli_ci', '$cli_nac', '$cli_gen', '$cli_tel')";

$result = mysqli_query($cnx, $query);
header('location:../clientes.php');
/*echo "
<script src='js/sweetalert.js'>
  import swal from 'sweetalert';
  swal('Añadido correctamente', 'success);
  window.location.href='../productos.php';
</script> 
"; */