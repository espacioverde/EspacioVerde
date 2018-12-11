<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
</head>
<body background="enredaderas/opcion1.jpg" >
		<header>
			<nav class="menu-fixed">
				<ul class="menu">
                    <li><a href="home.php">Home </a></li>
					<li><a href="Index.html">Inicio  </a></li>
					<li><a href="NOTICIAS.html">          Noticias</a>
						<ul class="submenu">
							<li><a href="bolsas.html">              Bolsas </a></li>
							<li><a href="vida marina.html">    Vida Marina</a></li>
						</ul>
					</li>
					<li><a href="Foro.html">              Foro </a></li>
					<li><a href="quienes.html">  	      Quienes somos</a></li>
                    <li><a href="inscribirse.html">  	  Inscribete</a></li>
                    <li><a href="login.php">  	          Iniciar sesion</a></li>
		            <li><a href="donacion.html">  		  Donaciones</a></li>
		            <li class="cerrar-sesion"><a href="logout.php">Cerrar sesión</a></li>
				</ul>
	</nav>	
	</header>
   <BR><BR><BR><BR>
    <center>
	<img src="logo/liato.png" alt="">
	</BR>
    <section>
       <div class="contenedor2">
        <h1>BIENVENIDO 
        <?php echo $user->getNombre();  ?></h1>
        </div>
    </section>
    </center>
</body>
</html>