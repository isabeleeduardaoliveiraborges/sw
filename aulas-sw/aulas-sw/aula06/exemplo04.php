<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo-04</title>
</head>
<body>
<?php
  $usuario = 3;
  if ($usuario == 3) {
  echo "<ul>";
   // se usuario for igual a 3, exibe a 3 itens
        for ($i = 1; $i <= 3; $i++) {
           echo "<li>item $i</li>";
        }
  echo "</ul>";
  } else {
    // se usuario for diferente de 3, exibe a 3 paragrafos
    for ($i = 1; $i <= 3; $i++) {
      echo "<p>Olá, usuário diferente de 3</p>";
   }
  }
?> 
<!-- se usuario for igual a 3, exibe a 3 itens -->

<!-- se usuario for diferente de 3, exibe a 3 paragrafos -->
</table>     
</body>
</html>