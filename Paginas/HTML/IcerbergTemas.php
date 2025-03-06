<?php 
include('../Login/protect.php');
?>
   
   <div class="container-fluid">
        <section class="showcase">
        <video src="../Paginas/video&audio/fundo_icerberg.mp4" autoplay loop muted></video> 
            <h1 class="title"> TEMAS ICERBERG</h1>
        </section>

        <div class="conteudo">
            Jogos
            <div class="linkAcesso">
                acesse <a href="?page=iceberg&tema=jogos">Ver completo!</a>
            </div>
        </div>

        <div class="conteudo">
            Filmes
          <div class="linkAcesso">
              acesse <a href="?page=iceberg&tema=filmes">Ver completo!</a>
          </div>
      </div>

        <div class="conteudo">
            Desenhos/Séries
            <div class="linkAcesso">
                acesse <a href="?page=iceberg&tema=desenhos">Ver completo!</a>
            </div>
        </div>

        <div class="conteudo">
            Outros
          <div class="linkAcesso">
              acesse <a href="?page=iceberg&tema=outros">Ver completo!</a>
          </div>
      </div>
        
</div>

<div class="container">
    <div class="row">
        <div class="col mt-5">
            <?php 
            switch(@$_REQUEST["tema"])
            {
                case "jogos":
                    {
                        $sqlIcebergs = "SELECT * FROM icebergs  WHERE iceberg_id = 1";

                        $resIcebergs = $sqlUsuarios->query($sqlIcebergs);

                        $qtd = $resIcebergs->num_rows;

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

                    }
                    break;

                case "filmes":
                    {
                        $sqlIcebergs = "SELECT * FROM icebergs  WHERE iceberg_id = 2";

                        $resIcebergs = $sqlUsuarios->query($sqlIcebergs);

                        $qtd = $resIcebergs->num_rows;

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
                    }
                    break;

                case "desenhos":
                    {
                        $sqlIcebergs = "SELECT * FROM icebergs  WHERE iceberg_id = 3";

                        $resIcebergs = $sqlUsuarios->query($sqlIcebergs);

                        $qtd = $resIcebergs->num_rows;

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
                    }
                    break;

                case "outros":
                    {
                        $sqlIcebergs = "SELECT * FROM icebergs  WHERE iceberg_id = 4";

                        $resIcebergs = $sqlUsuarios->query($sqlIcebergs);

                        $qtd = $resIcebergs->num_rows;

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
                    }
                    break;
                default:
                break;
            }
            ?>
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