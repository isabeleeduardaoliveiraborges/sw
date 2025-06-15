<?php
<?php
if (isset($_GET["nam"], $_GET["num1"], $_GET["num2"], $_GET["num3"])) {
    $nam = $_GET["nam"];
    $n1 = $_GET["num1"];
    $n2 = $_GET["num2"];
    $n3 = $_GET["num3"];

    $media = ($n1 + $n2 + $n3) / 3;

    echo "Aluno: " . ($nam) . "<br>";
    echo "Média: " . $media;
}

?>




?>