<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>

    <link rel="stylesheet" href="loging.css">
</head>
<body background="fondos/opcion10.jpg" >
<header>
			<nav class="menu-fixed">
				<ul class="menus">
					<li><a href="Proyecto Ambiental.html">Inicio  </a></li>
					<li><a href="NOTICIAS.html">          Noticias</a>
						<ul class="submenu">
							<li><a href="bolsas.html">              Bolsas </a></li>
							<li><a href="vida marina.html">    Vida Marina</a></li>
						</ul>
					</li>
					<li><a href="Foro.html">              Foro </a></li>
					<li><a href="quienes.html">  	      Quienes somos</a></li>
                    <li><a href="inscribirse.html">  	  Inscribete</a></li>
                    <li><a href="login.php">  	          Iniciar secion</a></li>
		            <li><a href="donacion.html">  		  Donaciones</a></li>
				</ul>
	</nav>	
	</header>
   <BR><BR><BR><BR>
	<center>
	<img src="logo/liato.png" alt="">
	</center>
	</BR>
    <form action="sesion.php" method="POST">
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
        <h2>Iniciar sesión</h2>
        <p>Nombre de usuario: <br>
        <input type="text" name="usuario"></p>
        <p>Password: <br>
        <input type="password" name="clave"></p>
        <p class="center"><input type="submit" value="Iniciar Sesión"></p>
    </form>
    
</body>
</html>