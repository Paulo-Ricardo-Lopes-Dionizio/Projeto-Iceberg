<?php 
include('../Login/protect.php');

switch(@$_REQUEST["tema"])
{
    case "jogos":
        
            $sqlIcebergs = "SELECT * FROM icebergs  WHERE iceberg_tema = 1";

            $resIcebergs = $sqlUsuarios->query($sqlIcebergs);

            $qtd = $resIcebergs->num_rows;                     
        
        break;

    case "filmes":
        
            $sqlIcebergs = "SELECT * FROM icebergs  WHERE iceberg_tema = 2";

            $resIcebergs = $sqlUsuarios->query($sqlIcebergs);

            $qtd = $resIcebergs->num_rows;
        
        break;

    case "desenhos":
        
            $sqlIcebergs = "SELECT * FROM icebergs  WHERE iceberg_tema = 3";

            $resIcebergs = $sqlUsuarios->query($sqlIcebergs);

            $qtd = $resIcebergs->num_rows;
        
        break;

    case "outros":
        
            $sqlIcebergs = "SELECT * FROM icebergs  WHERE iceberg_tema = 4";

            $resIcebergs = $sqlUsuarios->query($sqlIcebergs);

            $qtd = $resIcebergs->num_rows;
        
        break;
    default:
            $sqlIcebergs = "SELECT * FROM icebergs";

            $resIcebergs = $sqlUsuarios->query($sqlIcebergs);
            
            $qtd = $resIcebergs->num_rows;
        break;
}
?>
   
<div class="container-fluid">
    <section class="showcase">
    <video src="../Paginas/video&audio/fundo_icerberg.mp4" autoplay loop muted></video>
        <h1 class="title"> ICERBERG'S</h1>
    </section>

        <?php 
        if($qtd>0)
        {
            while($row = $resIcebergs->fetch_object())
            {
         echo "<div class='conteudo'>"
            .$row->iceberg_nome.
                "   <div class='linkAcesso'>
                      acesse <a href='?page=apresentarIceberg&id_iceberg=".$row->iceberg_id."'>Ver mais</a>
                    </div>
                </div>";
            }
        }else
        {
            echo "sem icebrgs";
        }
        ?>

        <div class="conteudo">
            Criar novo
          <div class="linkAcesso">
              acesse <a href="?page=criarIceberg">Ver mais</a>
          </div>
      </div>   
</div>
<hr>
<footer class="bg-gray text-center text-lg-start">
      
        <div class="text-center p-3">
          © 2023 IceUsc™.
          <a class="text-dark" href="#">Politica de Privacidade</a> |
          <a class="text-dark" href="#">Termos & Condições</a> |
          Powered by
          <a class="text-dark" href="#">Grupo IceUsc</a>.
        </div>
      </footer>