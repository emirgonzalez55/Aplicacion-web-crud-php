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

		<table id="tematable" class="table table-striped table-bordered table-hover">
		<tr>
		<th>ID</th>
		<th>Marca</th>
		<th>Modelo</th>
		<th>Rendimiento</th>
		<th>Editar</th>
		<th>Eliminar</th>
		</tr>
		
			<?php 
				foreach ($result as $dato) {
					?>
					<tr>
						<td class='col-md-1'><?php echo $dato->id; ?></td>
						<td class='col-md-3'><?php echo $dato->marca; ?></td>
						<td class='col-md-3'><?php echo $dato->modelo; ?></td>
						<td class='col-md-3'><?php echo $dato->rendimiento; ?></td>
						<td class='col-md-1 themed-styles-col'><a class="btn btn-secondary" href="editarchipsets.php?id=<?php echo $dato->id; ?>">Editar</a></td>
						<td class='col-md-2 themed-styles-col'><a class="btn btn-danger" href="eliminarchipsets.php?id=<?php echo $dato->id; ?>">Eliminar</a></td>
					</tr>
					<?php
				}
			?>
		</table>
<?php  
include 'base/js.php';	
?>
</body>
  
</html>
