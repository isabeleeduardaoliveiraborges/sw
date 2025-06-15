<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo-02</title>
</head>
<body>
   <ul>
    <!--AQUI COMEÇA O LAÇO DE REPETIÇÃO-->
    <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<li>item $i</li>";
        }
    ?>
    <!--AQUI TERMINA O LAÇO DE REPETIÇÃO-->
   </ul>
</body>
</html>