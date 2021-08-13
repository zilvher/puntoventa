<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="../css/header.css">
<link rel="stylesheet" href="../css/tbllist.css">
<?php
include('modulos/header.php');
?>
<h2>Lista de clientes</h2>
<div class="contain-right">
  <button class="btn" onclick="regresar()">Regresar a clientes</button>
</div>
<div style="overflow-x:auto;">
  <table class="table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>C. I.</th>
        <th>Fecha de Nacimiento</th>
        <th>Genero</th>
        <th>Nro. Telefono</th>
        
        <th class="acciones">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('../control/tblClientes.php');
      ?>
      
    </tbody>
  </table>
  
</div>
<div class="contain-right">
  <button class="btn" onclick="regresar()">Regresar a clientes</button>
</div>  

<script>
  function regresar(){
    window.location.href="../clientes.php";
  }
</script>