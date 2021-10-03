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
    <?php if(!empty($message)):  ?>
        <?= $message ?>
            <br>
    <?php endif; ?>

    </h1>
		<table class='col-md-3 themed-estilo-col' style='border: solid 1px black;'>
		<tr>
		<th>ID</th>
		<th>Marca</th>
		<th>Modelo</th>
		<th>Rendimiento</th>
		</tr>
		
			<?php 
      if (is_array($result) || is_object($result)){

     
				foreach ($result as $dato) {
					?>
					<tr>
						<td class='col-md-3 themed-styles-col'><?php echo $dato->id; ?></td>
						<td class='col-md-3 themed-styles-col'><?php echo $dato->marca; ?></td>
						<td class='col-md-3 themed-styles-col'><?php echo $dato->modelo; ?></td>
						<td class='col-md-3 themed-styles-col'><?php echo $dato->rendimiento; ?></td>
					</tr>
					<?php
				}
      }
			?>
		</table>
</body>


</html>

