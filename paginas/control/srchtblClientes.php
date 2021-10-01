<?php
include('conexion.php');

$clisrch = $_POST['clisrch'];

$query = "SELECT * FROM clientes WHERE cli_nombre LIKE '%$clisrch%' OR cli_ap_pat LIKE '%$clisrch%' OR cli_ap_mat LIKE '%$clisrch%' OR cli_ci LIKE '%$clisrch%'";

$result = mysqli_query($cnx, $query);

while($arrresult = mysqli_fetch_array($result)){
  echo "
  <tr>
    <td>".$arrresult[1]."</td>
    <td>".$arrresult[2]."</td>
    <td>".$arrresult[3]."</td>
    <td>".$arrresult[4]."</td>
    <td>".$arrresult[5]."</td>
    <td>".$arrresult[6]."</td>
    <td>".$arrresult[7]."</td>
    <td class='acciones'>
      <a href='frmEditarCliente.php?id=$arrresult[0]&nam=$arrresult[1]&pat=$arrresult[2]&mat=$arrresult[3]&ci=$arrresult[4]&nac=$arrresult[5]&gen=$arrresult[6]&tel=$arrresult[7]' class='link-table'>
       &#9997;
      </a>
      <a href='../control/delCliente.php?idcli=$arrresult[0]' class='link-table'>
       &#10060;
      </a>
    </td>
  </tr>
  ";
  
}
