<?php 

if(!isset($_SESSION))
{
    session_start();
}

if(!isset($_SESSION['id']))
{
    die("<script>alert('Você não tem permissão para acessar esta área');</script> <script>location.href='../Login/index.php'</script>");
}
?>