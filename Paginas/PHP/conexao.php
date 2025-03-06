<?php 
    define('HOST', 'localhost'); // local do banco de dados
    define('USER', 'root'); // usuario do servidor
    define('PASS', ''); // senha
    define('BD_LOGIN', 'iceberg'); // conecta com o servidor icceberg

    $sqlUsuarios = new MySQLi(HOST,USER,PASS,BD_LOGIN);

    if($sqlUsuarios->error)
    {
        die('Falha ao conectar: '.$sqlUsuarios->error);
    }
?>
