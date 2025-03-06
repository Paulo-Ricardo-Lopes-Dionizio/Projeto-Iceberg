<?php 

if(!isset($_SESSION))
{
    session_start();
}

include('../Login/protect.php');

$idIceberg = $_GET['id_iceberg'];

$pegarNome = "SELECT * FROM icebergs WHERE iceberg_id = '$idIceberg'";

$res = $sqlUsuarios->query($pegarNome);

$row = $res->fetch_object();

$camada1 = unserialize($row->iceberg_cmd1);
$camada2 = unserialize($row->iceberg_cmd2);
$camada3 = unserialize($row->iceberg_cmd3);
$camada4 = unserialize($row->iceberg_cmd4);

$pegaUsuario = "SELECT usuarios_nome FROM usuarios WHERE usuarios_id = '$row->fk_usuariosID_iceberg'";
$res2 = $sqlUsuarios->query($pegaUsuario);
$criador = $res2->fetch_object();

?>

        <div class="container-fluid">
                <section class="showcase">
                <video src="../Paginas/video&audio/fundo_icerberg.mp4" autoplay loop muted></video>
                    <div class="title-container">
            <h1 class="title"><?php echo ucfirst($row->iceberg_nome);?></h1>
                    <p class="creator-info">Criado por: <?php echo ucfirst($criador->usuarios_nome);?></p>
        </div>
                </section>
        </div>
        
        <div class="container">
    <section class="camada1 text-white text-center mb-4">
            <div>
                <br>
                <h2>Superfície</h2>
                <div class="layer-container">
                    <?php 
                        foreach($camada1 as $valor)
                        {
                            echo "<div class='layer-item'>".$valor."</div>";
                                                    }
                    ?>
                </div>
            </div>
        </section>

        <section class="camada2 text-white text-center mb-4">
            <div>
                <h2>Águas Rasas</h2>
                <div class="layer-container">
                    <?php 
                        foreach($camada2 as $valor)
                        {
                            echo "<div class='layer-item'>".$valor."</div>";
                        }
                    ?>
                </div>
            </div>
        </section>

        <section class="camada3 text-white text-center mb-4">
            <div>
                <h2>Águas Médias</h2>
                <div class="layer-container">
                    <?php 
                        foreach($camada3 as $valor)
                        {
                            echo "<div class='layer-item'>".$valor."</div>";
                        }
                    ?>
                </div>
            </div>
        </section>

        <section class="camada4 text-white text-center mb-4">
            <div>
                <h2>Águas Profundas</h2>
                <div class="layer-container">
                    <?php 
                        foreach($camada4 as $valor)
                        {
                            echo "<div class='layer-item'>".$valor."</div>";
                        }
                    ?>
                </div>
            </div>
        </section>
        
        <?php 
        if($_SESSION['id'] == $row->fk_usuariosID_iceberg)
        {
echo "<section class='buttons-container'>
            <div class='row'>
                <div class='col'>
                    <button type='button' class='btn btn-success' onclick=\"location.href='?page=editarIceberg&idIce=".$row->iceberg_id."'\">EDITAR</button>
                </div>
                                    <div class='col'>
                    <button type='button' class='btn btn-danger' onclick=\"location.href='../Paginas/PHP/novoIceberg.php?acao=excluir&idIce=".$row->iceberg_id."'\">DELETAR</button>
</div>
                </div>
            </section>";
        }
        ?>
</div>