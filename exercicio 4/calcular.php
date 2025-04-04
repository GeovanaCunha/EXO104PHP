
<?php
    if (isset($_POST['texto'])) {
        $texto = $_POST['texto'];
        for ($i = 0; $i < 10; $i++) {
            echo $texto . "<br>";
        }
    }
    ?>