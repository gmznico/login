<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="custom.css">
  <title>Trabajo Práctico III</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <h2 class="title">Trabajo práctico III <br> Formularios con PHP</h2>
  </header>
  <main>
      <form action="validacion.php" method="POST" class="form-register">
        <h4>Iniciar sesión</h4>
        <input class="controls" type="text" name="nick" id="usuario" placeholder="Ingrese su Usuario">
        <input class="controls" type="password" name="password" id="correo" placeholder="Ingrese su Contraseña">
      <div class="error">
        <?php  
          if(isset($_GET['error'])){
            $error = $_GET['error'];
          if ($error == "incorrecto") {
            echo "<h4>Datos incorrectos</h4>";
          }
          if ($error == "vacio") {
            echo "<h4>Campos vacios</h4>";
            }
          }
        ?>
      </div>
        <input class="botons" type="submit" value="Ingresar">
        <p><a href="register.php">¿Aún no tiene una cuenta?</a></p>
      </form>
  </main>
  <footer class="footer">
        <h3>Nicolás Gómez</h3>
        <p>Laboratorio II <br> 1er Año</p>
  </footer>
    
</body>
</html>