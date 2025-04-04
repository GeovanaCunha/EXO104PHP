
<?php
    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];

        echo "<h2>Números pares de $numero até 0:</h2>";

        for ($i = $numero; $i >= 0; $i--) {
            if ($i % 2 == 0) {
                echo $i . "<br>";
            }
        }
    }
    ?>