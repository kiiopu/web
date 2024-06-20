<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MIN CAFÉ</title>
    <link rel="Stylesheet" href="min.css">
</head>
<body>
    <header class="header">
        <div class="menu container">
            <div class="logo">CAFE MIN</div>
            <nav class="navbar">
                <ul>
                    <li><a href="CafeMin.php">Inicio</a></li>
                    <li><a href="Servicio.php">Servicios</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content">
            <h1>Bienvenidos</h1>
            <p>Disfruta de nuestros servicios y productos exclusivos.</p>
        </div>
    </header>

    <div class="container">
        <div class="form-container">
            <h1>Contacto</h1>
            <form method="post">
                <input type="text" name="name" placeholder="Nombre completo">
                <input type="email" name="email" placeholder="Email">
                <input type="submit" name="register" value="Registrar">
            </form>
            <?php 
                include("registrar.php");
            ?>
        </div>
    </div>
</body>
</html>