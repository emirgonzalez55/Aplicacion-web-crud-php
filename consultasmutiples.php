<?php

include 'base/base.php';
require 'bd.php';
$result='';


if (!empty($_POST['consulta'])) {  
  $nombre = '%'.$_POST['consulta'].'%';
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $em = $conexion->prepare('SELECT * FROM procesadores WHERE modelo LIKE :consulta OR marca LIKE :consulta UNION
  SELECT * FROM graficas WHERE modelo LIKE :consulta OR marca LIKE :consulta UNION
  SELECT * FROM chipsets WHERE modelo LIKE :consulta OR marca LIKE :consulta');
  $em->bindParam(':consulta', $nombre);
  $em->execute();



  $result = $em->fetchAll(PDO::FETCH_OBJ);


    if($result) {
      $message='Resultados de la busqueda.';
      $tabla ='<tr>
      <th>ID</th>
      <th>Marca</th>
      <th>Modelo</th>
      <th>Rendimiento</th>
      </tr>';
   } else  {
     $message='No hay resultados que coincidan con la busqueda';;
   }
    
  }
?>

<!doctype html>
  <head>
    <title>resultado</title>
  </head>

  <body>
    <h1 class="Tablas">
    <?php if(!empty($message)):?>
      <?= $message ?><br>
    <?php endif; ?>

    </h1>
		<table id="tematable" class="table table-striped table-bordered table-hover">
    <?php if(!empty($tabla)):?>
      <?= $tabla ?>
    <?php endif; ?>
		
			<?php 
      if (is_array($result) || is_object($result)){

     
				foreach ($result as $dato) {
					?>
					<tr>
						<td class='col-md-1'><?php echo $dato->id; ?></td>
						<td class='col-md-3'><?php echo $dato->marca; ?></td>
						<td class='col-md-3 '><?php echo $dato->modelo; ?></td>
						<td class='col-md-3 '><?php echo $dato->rendimiento; ?></td>
					</tr>
					<?php
				}
      }
			?>
		</table>
<?php  
include 'base/js.php';	
?>
</body>

</html>

