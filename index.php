<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de compras</title>
</head>
<body>
    
    <?php $lista_de_compras = ['pão', 'feijão', 'açucar', 'tempero', 'tudo que há de bom']; ?>

    <h1>Lista de compras:</h1>
    <ul>
        <?php foreach($lista_de_compras as $i): ?>
            <li><?=$i?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>