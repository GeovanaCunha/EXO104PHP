<?php
    if (isset($_GET['numero']) && isset($_GET['intervalo'])) {
        $numero = $_GET['numero'];
        $intervalo = $_GET['intervalo'];

        echo "<h2>Números de 0 até $numero com intervalo de $intervalo:</h2>";
        
        for ($i = 0; $i <= $numero; $i += $intervalo) {
            echo $i . "<br>";
        }
    }
    ?>