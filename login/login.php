<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>REGISTRO DE ESTUDIANTE</title>
    </head>
<body>
<div class="login-container">REGISTRO ESTUDIANTE
    <div class="neon-frame">
        <div class="neon-corner top-left"></div>
        <div class="neon-corner top-right"></div>
        <div class="neon-corner bottom-left"></div>
        <div class="neon-corner bottom-right"></div>
    </div>
    <h2>INICIA SESIÓN</h2>
    <form action="verificar.php" method="post">
        <div class="input-box">
            <input type="text" name="usuario" required>
            <label>USUARIO</label>
        </div>
        <div class="input-box">
            <input type="password" name="pass" required>
            <label>CONTRASEÑA</label>
        </div>
        <button type="submit" class="neon-button">INICIAR</button>
    </form>
</div>
</body>
</html>