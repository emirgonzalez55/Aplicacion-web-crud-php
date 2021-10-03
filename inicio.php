<?php

include 'base/base.php'
 ?>   
<!doctype html>
  <head>

    <title>Inicio</title>


  </head>
  <body>
    



<main class="container">
  <h1>Bienvenid@
    <br>
    <?php
    
      
      print_r($_SESSION['user_id']);
    

?>
  <p class="lead">Esta aplicacion web permite el acceso a una base de datos de hardware
      <br>
      Haga click en el siguiente boton para visualizar algunos datos.
    </p>
    <a class="btn btn-lg btn-primary" href="procesadores.php" role="button">Ver datos</a>
  </div>
</main>
</html>

