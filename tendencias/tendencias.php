<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
            $currentPage = basename($_SERVER['PHP_SELF']);
        ?>
        <nav id="header-nav">
            <a href="/hakaton 2024/inicio/inicio.php" <?php if ($currentPage == 'inicio.php') echo 'class="active"'; ?>>Principal</a>
            <a href="/hakaton 2024/busqueda/busqueda.php" <?php if ($currentPage == '/busqueda.php') echo 'class="active"'; ?>>Explorar</a>
            <a href="/hakaton 2024/tendencias/tendencias.php" <?php if ($currentPage == 'tendencias.php') echo 'class="active"'; ?>>Tendencias actuales</a>
        </nav>
    </header> 
    <div class="lista">
        <div>
            <li><a href="/hakaton 2024/busqueda/busqueda.php?men=jugos">jugos</a></li>
        </div>
        <div>
            <li><a href="/hakaton 2024/busqueda/busqueda.php?men=motor">motor</a></li>
        </div>
        <div>
            <li><a href="/hakaton 2024/busqueda/busqueda.php?men=carros">carros</a></li>
        </div>
        <div>
            <li><a href="/hakaton 2024/busqueda/busqueda.php?men=telefono">telefono</a></li>
        </div>
    </div>
</body>
</html>