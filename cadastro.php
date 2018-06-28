<?php
#recebe os dados do formulario

include ('conexao.php');

$login = ucwords($_POST['login']);#ucwords coloca a primeira letra do nome maiuscula caso o usuário esqueça
$email = $_POST['email'];
$senha = $_POST['senha'];

$in = mysqli_query($conexao, "insert into usuarios(login, email, senha) values('$login', '$email', '$senha')") or die("error");
echo 'cadastro realizado com sucesso!';

session_start([
       header("location:home.php")
]);


?>
