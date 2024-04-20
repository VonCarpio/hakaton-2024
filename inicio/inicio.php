<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tendencias</title>
</head>
<body>
   <header>
        <?php
            $currentPage = basename($_SERVER['PHP_SELF']);
        ?>

        <nav id="header-nav">
            <a href="inicio.php" <?php if ($currentPage == 'inicio.php') echo 'class="active"'; ?>>Principal</a>
            <a href="/hakaton 2024/busqueda/busqueda.php" <?php if ($currentPage == 'busqueda.php') echo 'class="active"'; ?>>Explorar</a>
            <a href="/hakaton 2024/tendencias/tendencias.php" <?php if ($currentPage == 'tendencias.php') echo 'class="active"'; ?>>Tendencias actuales</a>
        </nav>
   </header> 

   <div class="contenedor">
        <div class="pregunta">
            <h1>Cuales son las principales <u>tendencias</u> de compra en mexico?</h1>
        </div>
        <form action="/hakaton 2024/busqueda/busqueda.php" method="get">
        <div class="busqueda">
            <input id="text "type="text" placeholder="buscar tendencias" name="men"><br>
            <button type="submit">buscar</button> 
        </div>
   </div> 
</body>
</html>