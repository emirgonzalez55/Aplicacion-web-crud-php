<?php
  include 'base/base.php';
  require 'bd.php';

  $message = ''; 

  if (!empty($_POST['marca']) && !empty($_POST['modelo']) && !empty($_POST['rendimiento']) ) {
    $sql = "INSERT INTO procesadores (marca, modelo, rendimiento) VALUES (:marca, :modelo, :rendimiento)";
    $em = $conexion->prepare($sql);
    $em->bindParam(':marca', $_POST['marca']);
    $em->bindParam(':modelo', $_POST['modelo']); 
    $em->bindParam(':rendimiento', $_POST['rendimiento']);


    if ($em->execute()) {
      $message = 'Procesador añadido correctamente';
    } else {
      $message = 'Error detectado';
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>nuevo cpu</title>
  </head>
   
<main class="form-hardware text-center">
  <form action="addcpu.php" method="POST" >
    <img class="mb-4" src="img/cpus.png" alt="" width="100" height="80">
    <h1 class="h3 mb-3 fw-normal " >Complete el formulario para añadir un precesador</h1>
    <div class="form-floating">
      <input type="text" pattern=".{1,45}" title="Maximo 45 caracteres" required name ="marca" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Marca</label>
    </div>
    <div class="form-floating">
      <input type="text" pattern=".{1,45}" title="Maximo 45 caracteres" required name="modelo"class="form-control" id="floatingPassword" placeholder="">
      <label for="floatingPassword">Modelo</label>
    </div>
    <div class="form-floating">
      <input type="number"  min="1" max="100" required name="rendimiento"class="form-control" id="floatingPassword" placeholder="">
      <label for="floatingPassword">Rendimiento</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Añadir</button>
    <main class="mensaje">
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>   
    <?php endif; ?>
    <main>
  </form>
</main>
<?php  
include 'base/js.php';	
?>
</body>




</html>

  
