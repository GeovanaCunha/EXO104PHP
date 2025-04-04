<?php
    if (isset($_GET['numero']) && isset($_GET['intervalo'])) {
        $numero = $_GET['numero'];
        $intervalo = $_GET['intervalo'];

        echo "<h2>Números de $numero até 0 com intervalo de $intervalo:</h2>";
        
        for ($i = $numero; $i >= 0; $i -= $intervalo) {
            echo $i . "<br>";
        }
    }
    ?>