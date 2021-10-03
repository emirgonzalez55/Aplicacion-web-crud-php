<?php 

	require 'bd.php';
	$id = $_POST['id'];
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
?>