<?php
include('conexion.php');

$prdsrch = $_POST["prdsrch"];

$query = "SELECT * FROM productos WHERE prd_nombre LIKE '%$prdsrch%'";

$result = mysqli_query($cnx, $query);

while($arrresult = mysqli_fetch_array($result)){
  echo "
  <tr>
    <td>".$arrresult[1]."</td>
    <td>".$arrresult[2]."</td>
    <td>".$arrresult[3]."</td>
    <td class='acciones'>
      <a href='frmEditarProducto.php?idprd=$arrresult[0]&namprd=$arrresult[1]&prcprd=$arrresult[2]&stkprd=$arrresult[3]' class='link-table'>
       &#9997;
      </a>
      <a href='../control/delProducto.php?idprd=$arrresult[0]' class='link-table'>
       &#10060;
      </a>
    </td>
  </tr>
  ";
  
}
