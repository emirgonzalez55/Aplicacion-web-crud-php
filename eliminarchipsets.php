<?php  
	if (!isset($_GET['id'])) {
		exit();
	}

	$id = $_GET['id'];
	include 'bd.php';
	$em = $conexion->prepare("DELETE FROM chipsets WHERE id = ?;");
	$result = $em->execute([$id]);

	if ($result === TRUE) {
		header('Location: chipsets.php');
	}else{
		echo "Error";
	}

?>