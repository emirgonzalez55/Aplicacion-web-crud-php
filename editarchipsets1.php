<?php 

	require 'bd.php';
	$id = $_POST['id'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$rendimiento = $_POST['rendimiento'];

	$em = $conexion->prepare("UPDATE chipsets SET marca = ?, modelo = ?, rendimiento = ? WHERE id = ?;");
	$result = $em->execute([$marca,$modelo,$rendimiento, $id]);

	if ($result === TRUE) {
		header('Location: chipsets.php');
	}else{
		echo "Error";
	}
?>