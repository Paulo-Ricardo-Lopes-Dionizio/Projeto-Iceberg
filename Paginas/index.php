<?php 
include('../Login/protect.php');
include('../Paginas/PHP/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Paginas/CSS/index.css">
    
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">


    <audio autoplay loop id="bgAudio">
        <source src="../Paginas/video&audio/audio_fundo.mp3"/>
        <script>
            var audio = document.getElementById("bgAudio");
            audio.volume = 0.5;
          </script>
    </audio>


    <div class="container-fluid sticky-top">
        <div class="NavBar">
       
              <li class="nav-item btn" >
                <a class="nav-link navitems" href="index.php" role="button" aria-expanded="false">Home</a>
              </li>

              <li class="nav-item btn" >
                <a class="nav-link navitems" href="?page=contato" role="button" aria-expanded="false">Contato</a>
              </li>

              <li class="nav-item btn" >
                <a class="nav-link navitems" href="?page=sobre" role="button" aria-expanded="false">Sobre-nos</a>
              </li> 

              <li class="nav-item btn" >
                <a class="nav-link navitems" href="?page=iceberg" role="button" aria-expanded="false">Icerberg's</a>
              </li>  

              <li class="nav-item btn" >
                <a class="nav-link navitems" href="?page=iceTemas" role="button" aria-expanded="false">Icerberg's_Temas</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle navitems" href="#" data-bs-toggle="dropdown"><?php echo ucfirst($_SESSION['nome']); ?></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-danger" href="../Login/logout.php">Sair</a></li>
                </ul>
              </li>
         </div>
    </div>

    <div>
       <?php 
            switch(@$_REQUEST["page"])
            {
                case "contato":
                    include('../Paginas/HTML/contato.php');
                break;

                case "sobre":
                    include('../Paginas/HTML/Sobre_nos.php');
                break;

                case "iceberg":
                    include('../Paginas/HTML/Icerbergs.php');
                break;

                case "iceTemas":
                    include('../Paginas/HTML/IcerbergTemas.php');
                break;

                case "apresentarIceberg":
                  include('../Paginas/HTML/icebergTela.php');
                break;

                case "criarIceberg":
                  include('../Paginas/HTML/criarIceberg.php');
                break;

                case "editarIceberg":
                  include('../Paginas/HTML/editarIceberg.php');
                break;

                default:
                    include('../Paginas/HTML/main.php');
                break;
            }
        ?>
    </div>
</body>
</html>