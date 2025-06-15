<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio-03</title>
    <style>
                table {
            border-collapse: collapse;
            width: 50%;
            margin: 40px auto;
            font-family: Arial, sans-serif;
        }

        th, td {
            border: 1px solid #999;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
<table>
        <tr>
            <th>produto</th>
            <th>Preço</th>
            <th>categoria</th>
        </tr>    
        <?php
       
        $produtos = [
            ["produto" => "tablet", "preco" => "5.000","categoria" =>"eletronicios"],
            ["produto" => "sabato", "preco" => "500", "categoria" => "calsado"],
            ["produto" => "ventalador", "preco" => "2.500", "categoria" => "Eletrônico"],
            ["produto" => "moletom", "preco" => "120.00", "categoria" => "Roupas"],

        ];

       
        foreach ($produtos as $produto) {
            $categoria = $produto["categoria"];
            echo "<tr class='$categoria'>";
            echo "<td>{$produto['nome']}</td>";
            echo "<td>R$ {$produto['preco']}</td>";
            echo "<td>{$produto['categoria']}</td>";
            echo "</tr>";
        }
?>
</table>
</body>
</html>