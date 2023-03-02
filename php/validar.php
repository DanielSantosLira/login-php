<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if($usuario == "Daniel Santos Pereira Lira" &&  $senha == 128962){
    header("location:painel.php");
}else{
    header("location:usuario-invalido.php");
}


?>