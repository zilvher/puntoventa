<?php
include('conexion.php');
$clisrch = $_POST['cliCI'];

$query = "SELECT * FROM clientes WHERE cli_ci='$clisrch'";

$result = mysqli_query($cnx, $query);
$row = mysqli_fetch_row($result);

var_dump($row);
/*echo "
<script>
 window.location.href='../form/frmNuevaVenta.php?row=$row';
</script>
";
*/