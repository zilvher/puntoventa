
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="../css/header.css">
<?php
include('modulos/header.php');
?>
<link rel="stylesheet" href="../css/login.css" />
<h2>Añadir Nuevo Cliente</h2>
<div class="login-container" style="height:auto; margin-top:32px;">
  <form action="../control/insNuevoCliente.php" method="post">
    <fieldset>
      <legend>Añadir Nuevo Cliente</legend>
        <input type="text" name="cliNombre" class="control-form" placeholder="Nombre del cliente">
       
        <input type="text" name="cliApePaterno" class="control-form" placeholder="Apellido paterno">
       
        <input type="text" name="cliApeMaterno" class="control-form" placeholder="Apellido materno">

        <input type="number" name="cliCI" class="control-form" placeholder="Carnet de identidad">

        <div class="group-flex">
          <label for="cliFechaNac" class="control-label">Fecha de Nacimiento: </label>
          <input type="date" name="cliFechaNac" class="control-form">
        </div>
        <p class="control-label">
          Género:
        </p>
        <div class="group-controls-flex">
          <input type="radio" name="cliGenero" value="Masculino">
          <label for="cliGenero" class="control-label">Masculino</label>
        </div>
        <div class="group-controls-flex">
          <input type="radio" name="cliGenero" value="Femenino">
          <label for="cliGenero" class="control-label">Femenino</label>
        </div>

        <input type="text" class="control-form" name="cliNroTel" placeholder="Numero de telefono">
         
        <div class="group-flex">
          <button type="button" class="btn control-form" onclick="regresar()">Cancelar</button>
          <button type="submit" class="btn control-form primary">Añadir</button>
        </div>
    </fieldset>
  </form>
</div>


<script>
  function regresar(){
    window.location.href="../clientes.php";
  }
</script>