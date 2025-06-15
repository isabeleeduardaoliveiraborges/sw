<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo-03</title>
    <style>
        table,tr,th,td {
           border: 1px solid black;
        }
    </style>
</head>
<body>
<table>
   <tr>
        <th>id</th>
        <th>Nome</th>
        <th>Email</th>
   </tr>
   <?php
      for ($i = 1; $i <= 5; $i++) {
          echo "
          <tr>
          <td>Linha $i coluna 1</td>
          <td>Linha $i coluna 2</td>
          <td>Linha $i coluna 3</td>
           </tr>";
      }
   ?> 
</table>     
</body>
