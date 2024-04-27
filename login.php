<?php 
  session_start();
  $erro = "";
  if(!isset ($_POST["login"]) or ($_POST["login"]==""))
     $erro ="Preencha o login";
  elseif
  !isset ($_POST["senha"]) or ($_POST["senha"]=="")
       $erro = "Preencha a senha";
  else {
  	//tratamento de erro 
     $_login = $_POST["login"];
     $_senha = $_POST["senha"];
     if($login != "admin" or $senha != "1234") {
       $erro = "Login ou Senha invalido (s)";
     }

  
  else {
  	$_SESSION["usuario"] = "Administrador";
    }
  }
  if ($erro != "")
     header ("Location: form_login.php?erro=$erro",
             true,301);
  else 
     header ("Location: protegido.php", true,301);
 ?>                        