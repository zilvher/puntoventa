
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="../css/header.css">
<?php
include('modulos/header.php');
$id_prod = $_GET['idprd'];
$nam_prod = $_GET['namprd'];
$prc_prod = floatval($_GET['prcprd']);
$stk_prod = intval($_GET['stkprd']);


?>
<link rel="stylesheet" href="../css/login.css" />

<h2>Actualizar Producto</h2>
<div class="login-container">
  <form action="../control/updProducto.php" method="post">
    <fieldset>
      <legend>Actualizar Producto</legend>
        <input type="hidden" name ="prdId" value="<?php echo $id_prod?> ">

        <input type="text" name="prdName" class="control-form" placeholder="Nombre del producto" value="<?php echo $nam_prod?>" >
        
        <input type="number" name="prdPrice" class="control-form" placeholder="Precio" step=".01" value="<?php echo $prc_prod?>" >
        
        <input type="number" name="prdStock" class="control-form" placeholder="Stock" value="<?php echo $stk_prod?>" >
        
        <div class="group-flex">
          <button type="button" class="btn control-form" onclick="regresar()">Cancelar</button>

          <button type="submit" class="btn control-form primary">Actualizar</button>
        </div>
        
    </fieldset>
  </form>
</div>

<script>
  function regresar(){
    window.location.href="lstProductos.php";
  }
</script>