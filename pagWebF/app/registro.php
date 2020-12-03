<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 1 de Ing. Web</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <header class="cabeceraPrincipal">
        <img class="anime" src="../imgs/cleiLogo.png" alt="Logotipo del evento">
        <h1>V Conferencia de desarrollo de software UTPL 2021</h1>
    </header>
    <nav class="menuPrincipal">
    <a href="../index.html">INICIO</a>
    <a href="../internas/ponentes.html">PONENTES</a>
        <a href="../internas/campus.html">CAMPUS</a>
        <a href="../internas/tarifas.html">TARIFAS</a>
        <a href="../internas/contactos.html">CONTACTOS</a>
        <a href="../app/registro.php">REGISTRO</a>
        <a href="../app/login.php">LOGIN</a>
    </nav>
    <main>
        <section class="contenedor">
            <h2>Formulario de registro al evento</h2>
        </section>
        <form method="post" action="guardardatos.php">
            <div class="grupoR">
                <label for="nombres">Nombres</label>
                <input type="text" id="nombres" name="nombres" placeholder="Ingrese su nombre" required>
            </div>
            <div class="grupoR">
                <label for="correo">Correo</label>
                <input type="email" id="correo" name="correo" placeholder="Ingrese su correo" required>
            </div>
             <div class="grupoR">
                <label for="dni">DNI/Cedula</label>
                <input type="text" id="dni" name="dni" placeholder="Ingrese su DNI">
            </div>
             <div class="grupoR">
                <label for="pais">Pais</label>
                <input type="text" id="pais" name="pais" placeholder="Ingrese su pais">
            </div>
             <div class="grupoR">
                <label for="ciudad">Ciudad</label>
                <input type="text" id="ciudad" name="ciudad" placeholder="Ingrese su ciudad">
            </div>
             <div class="grupoR">
                <label for="profesion">Profesion</label>
                <input type="text" id="profesion" name="profesion" placeholder="Ingrese su profesion">
            </div>
            <button type="submit" class="btnGuardar">Guardar</button>
        </form>
    </main>
    
    <footer class="piePag">
        <section class="pieIzq">
            <img src="../imgs/logo-utpl.png">
            <h3 color="green">Acerca de CLEI </h3>
    
            <p class="footer-links">
                <a href="index.html">Inicio</a> |
                <a href="internas/tarifas.html">Tarifas</a> |
                <a href="internas/contactos.html">Contáctos</a>
            </p>
        </section>
        <section class="pieCent">
            <p>Derechos Reservados UTPL 2020 by: @snrosales</p>
            <section>
                <i class=""></i>
                  <h3><strong>Contactos</strong></h3>
                 
                    <p><strong>Chair General:</strong> Armando Cabrera - UTPL</p>
                    <p></p>
                    <i class=""></i>
                <p><b>Correo:</b> clei2020@utpl.edu.ec</p>
            
                <i class=""></i>
                <p><b>Teléfono:</b> (+593) 07 3701444 ext. 2510</p>
            </section>
        </section>
        <section class="pieDer">
            <p class="company">
                <span>XLVI CONFERENCIA LATINOAMERICANA DE INFORMÁTICA</span> Ingeniería de Software | Informática y Sociedad | Educación Superior en
                Computación
            </p>
        </section>
    </footer>
</body>
</html>