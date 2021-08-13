
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="../css/header.css">
<?php
include('modulos/header.php');


$cli_id = $_GET['id'];
$cli_nam = $_GET['nam'];
$cli_pat = $_GET['pat'];
$cli_mat = $_GET['mat'];
$cli_ci = intval($_GET['ci']);
$cli_nac = $_GET['nac'];
$cli_gen = $_GET['gen'];
$cli_tel = $_GET['tel'];
?>
<link rel="stylesheet" href="../css/login.css" />
<h2>Actualizar cliente</h2>
<div class="login-container">
  <form action="../control/updCliente.php" method="post">
    <fieldset>
      <legend>Actualizar cliente</legend>
        <input type="hidden" name ="cliid" value="<?php echo $cli_id?> ">

        <input type="text" name="clinam" class="control-form" placeholder="Nombre" value="<?php echo $cli_nam?>" >
        
        <input type="text" name="clipat" class="control-form" placeholder="Apellido paterno" value="<?php echo $cli_pat?>" >
        
        <input type="text" name="climat" class="control-form" placeholder="Apellido materno" value="<?php echo $cli_mat?>" >
        
        <input type="number" name="clici" class="control-form" placeholder="Carnet de identidad" value="<?php echo $cli_ci?>" >
        
        <div class="group-flex">
          <label for="cliFechaNac" class="control-label">Fecha de Nacimiento: </label>
          <input type="date" name="clinac" class="control-form" value="<?php echo $cli_nac?>">
        </div>
        
          <p class="control-label">
          Género:
        </p>
        <div class="group-controls-flex">
          <input type="radio" name="cligen" value="Masculino" <?php echo($cli_gen=='Masculino')?'checked':'' ?> >
          <label for="cligen" class="control-label">Masculino</label>
        </div>
        <div class="group-controls-flex">
          <input type="radio" name="cligen" value="Femenino" <?php echo($cli_gen=='Femenino')?'checked':'' ?> >
          <label for="cligen" class="control-label">Femenino</label>
        </div>
        
        <input type="text" name="clitel" class="control-form" placeholder="Telefono" value="<?php echo $cli_tel?>" >
        
        <div class="group-flex">
          <button type="button" class="btn control-form" onclick="regresar()">Cancelar</button>

          <button type="submit" class="btn control-form primary">Actualizar</button>
        </div>
        
    </fieldset>
  </form>
</div>

<script>
  function regresar(){
    window.location.href="lstClientes.php";
  }
</script>