<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepe</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <h1>Formulario</h1>

    <form action="../controlador/ingreso.php" method="post">    
        <div class="caja">
            <label for="uname"><b>Nombre</b></label>
            <input type="text" placeholder="Ingreso de nombre" name="uname" required>

            <label for="psw"><b>Contraseña</b></label>
            <input type="password" placeholder="Ingreso de contraseña" name="psw" required>

            <label for="email"><b>email</b></label>
            <input type="email" placeholder="Ingreso de email" name="email" required>

            <button type="submit">register</button>
        </div>
    </form>
</body>
</html>