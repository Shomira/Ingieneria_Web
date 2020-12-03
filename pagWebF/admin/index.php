<?php
include("seguridad/seguridad.php");
$listaRol[1]="Administrador";
$listaRol[2]="Editor";
$adminconexion = new clase_mysqli7;
$adminconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

// concatenar
echo "Bienvenido: ".$_SESSION['nombresUser'];
echo "<br>ud es un ".$listaRol[$_SESSION['rolUser']];
// salir a 
echo "<a href='seguridad/salir.php?salir=true'>Cerrar sesion</a>";


echo "<br>";
// si la variable de sesion rol es igual a 2
if ($_SESSION['rolUser']==1) {
	echo "<a href='#'>Inicio</a>";
	echo "<a href='#'>Usuarios</a>";
	echo "<a href='#'>Reportes</a>";
	echo "<a href='#'>Estadisticas</a>";
}
if ($_SESSION['rolUser']==2) {
	echo "<a href='#'>Inicio</a>";
	echo "<a href='#'>Reportes</a>";

}

$adminconexion->consulta("select * from inscritos");
$adminconexion->verconsulta();
?>
<?php
$conexion = mysqli_connect("localhost", "root", "","ingweb2021db");
mysqli_set_charset($conexion,"utf8");
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
    
    <!-- header para una cabecera, donde va la introduccion de la p[agina-->
    <header class="cabeceraPrincipal">
        <!--Si no carga la imgaen encima del raton sale lo q dice alt-->
        <!-- el alt es para el tema de accesibilidad y usabilidad-->
        <img src="../imgs/cleiLogo.png" alt="logotipo del evento">
        <h1>V Conferencia de desarrollo de software UTPL 2021</h1>
    </header>
    <nav class="menuPrincipal">
        <a href="../index.html">INICIO</a>
        <a href="ponentes.html">PONENTES</a>
        <a href="campus.html">CAMPUS</a>
        <a href="tarifas.html">TARIFAS</a>
        <a href="contactos.html">CONTACTOS</a>
        <a href="../app/registro.php">REGISTRO</a>
        <a href="../app/login.php">LOGIN</a>
              
	</nav>
	<section class="headerTable"> Datos de inscritos</section>
     <section class="containerTable">
		 <section class="headerTable">id</section>
		 <section class="headerTable">Nombre</section>
		 <section class="headerTable">Dni</section>
		 <section class="headerTable">Pais</section>
		 <section class="headerTable">Ciudad</section>
		 <section class="headerTable">Profesión</section>
		 <?php
			$resultado = mysqli_query($conexion, $inscritos2);
		
		while($row=mysqli_fetch_assoc($resultado)){ ?>
		<!--Accede mediante php-->
		<section class="tableItem"><?php echo $row["id"];?></section>
		<section class="tableItem"><?php echo $row["nombres"];?></section>
		<section class="tableItem"><?php echo $row["dni"];?></section>
		<section class="tableItem"><?php echo $row["pais"];?></section>
		<section class="tableItem"><?php echo $row["ciudad"];?></section>
		<section class="tableItem"><?php echo $row["profesion"];?></section>
		
		
	 
	 <?php } ?>
	</section>
<body>


</body>
</html>
