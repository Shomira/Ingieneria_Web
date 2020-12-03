<?php
	session_start();
   if(@$_GET['salir']=="true")
   {
       // Para destruir toda variable de sesion
		session_unset();
		session_destroy(); 
     	echo "<script>location.href='../../'</script>";
   }
?>