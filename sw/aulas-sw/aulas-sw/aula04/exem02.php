<?php
    if (isset($_GET["num1"], $_GET["num2"], $_GET["num3"])) {

        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $num3 = $_GET["num3"];

        $maior = max($num1, $num2, $num3);

        echo "O maior número é: " . $maior;
    }
    ?>