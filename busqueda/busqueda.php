<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorar - Tendencias</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<header>
    <?php
        $currentPage = basename($_SERVER['PHP_SELF']);
    ?>
    <nav id="header-nav">
        <a href="/hakaton 2024/inicio/inicio.php" <?php if ($currentPage == 'inicio.php') echo 'class="active"'; ?>>Principal</a>
        <a href="/hakaton 2024/busqueda/busqueda.php" <?php if ($currentPage == 'busqueda.php') echo 'class="active"'; ?>>Explorar</a>
        <a href="/hakaton 2024/tendencias/tendencias.php" <?php if ($currentPage == 'tendencias.php') echo 'class="active"'; ?>>Tendencias actuales</a>
    </nav>
</header> 
    
<div class="contenedorPrin">
    <div class="item">
        <?php 
            if (isset($_GET['men'])) {
                $item = $_GET['men'];
                echo "<p id='p'>$item</p>";
            } 
            else {
                
                echo '<form action="" method="get" id="searchForm">
                        <div id="text"> <input type="text" placeholder="Añadir término de búsqueda" name="men" id="men" required></div>
                      </form>';
            }
            if (isset($_GET['men'])) {
                $item = $_GET['men'];
            }
            
            
        ?>
    </div>

    <div class="grafica">
    <img href="img" src="grafica.jpg">
    </div>
</div>
<script src="main.js"></script>
</body>
</html>
