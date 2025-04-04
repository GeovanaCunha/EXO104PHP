<?php
    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];

        echo "<h2>Tabuada de $numero:</h2>";
        
        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = " . ($numero * $i) . "<br>";
        }
    }
    ?>