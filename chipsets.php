<?php  
include 'base/base.php';
require 'bd.php';
$em = $conexion->query("SELECT * FROM chipsets;");
$result = $em->fetchAll(PDO::FETCH_OBJ);	
?>

<!doctype html>
<head>
  <title>chipsets</title>
</head>
    
<body>
    <h1 class="Tablas">Listado de chipsets </h1>
    <a class='btn btn-primary boton'  href='addchipsets.php'>Añadir chipset </a>

		<table class='col-md-3 themed-estilo-col' style='border: solid 1px black;'>
		<tr>
		<th>ID</th>
		<th>Marca</th>
		<th>Modelo</th>
		<th>Rendimiento</th>
		</tr>
		
			<?php 
				foreach ($result as $dato) {
					?>
					<tr>
						<td class='col-md-3 themed-styles-col'><?php echo $dato->id; ?></td>
						<td class='col-md-3 themed-styles-col'><?php echo $dato->marca; ?></td>
						<td class='col-md-3 themed-styles-col'><?php echo $dato->modelo; ?></td>
						<td class='col-md-3 themed-styles-col'><?php echo $dato->rendimiento; ?></td>
						<td class='col-md-3 themed-styles-col'><a class="btn btn-secondary" href="editarchipsets.php?id=<?php echo $dato->id; ?>">Editar</a></td>
						<td class='col-md-3 themed-styles-col'><a class="btn btn-danger" href="eliminarchipsets.php?id=<?php echo $dato->id; ?>">Eliminar</a></td>
					</tr>
					<?php
				}
			?>
		</table>
</body>
  
</html>