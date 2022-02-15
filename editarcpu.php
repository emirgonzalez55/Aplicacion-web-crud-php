<?php  
include 'base/base.php';
require 'bd.php';
$id = $_GET['id'];
$em = $conexion->prepare("SELECT * FROM procesadores WHERE id = ?;");
$em->execute([$id]);
$result = $em->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>
<head>
	<title>editar cpu</title>
</head>

<main class="form-hardware text-center">
  <form action="editarcpu1.php" method="POST" >
    <img class="mb-4" src="img/cpus.png" alt="" width="100" height="80">
    <h1 class="h3 mb-3 fw-normal">Editar cpu</h1>
    <div class="form-floating">
      <input type="text" pattern=".{1,45}" title="Maximo 45 caracteres" required name ="marca" class="form-control"  value="<?php echo $result->marca; ?>" id="floatingInput" placeholder="">
      <label for="floatingInput">Marca</label>
    </div>
    <div class="form-floating">
      <input type="text" pattern=".{1,45}" title="Maximo 45 caracteres" required name="modelo"class="form-control" value="<?php echo $result->modelo; ?>" id="floatingPassword" placeholder="">
      <label for="floatingPassword">Modelo</label>
    </div>
    <div class="form-floating">
      <input type="number" min="1" max="100" required name="rendimiento"class="form-control" value="<?php echo $result->rendimiento; ?>" id="floatingPassword" placeholder="">
      <label for="floatingPassword">Rendimiento</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" name="id" value="<?php echo $result->id; ?> type="submit" >Modificar</button>

  </form>

</body>
</html>