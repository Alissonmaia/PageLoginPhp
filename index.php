<html>
<body>
    <h1> Pequeno teste com login </h1>
    <h2> <a href ="protegido.php"> protegido </a> </h2>
    <hr/>

    <?php
        session_start();
        if (isset($_SESSION ["usuario"])) {
    ?> 
    <a href = "form_login.php"> Logout </a>

    <?php
       }

    ?>
</body>
</html>
        
