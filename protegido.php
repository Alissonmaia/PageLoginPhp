<?php
    session_start();
   //not set de usuário na sessão 
    if (!isset($_SESSION["usuario"]))
   	//se não tiver usuário redicionar para formulario login
      header ("Location: form_login.php", true, 301);
  //senão usuário true print page  
    else {
  ?>
  <html><body>
   	     <!-- print ola e nome do usuário -->
         <h1> olá <?php echo ($_SESSION["usuario"]) ?> </h1>
         <!-- Link para redirecionar para index -->
         <h2> <a href = "index.php"> retornar </h2>
  </body></html>
  <?php
        }
  ?>