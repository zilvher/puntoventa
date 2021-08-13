
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="../css/header.css">
<?php
include('modulos/header.php');
?>
<link rel="stylesheet" href="../css/login.css" />
<h2>Añadir Nuevo Producto</h2>
<div class="login-container">
  <form action="../control/insNuevoProducto.php" method="post">
    <fieldset>
      <legend>Añadir Nuevo Producto</legend>
        <input type="text" name="prdName" class="control-form" placeholder="Nombre del producto">
       
        <input type="number" name="prdPrice" class="control-form" placeholder="Precio" step="0.01">
       
        <input type="number" name="prdStock" class="control-form" placeholder="Stock">
         
         <div class="group-flex">
          <button type="button" class="btn control-form" onclick="regresar()">Cancelar</button>
          <button type="submit" class="btn control-form primary">Añadir</button>
        </div>
    </fieldset>
  </form>
</div>


<script>
  function regresar(){
    window.location.href="../productos.php";
  }
</script>