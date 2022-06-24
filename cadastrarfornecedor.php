<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de fornecedores</title>
</head>
<body>
    <h1> Cadrastro de fornecedores </h1>
    <hr>
    <br>
    <form method="post" id="cadrastro" action="cadastrarprodutos.php">
    <fieldset id="cad">
    <legend> fornecedor </legend>
    <p><label for="categoria">Categoria:</label><input type="text" name="categoria" id="categoria"size="60" maxlenght="100" placeholder="digite a categoria do produto"></p>
    <p><label for="marca">Marca:</label><input type="text" name="marca" id="marca"size="30" maxlenght="100" placeholder="digite a marca do produto"></p>
    <p>Descrição</p>
    <p><textarea name="descricao" id="descricao" placeholder="Descrição do Produto" class="textarea"></textarea></p>
    <p><label for="preco">Preço:</label><input type="number" name="preco" id="preco"size="40" maxlenght="100" placeholder="digite o preço do produto"></p>
    <p><label for="qtd">Quantidade:</label><input type="text" name="qtd" id="qtd"size="25" maxlenght="100" placeholder="digite a quantidade do produto"></p>
</fieldset>
<input type="submit" value="Cadrastar">
<hr>
</form>


</body>
</html> 