<?php
#validar usuarios do site

include ('conexao.php');

function anti_sql_injection($string){
    include ('conexao.php');
    $string = stripslashes($string);
    $string = strip_tags($string); 
    $string = mysqli_real_escape_string($conexao,$string);
    return  $string;
}

$sql = mysqli_query($conexao,"select * from usuarios where email ='".anti_sql_injection($_POST['email'])."' and senha='".anti_sql_injection($_POST['senha'])."'limit 1") or die("error");
$linhas = mysqli_num_rows($sql);
if($linhas == '' ){
    ?>
     <div class='msg2 padding20'>usuario não encontrado ou inválido.</div>
    <?php
}
else {
    while($dados = mysqli_fetch_assoc($sql)){

        session_start();
        $_SESSION['valida_sessao'] = $dados['login'];
        header("location:home.php");
    }
}

?>