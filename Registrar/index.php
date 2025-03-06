<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -----------------------------------Implementação do BOOTSTRAP----------------------------------------- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ------------------------------------------------------------------------------------------------------ -->
    <title>Registrar</title>
    <link rel="stylesheet" href="../Paginas/CSS/index.css">
</head>
<body>
<section class="showcase">
            <video src="../Paginas/video&audio/fundo_icerberg.mp4" autoplay loop muted></video>
            <h1 class="title"> REGISTRAR</h1>
        </section>
    
    <section class="container">
        <form action="../Registrar/registrar.php" method="post">
            
            <input type="hidden" name="acao" value="cadastrar">

            <div class="dados_registro_login">

                <input type="text" name="user" placeholder="Usuario" class="form-control"><br>
                <input type="password" name="senha" placeholder="Senha" class="form-control"><br>
                <input type="email" name="email" placeholder="E-mail" class="form-control"><br>
                <div class="mb-3">
                <button type="submit" value="cadastrar" id="cadastrar" name="cadastrar" class="btn btn-primary">Registrar</button>
            </div>
            </div>

            

        </form>
    </section>

    </div>
</body>
</html>