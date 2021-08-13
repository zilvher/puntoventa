<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="../css/header.css">
<link rel="stylesheet" href="../css/tbllist.css">
<?php
include('modulos/header.php');
?>
<h2>Lista de productos</h2>
<div class="contain-right">
  <button class="btn" onclick="regresar()">Regresar a Productos</button>
</div >
<div style="overflow-x:auto">
  <table class="table">
    <thead>
      <tr>
        <th>Nombre del producto</th>
        <th>Precio</th>
        <th>Stock</th>
        <th class="acciones">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('../control/tblProductos.php');
      ?>
      
    </tbody>
  </table>
  
</div>
<div class="contain-right">
  <button class="btn" onclick="regresar()">Regresar a Productos</button>
</div>  

<script>
  function regresar(){
    window.location.href="../productos.php";
  }
</script>