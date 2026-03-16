<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="index.css"> 
    </head>
<body>

<h2>HTML Forms</h2>
<div class="div">

<form action="servidor.php" method="POST">
  <label for="fname">primer nombre:</label><br>
  <input type="text" id="fname" name="fname" ><br>

  <label for="lname">apellido:</label><br>
  <input type="text" id="lname" name="lname" ><br><br>

  <label for="lname">correo:</label><br>
  <input type="email" id="lname" name="email" ><br><br>

  
  <label for="lname">contraseña:</label><br>
  <input type="password" id="lname" name="password" ><br><br>

  <input type="submit" value="enviar">
</form> 
</div>
<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

