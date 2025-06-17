<?php
session_start();
include "../conexion.php";

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

$sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE nickname = '$usuario' AND contraseña = '$pass'");

if(mysqli_num_rows($sql)>0){
    $_SESSION['codlog'] = $usuario;
    header("Location: ../registrar/index.php");

    exit;
}else{
    echo '<script> 
                alert("usuario/Contraseña Invalidos");
                window.location = "login.php";
            </script>
    ';
}
?>