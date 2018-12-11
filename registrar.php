<?php
//llamar a la clase de conexion 
include ('conexion.php');
//recibir los datos y almacenarlos en las variables


isset($_POST['btn-enviar']);
 $nombre =    $_POST  ["nombre"];
 $apellidos = $_POST  ["apellidos"];
 $correo =    $_POST  ["correo"];
 $usuario =   $_POST  ["usuario"];
 $clave =     $_POST  ["clave"];
 $telefono =  $_POST  ["telefono"];

/*if (!$conexion) {
      die("Conexion fallida: " . mysqli_connect_error());
}
 
echo "Conexion satisfactoria";*/

//Consulta para insertar datos 
$insertar = "INSERT INTO usuarios (nombre, apellidos, correo, usuario, clave, telefono) VALUES ('$nombre', '$apellidos', '$correo', '$usuario', '$clave', '$telefono')";
 include_once ("Bienvenido.php");
//para que mande manseje si se añadio satisfactoria mente el nuevo usuario
/*if (mysqli_query($conexion, $insertar)) {
      echo "Nuevo miembro añadido satisfactoriamente";
      include_once 'Bienvenido.html';
} else {
      echo "Error: " . $insertar . "<br>" . mysqli_error($conexion);
}*/
//Cerrar la conexion a la base de datos
mysqli_close($conexion);
?>