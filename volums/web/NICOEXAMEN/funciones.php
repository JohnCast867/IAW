<?php

function generarHTML() {
    $html = '<header>

    </header>
    <nav>
        <div>
            <ul>
                <li><a class="link" href="index.php">INICI</a></li>
                <li><a class="link" href="alta.php">funcio1</a></li>
                <li><a class="link" href="eliminacio.php">eliminar</a></li>
                <li><a class="link" href="exportar.php">exportar</a></li>
            </ul>
        </div>
    </nav>';

    echo $html;
}

?>