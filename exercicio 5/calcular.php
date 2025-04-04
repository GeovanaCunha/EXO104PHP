<?php
    if (isset($_POST['texto']) && isset($_POST['quantidade'])) {
        $texto = $_POST['texto'];
        $quantidade = $_POST['quantidade'];
        for ($i = 0; $i < $quantidade; $i++) {
            echo $texto . "<br>";
        }
    }
    ?>