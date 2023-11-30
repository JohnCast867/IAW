<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="titulo">
            <h1>Proyecto 1era avaluacion</h1>
            <h2>John castillo Villalta y Nicolas Gimenez Mansilla</h2>
        </div>
    </header>
    <nav>
        <div>
            <ul>
                <li><a class="link" href="funcion1.php">
                        Funcionalidad 1
                    </a>

                </li>
                <li><a class="link" href="funcion2.php">
                        Funcionalidad 2
                    </a>

                </li>
                <li><a class="link" href="funcion3.php">
                        Funcionalidad 3
                    </a>

                </li>
                <li><a href="conf.html">
                        Funcionalidad 4
                    </a>

                </li>
                <li><a href="altres.html">
                        Funcionalidad 5
                    </a>

                </li>
            </ul>
        </div>
    </nav>

</body>
<?php
    include 'funcion1.php';
    
    tabla($juegos);

    include 'funcion2.php';
    
    codigo($code);
?>
</html>
