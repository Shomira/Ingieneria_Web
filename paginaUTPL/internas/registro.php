<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba IngWeb</title>
    <!-- Las hojas de estilos atacan a las etiquets o clases-->
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <!-- header para una cabecera, donde va la introduccion de la p[agina-->
    <header class="cabeceraPrincipal">
        <!--Si no carga la imgaen encima del raton sale lo q dice alt-->
        <!-- el alt es para el tema de accesibilidad y usabilidad-->
        <img src="img/es.png" alt="logotipo del evento">
        <h1>UNIVERSIDAD TECNICA PARTICULAR DE LOJA</h1>
    </header>

    <!--Class es mas usado en css-->
    <section class="sliderPrincipal">

        <img src="img/utpl3.jpg" alt="Logo Universidad UTPL">
        <h1>UTPL</h1>
    </section>
    <div id="navegador">
        <ul>
            <li>
                <h3><a href="Menu.html">Inicio</a></h3>
            </li>
            <li>
                <h3><a href="internas/Ponentes.html">Ponentes</a></h3>
            </li>
            <li>
                <h3><a href="#">Tarifas</a></h3>
            </li>
            <li>
                <h3><a href="#">Registro</a></h3>
            </li>
            <li>
                <h3><a href="#">Contactos</a></h3>
            </li>
        </ul>
    </div>
   
    <div class="videoMatricula" style="text-align:center">
        <video src="videos/matricula.mp4" width="640" height="480" controls></video>
        <video  src="videos/Publicidad.mp4" poster="img/utpl3.jpg" width="640" height="480" controls></video>
    </div>
    </div>


    <!--los id son propios de java script-->

    <!-- se coloca donde no se modifica la informacion publicidad-->
    <aside>
        Imagen de publicidad
    </aside>
    <footer>
        <h6>Derechos reservados UTPL 2020 by:@Snrosales</h6>
    </footer>
</body>

</html>