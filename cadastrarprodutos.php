<?php
$conexao = mysqli_connect("localhost","root","","cadastrarseries");
$categoria = $_POST['titulo'];
$marca = $_POST['atrizprincipal'];
$descricao = $_POST['atorprincipal'];
$preco = $_POST['QTD temporadas'];
$qtd = $_POST['sinopse'];
 
$sql_inserir = "insert into tabprodutos(titulo,atrizprincipal,atorprincipal,QRD temporadas,sinopse) values ('{$categoria}' , '{$marca}' , '{$descricao}' ,{$preco} , {$qtd} )";


mysqli_query($conexao, $sql_inserir);

mysqli_close($conexao);
?>