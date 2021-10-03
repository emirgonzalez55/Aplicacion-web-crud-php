<?php 

	require 'bd.php';
	$id = $_POST['id'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$rendimiento = $_POST['rendimiento'];

	$em = $conexion->prepare("UPDATE procesadores SET marca = ?, modelo = ?, rendimiento = ? WHERE id = ?;");
	$result = $em->execute([$marca,$modelo,$rendimiento, $id]);

	if ($result === TRUE) {
		header('Location: procesadores.php');
	}else{
		echo "Error";
	}
?>