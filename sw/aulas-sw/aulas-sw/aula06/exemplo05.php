<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo-05</title>
</head>
<body>

   <?php
     $nomes = ['alice','bob','carlos'];
     echo "<ul>";
     foreach ($nomes as $nome) {
         echo "<li>$nome</li>";
     }
     echo "</ul>";
   ?> 
 
</body>
</html>