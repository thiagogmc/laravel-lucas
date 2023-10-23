<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/menu.css" rel="stylesheet" />
    <link href="css/btnprodutos.css" rel="stylesheet" />
    <link href="css/forms.css" rel="stylesheet" />
    <title>Produtos</title>
</head>
<body>

@include('menu')

<div class="container">
    <form id="product-form">
        <h1>Produtos do Estoque</h1>
        <label for="product-name">Nome do produto:</label>
        <input type="text" id="product-name" placeholder="Nome do produto" required>

        <label for="unit-price">Valor unitário:</label>
        <input type="number" id="unit-price" placeholder="Valor unitário" required>

        <label for="stock-quantity">Quantidade em estoque:</label>
        <input type="number" id="stock-quantity" placeholder="Quantidade em estoque" required>

        <label for="min-stock-quantity">Quantidade mínima em estoque:</label>
        <input type="number" id="min-stock-quantity" placeholder="Quantidade mínima em estoque" required>
        <input type="submit" name="acao" value="Enviar"/>
    </form>
    <table id="product-list">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Valor unitário</th>
            <th>Quantidade em estoque</th>
            <th>Quantidade mínima em estoque</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
<script src="crud.js"></script>
</body>
</html>
