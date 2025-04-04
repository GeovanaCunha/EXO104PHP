<?php
   
    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];

        echo "<h2>Números pares de 0 até $numero:</h2>";

        for ($i = 0; $i <= $numero; $i++) {
            if ($i % 2 == 0) {
                echo $i . "<br>";
            }
        }
    }
    ?>