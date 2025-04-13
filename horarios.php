<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios - Colegio Celina Pellier</title>
    <link rel="stylesheet" href="styles_escuela.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">    
</head>

<body>
    <nav>
    <ul class="menu">
        <li><a href="index.php"><i class="fas fa-home"></i> Inicio</a></li>
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
    </ul>
    </nav>

    <main>
        <section>
            <h3>Horarios de Atención:</h3>
            <!-- Tabla de horarios -->
            <table class="horarios-table">
                <thead>
                    <tr>
                        <th>Día</th>
                        <th>Horario</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lunes</td>
                        <td>7:00 a. m. – 6:00 p. m.</td>
                    </tr>
                    <tr>
                        <td>Martes</td>
                        <td>7:00 a. m. – 6:00 p. m.</td>
                    </tr>
                    <tr>
                        <td>Miércoles</td>
                        <td>7:00 a. m. – 6:00 p. m.</td>
                    </tr>
                    <tr>
                        <td>Jueves</td>
                        <td>7:00 a. m. – 6:00 p. m.</td>
                    </tr>
                    <tr>
                        <td>Viernes</td>
                        <td>7:00 a. m. – 6:00 p. m.</td>
                    </tr>
                    <tr>
                        <td>Sábado</td>
                        <td>Cerrado</td>
                    </tr>
                    <tr>
                        <td>Domingo</td>
                        <td>Cerrado</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <footer class="centered">
        <p>&copy; 2025 Euris Nolasco, Yesenia Guzman. Todos los derechos reservados.</p>
    </footer>

    <button id="btnSubir" title="Subir arriba">⬆️</button>
    <script src="script.js"></script>
</body>
</html>
