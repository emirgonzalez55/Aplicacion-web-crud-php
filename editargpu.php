<?php  
include 'base/base.php';
require 'bd.php';
$id = $_GET['id'];
$em = $conexion->prepare("SELECT * FROM graficas WHERE id = ?;");
$em->execute([$id]);
$result = $em->fetch(PDO::FETCH_OBJ);

if (isset($_POST['submit'])) {
$id = $_POST['submit'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$rendimiento = $_POST['rendimiento'];

$em = $conexion->prepare("UPDATE graficas SET marca = ?, modelo = ?, rendimiento = ? WHERE id = ?;");
$result = $em->execute([$marca,$modelo,$rendimiento, $id]);

if ($result === TRUE) {
  header('Location: graficas.php');
}else{
  echo "Error";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>editar gpu</title>

</head>
<body class="">
<main class="form-hardware text-center">
  <form action="editargpu.php" method="POST" >
    <img class="mb-4" src="img/cpus.png" alt="" width="100" height="80">
    <h1 class="h3 mb-3 fw-normal">Editar gpu</h1>
    <div class="form-floating">
      <input type="text" pattern=".{1,45}" title="Maximo 45 caracteres" required name ="marca" class="form-control"  value="<?php echo $result->marca; ?>" id="floatingInput" placeholder="">
      <label for="floatingInput">Marca</label>
    </div>
    <div class="form-floating">
      <input type="text" pattern=".{1,45}" title="Maximo 45 caracteres" required name="modelo"class="form-control" value="<?php echo $result->modelo; ?>" id="floatingPassword" placeholder="">
      <label for="floatingPassword">Modelo</label>
    </div>
    <div class="form-floating">
      <input type="number"  min="1" max="100" required name="rendimiento"class="form-control" value="<?php echo $result->rendimiento; ?>" id="floatingPassword" placeholder="">
      <label for="floatingPassword">Rendimiento</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" name="submit" value="<?php echo $result->id; ?> type="submit" >Modificar</button>
  </form>
<?php  
include 'base/js.php';	
?>
</body>
</html>