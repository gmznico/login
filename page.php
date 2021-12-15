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
<body id="body-page">
	<div class="correcto">
        <?php  
          if(isset($_GET['correcto'])){
            echo "<h1>Ingresó Correctamente</h1>";
          }
        ?>
      </div>
    <header id="header-page">
    	<div class="menu">
      		<img src="img/logo.png" class="logo">
      		<nav class="nav">
          		<ul>
           			<li><h3><a href="#">Inicio</a></h3></li>
           	 		<li><h3><a href="#">UTN</a></h3></li>
            		<li><h3><a href="#">Servicios</a></h3></li>
            		<li><h3><a href="#">Blog de empresa</a></h3></li>
            		<li><h3><a href="index.php">Deslogearse</a></h3></li>
          		</ul>
      		</nav>
    	</div>
 	</header>
</body>
</html>