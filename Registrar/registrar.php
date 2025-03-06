<?php 

    include('../Paginas/PHP/conexao.php');

    $nome = $_POST["user"];
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);

    $query_select = "SELECT usuarios_nome FROM usuarios WHERE usuarios_nome ='{$nome}'";

    $check = $sqlUsuarios->query($query_select);

    $array = mysqli_fetch_array($check);

    $logarray = $array['usuarios_nome'];

    if($nome == "" || $nome == null)
    {
        echo "<script language ='javascript' type='text/javascript'>alert('Os campos dever ser preenchidos!');window.location.href='../Registrar/index.php';</script>";

    }  else
    {

        if($logarray == $nome)
        {
            echo "<script language='javascript' type='text/javascript'>alert('Usuário já cadastrado');window.location.href='../Registrar/index.php';</script>";

            die();
        }else
        {

            $query = "INSERT INTO usuarios (usuarios_nome, usuarios_senha, usuarios_email) VALUES ('{$nome}', '{$senha}', '{$email}')";

            $insert = $sqlUsuarios->query($query);

            if($insert==true)
            {
                echo"<script>alert('Cadastro realizado com sucesso');</script>";
                echo"<script>location.href='../Login/index.php'</script>";
            }else
            {
                echo"<script>alert('Erro ao cadastrar usuário,verifique se utilizou caracteres especiais ou conta ja existente');</script>";
                echo"<script>location.href='../Registrar/index.php'</script>";
            }

        }

    }

?>