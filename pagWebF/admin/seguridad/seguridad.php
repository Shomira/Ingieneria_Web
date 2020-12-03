<?php
// levanto al sesion
    @session_start();
    // si estan declaradas todas las variables, me cargue los archivos que tienen
    // que ver con la base de datos, sino lo bota fuera
	if(@$_SESSION['autentificado'] && $_SESSION['nombresUser'] && $_SESSION['rolUser']){
        // variable de sesion local pad
        include($_SESSION['local_path']."/dll/config.php"); 
        
		include($_SESSION['local_path']."/dll/class_mysqli_7.php");
		$miconexion = new clase_mysqli7;
		$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
	}else{
		echo "<script>location.href='../'</script>";
	}


?>