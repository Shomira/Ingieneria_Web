<?php
include("seguridad/seguridad.php");
$listaRol[1] = "Administrador";
$listaRol[2] = "Editor";
$adminconexion = new clase_mysqli7;
$adminconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

$conexion = mysqli_connect("localhost", "root", "", "ingweb2021db");
mysqli_set_charset($conexion, "utf8");
$inscritos2 = "SELECT * FROM inscritos";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Adiministrador</title>
	<!-- ../ significa que sale y busca la carpeta Las hojas de estilos atacan a las etiquets o clases-->

	<link rel="stylesheet" href="../css/estilos.css">
</head>

<body>

	<!-- header para una cabecera, donde va la introduccion de la pagina-->
	<header class="cabeceraPrincipal">
		<!--Si no carga la imgaen encima del raton sale lo q dice alt-->
		<!-- el alt es para el tema de accesibilidad y usabilidad-->
		<img src="../imgs/cleiLogo.png" alt="logotipo del evento">
		<h1>V Conferencia de desarrollo de software UTPL 2021</h1>
	</header>
	<nav class="menuPrincipal">
		<a href="../index.html">INICIO</a>
		<a class="ins" href="ponentes.html">INSCRITOS</a>
		<a href="campus.html">REPORTES</a>
		<a href="tarifas.html">ESTADISTICAS</a>
		<a href="seguridad/salir.php?salir=true">CERRAR SESIÓN</a>

	</nav>

	<section class="smsAdmin">
		<h2>Bienvenid@ <?php echo $_SESSION['nombresUser']; ?></h2>
		<?php
		// concatenar
		echo  $listaRol[$_SESSION['rolUser']];
		?>
	</section>

		

	<section class="containerTable">
		<section class="titleTable"> Datos de inscritos</section>
		<section class="headerTable">id</section>
		<section class="headerTable">Nombre</section>
		<section class="headerTable">Correo</section>
		<section class="headerTable">Dni</section>
		<section class="headerTable">Pais</section>
		<section class="headerTable">Ciudad</section>
		<section class="headerTable">Profesión</section>

		<?php
		$resultado = mysqli_query($conexion, $inscritos2);
		while ($row = mysqli_fetch_assoc($resultado)) { ?>
			<!--Accede mediante php-->
			<section class="tableItem"><?php echo $row["id"]; ?></section>
			<section class="tableItem"><?php echo $row["nombres"]; ?></section>
			<section class="tableItem"><?php echo $row["correo"]; ?></section>
			<section class="tableItem"><?php echo $row["dni"]; ?></section>
			<section class="tableItem"><?php echo $row["pais"]; ?></section>
			<section class="tableItem"><?php echo $row["ciudad"]; ?></section>
			<section class="tableItem"><?php echo $row["profesion"]; ?></section>

		<?php } ?>
	</section>

	<body>


	</body>

</html>