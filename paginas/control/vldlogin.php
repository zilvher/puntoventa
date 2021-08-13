 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
      import swal from 'sweetalert';
  </script>
<?php
include("conexion.php");

$user = $_POST['user'];
$pass = $_POST['pass'];

//var_dump($user);
//var_dump($pass);

$query = "SELECT * FROM usuarios WHERE usr_name='$user' AND usr_pass='$pass'";

$res = mysqli_query($cnx, $query);
//var_dump($res);
$row = mysqli_fetch_row($res);
echo "<br>";
//var_dump($row);
if ($row > 0) {
header('location:../productos.php');
} else {
  header('location:../login.php');
}
 /* echo "<script>
          swal('Bienvenido al sistema Punto Venta', 'success');
        </script>";/*
  
        /*  setTimeout(function(){
            window.location.href='../productos.php';
          },1000); */