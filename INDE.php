<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio Celina Pellier</title>
    <link rel="stylesheet" href="styles_escuela.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"> 
</head>

<body>

    <!-- Barra de navegación -->
    <nav>
    <ul class="menu">
        <li><a href="INDE.php"><i class="fas fa-home"></i> Inicio</a></li>
        <li><a href="ubicacion.php"><i class="fas fa-map-marker-alt"></i> Ubicación</a></li>
        <li><a href="https://www.instagram.com/celina.pellier/?hl=es" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
        <li><a href="contacto.php"><i class="fas fa-phone"></i> Contacto</a></li>
        <li><a href="horarios.php"><i class="fas fa-clock"></i> Horarios</a></li>

        <?php if (isset($_SESSION['usuario'])): ?>
            <li class="login-btn usuario-sesion">
                <span>👤 <?php echo htmlspecialchars($_SESSION['usuario']); ?></span>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
            </li>
        <?php else: ?>
            <li class="login-btn"><a href="login.html"><i class="fas fa-sign-in-alt"></i> Iniciar sesión</a></li>
        <?php endif; ?>

    </nav>

    <!-- Encabezado con el nombre y logo del colegio -->
    <header class="centered">
        <h1>Colegio Celina Pellier</h1>
        <img src="Imagenes/escudo1.png" alt="Logo del Colegio Celina Pellier" width="200" height="200">
    </header>

    <!-- Descripción del colegio -->
    <main>
        <section class="descripcion">
            <p class="justificado">
                La Escuela Católica-Salesiana es una institución educativa que se inspira en el legado pedagógico y espiritual de San Juan Bosco, fundador de la Congregación Salesiana. Su misión es formar a los jóvenes como buenos cristianos y honrados ciudadanos, a través de una educación integral que abarca el desarrollo académico, humano y espiritual.
            </p>
        </section>

        <!-- Galería de imágenes -->
        <section class="galeria centered">
            <img src="Imagenes/cancha.jpeg" alt="Instalaciones del Colegio Celina Pellier" class="img-galeria">
            <img src="Imagenes/ecuela.jpeg" alt="Misión Mariana en la Escuela Celina Pellier" class="img-galeria">
        </section>

        <!-- Video de presentación -->
        <section class="video centered">
            <h2>Formando buenos cristianos y honrados ciudadanos</h2>
            <div class="video-responsive">
                <iframe src="https://www.youtube.com/embed/fp9iUhfin0I?si=vnthpmVjl_ODTP3u" title="Video de presentación del colegio" frameborder="0" allowfullscreen></iframe>
            </div>
        </section>
    </main>

    <!-- Pie de página -->
    <footer class="centered">
        <p>&copy; 2025 Euris Nolasco, Yesenia Guzman. Todos los derechos reservados.</p>
    </footer>

    <!-- Botón para ir arriba -->
    <button id="btnSubir" title="Subir arriba">⬆️</button>

    <!-- Script externo -->
    <script src="script.js"></script>
</body>
</html>
