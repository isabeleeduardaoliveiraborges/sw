<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio-02</title>
</head>
<body>
<form method="post">
    <label>linhas<input type="number" name="linhas" ></label>
    <label>colunas <input type="number" name="colunas" ></label>
    <button type="submit">tabela</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $linhas = ($_POST['linhas']);
    $colunas = ($_POST['colunas']);

    echo "<table border='1'";

    $i = 1;
    while ($i <= $linhas) {
        echo "<tr>";
        
        $j = 1;
        while ($j <= $colunas) {
            echo "<td>linha $i, coluna $j</td>";
            $j++;
        }

        echo "</tr>";
        $i++;
    }

    echo "</table>";
}
?>
</body>
</html>