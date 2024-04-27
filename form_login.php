<html>
<body>
  <h1> Login do Usuario </h1>
  <?php
     if (isset($_GET["erro"]))
        echo (. $_GET ['erro']);
	
  ?>
  <hr>
    <form action ="login.php" method ="post">
      <p>login:<input type="text" name="login" /></p>
      <p>senha:<input type="password" name ="senha" /></p>
      <input type = "submit" value ="enviar"/>
    </form>
</body>
</html>        