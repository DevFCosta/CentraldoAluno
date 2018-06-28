#conexao com o banco de dados
<?php
$conexao = mysqli_connect('localhost','root','') or die ("erro de conexão");
$banco = mysqli_select_db($conexao,'central') or die("erro ao selecionar o banco de dados");


?>