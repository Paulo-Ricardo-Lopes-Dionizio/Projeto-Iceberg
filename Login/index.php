<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
    <link rel="stylesheet" href="../Paginas/CSS/index.css">

<!-- -----------------------------------Implementação do BOOTSTRAP----------------------------------------- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- ------------------------------------------------------------------------------------------------------ -->
    <link rel="stylesheet" href="../Paginas/CSS/login.css">

</head>

<body style="background-color: black">
<section class="showcase">
            <video src="../Paginas/video&audio/fundo_icerberg.mp4" autoplay loop muted></video>
            <h1 class="title"> LOGIN</h1>
        </section>

    

    <div class="dados_registro_login">
    <p><Strong>Faça login ou registre-se para proseguir.</Strong></p>
        <form action="" method="post">

        <p>
            <div class="row">
            
            <div class="col"><input class="dados_login" type="text" name="user" id="" placeholder="Nome Usuario"></div>
            </div>
        </p>

        <p>
        <div class="row">
            
            <div class="col"><input type="password" class="dados_login"  name="senha" id="" placeholder="Senha"></div>
            </div>
        </p>

        <p>
            <button class="btn btn-primary" type="submit">Entrar</button>
        </p>
        <p>
            <button class="btn btn-primary"><a href="../Registrar/index.php">Registre-se</a></button>
        </p>
        </form>
    </div>
    
    
    
    

</body>
</html>

<?php 
    include('../Paginas/PHP/conexao.php');

    if(isset($_POST['user']) || isset($_POST['senha']))
    {
        if(strlen($_POST['user']) == 0)
        {
            echo "Preencha seu usuário!";
        }else if(strlen($_POST['senha']) == 0)
        {
            echo "Preencha sua senha!";
        }else{
            $user = $sqlUsuarios->real_escape_string($_POST['user']);
            $senha = $sqlUsuarios->real_escape_string(md5($_POST['senha']));

            $sql_code = "SELECT * FROM usuarios WHERE usuarios_nome = '$user' AND usuarios_senha = '$senha'";
            $sql_query = $sqlUsuarios->query($sql_code) or die("Falha ao executar o código SQL: ".$sqlUsuarios->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1)
            {
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION))
                {
                    session_start();
                }

                $_SESSION['id'] = $usuario['usuarios_id'];
                $_SESSION['nome'] = $usuario['usuarios_nome'];

                header("Location: ../Paginas/index.php");
            }else{
                echo "Usuário ou senha incorretos!";
            }
        }
    }
?>