<?php

  require 'bd.php';

  $message = ''; 

  if (!empty($_POST['nombre']) && !empty($_POST['password'])) {
    $em = $conexion->prepare('SELECT nombre FROM usuarios WHERE nombre = :nombre');
    $em->bindParam(':nombre', $_POST['nombre']);
    $em->execute();
    $results = $em->fetch(PDO::FETCH_ASSOC); 
    if($results == 0){ 
      if( $_POST['password'] == $_POST['password1']){
        $sql = "INSERT INTO usuarios (nombre, password) VALUES (:nombre, :password)";
        $em = $conexion->prepare($sql);
        $em->bindParam(':nombre', $_POST['nombre']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $em->bindParam(':password', $password);

    if ($em->execute()) {
      $message = 'Usuario creado con exito <br>
      <a href="index.php">Inciar sesion </a></p>';
    } else {
      $message = 'Error detectado';
    }
  }else{
    $message = '¡Las contraseñas no coinciden!';
  }
 }else{
   $message = '¡El usuario ya existe!';
 }
}
?>
<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>registro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>   

    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body class="text-center" id="modooscuro">
    
<main class="form-signin">
  <form action="registrar.php" method="POST" >
    <img class="mb-4" src="img/login.png" alt="" width="100" height="100">
    <h1 class="h3 mb-3 fw-normal">Complete el formulario para registrarse</h1>

    <div class="form-floating">
      <input type="text" name ="nombre" required class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Nombre de usuario</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" required class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Contraseña</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password1" pattern="[A-Za-z0-9_-]{4,15}" title="Minimo 4 caracteres" required class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Repita la contraseña</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button>
    <main class="mensaje">
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
        
    <?php endif; ?>
    <main>
  </form>
</main>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">CPUS</a>
    <ul class="navbar-nav me-auto mb-2 mb-md-0">
      </ul>
</nav>


<?php  
include 'base/js.php';	
?>
</body>
<html>
  


  