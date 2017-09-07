<?php

$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Meses del Año</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h1>Meses del Año</h1>
        <ul>
            <?php 
                foreach ($meses as $mes) {
                    echo "<li>$mes</li>";
                }
            ?>
        </ul>
    </body>
</html>