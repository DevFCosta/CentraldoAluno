<?php 
session_start();

#destroi todoas as sessões do navegador
if(session_destroy()){
    header('location:index.php');
}
?>