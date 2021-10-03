<?php
  include 'base/base.php';
  require 'bd.php';

  $message = ''; 

  if (!empty($_POST['marca']) && !empty($_POST['modelo']) && !empty($_POST['rendimiento']) ) {
    $sql = "INSERT INTO chipsets (marca, modelo, rendimiento) VALUES (:marca, :modelo, :rendimiento)";
    $em = $conexion->prepare($sql);
    $em->bindParam(':marca', $_POST['marca']);
    $em->bindParam(':modelo', $_POST['modelo']); 
    $em->bindParam(':rendimiento', $_POST['rendimiento']);


    if ($em->execute()) {
      $message = 'Chipset añadido correctamente';
    } else {
      $message = 'Error detectado';
    }
  }
?>
<!doctype html>>
<head>
  <title>nuevo chipset</title> 
</head>
    
<main class="form-signin text-center">
  <form action="addchipsets.php" method="POST" >
    <img class="mb-4" src="img/cpus.png" alt="" width="100" height="80">
    <h1 class="h3 mb-3 fw-normal">Complete el formulario para añadir un chipset</h1>
    <br>
    <div class="form-floating">
      <input type="text" required name ="marca" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Marca</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="text" required name="modelo"class="form-control" id="floatingPassword" placeholder="">
      <label for="floatingPassword">Modelo</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="number" required name="rendimiento"class="form-control" id="floatingPassword" placeholder="">
      <label for="floatingPassword">Rendimiento</label>
    </div>
    <br>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Añadir</button>
    <main class="mensaje">
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>   
    <?php endif; ?>
    <main>
  </form>
</main>

</html>

  
