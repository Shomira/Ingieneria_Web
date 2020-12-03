<?php

extract($_POST);
// md5 Funcion de encriptacion
$clave=md5($clave);

session_start();


include("../dll/config.php");
include("../dll/class_mysqli_7.php");

$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$miconexion->consulta("select * from usuarios where usuario='$usuario' and clave='$clave'");
// retorna todo el valor si encontro ese usuario
$listaUser=$miconexion->consulta_lista();

if (!$listaUser[0]) {
	echo '<script>alert("Error de Ingreso...");</script>';
	echo "<script>location.href='../'</script>";
}else{
	// las variables sesions e declaran una sola vez en el navegador
	// Para aplicar seguridad a nuestra aplicacion
	$_SESSION['autentificado'] = TRUE;
	$_SESSION['nombresUser'] = $listaUser[1];
	// que tipo de rol es
    $_SESSION['rolUser'] = $listaUser[5];
    $_SESSION['local_path'] = $local_path;
    // salgase y vaya a la carpeta admin y vaya a index.php
}
if ($_SESSION['rolUser']==1) {
	echo "<script>location.href='../admin/index.php'</script>";
}
// si la variable de sesion rol es igual a 2
if ($_SESSION['rolUser']==2) {
	echo "<script>location.href='../admin/index.html'</script>";

}

?>
