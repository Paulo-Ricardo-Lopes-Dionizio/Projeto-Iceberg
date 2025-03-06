<?php 

include('../PHP/conexao.php');

if(!isset($_SESSION))
{
    session_start();
}
switch($_REQUEST['acao'])
{
    case "criar":
        $nomeIceberg = $_POST['nomeIceberg'];

        $temaIceberg = $_POST['temaIceberg'];

        $idCriador = $_SESSION['id'];

        $camada1 = serialize($_POST['camada1']);
        $camada2 = serialize($_POST['camada2']);
        $camada3 = serialize($_POST['camada3']);
        $camada4 = serialize($_POST['camada4']);

        if($nomeIceberg == "" || $nomeIceberg == NULL)
        {
            echo "<script language ='javascript' type='text/javascript'>alert('Nome inválido');window.location.href='../Paginas/index.php?page=criarIceberg';</script>";
        }else if($temaIceberg == 0)
        {
            echo "<script language ='javascript' type='text/javascript'>alert('Tema Inválido');window.location.href='../Paginas/index.php?page=criarIceberg';</script>";
        }else
        {

            $inserirIceberg = "INSERT INTO icebergs (iceberg_nome, iceberg_tema, iceberg_cmd1, iceberg_cmd2, iceberg_cmd3, iceberg_cmd4, fk_usuariosID_iceberg) VALUES ('{$nomeIceberg}', '{$temaIceberg}', '{$camada1}', '{$camada2}', '{$camada3}', '{$camada4}', '{$idCriador}')";

            $insert = $sqlUsuarios->query($inserirIceberg);

            if($insert==true)
                    {
                        echo"<script>alert('Icberg criado com sucesso!');</script>";
                        echo"<script>location.href='../index.php?page=iceberg'</script>";
                    }else
                    {
                        echo"<script>alert('Erro ao criar Iceberg');</script>";
                        echo"<script>location.href='../index.php?page=criarIceberg'</script>";
                    }
        }
        break;
    
    case "editar":

            $idIceberg = $_REQUEST['idIce'];
            
            $nomeIceberg = $_POST['nomeIceberg'];

            $temaIceberg = $_POST['temaIceberg'];

            $idCriador = $_SESSION['id'];

            $camada1 = serialize($_POST['camada1']);
            $camada2 = serialize($_POST['camada2']);
            $camada3 = serialize($_POST['camada3']);
            $camada4 = serialize($_POST['camada4']);
            
if($nomeIceberg == "" || $nomeIceberg == NULL)
            {

                echo "<script language ='javascript' type='text/javascript'>alert('Nome inválido');window.location.href='../Paginas/index.php?page=editarIceberg&idIce=".$idIceberg."';</script>";

            }else if($temaIceberg == 0)
            {

                echo "<script language ='javascript' type='text/javascript'>alert('Tema Inválido');window.location.href='../Paginas/index.php?page=editarIceberg&idIce=".$idIceberg."';</script>";

            }else
            {
                $nomeIceberg = mysqli_real_escape_string($sqlUsuarios, $_POST['nomeIceberg']);
                $temaIceberg = mysqli_real_escape_string($sqlUsuarios, $_POST['temaIceberg']);
                $camada1 = mysqli_real_escape_string($sqlUsuarios, serialize($_POST['camada1']));
                $camada2 = mysqli_real_escape_string($sqlUsuarios, serialize($_POST['camada2']));
                $camada3 = mysqli_real_escape_string($sqlUsuarios, serialize($_POST['camada3']));
                $camada4 = mysqli_real_escape_string($sqlUsuarios, serialize($_POST['camada4']));  
                  
                $alterarIceberg = "UPDATE icebergs SET iceberg_nome = '{$nomeIceberg}', iceberg_tema = '{$temaIceberg}', iceberg_cmd1 = '{$camada1}', iceberg_cmd2 = '{$camada2}', iceberg_cmd3 = '{$camada3}', iceberg_cmd4 = '{$camada4}' WHERE iceberg_id = $idIceberg";

                $insert = $sqlUsuarios->query($alterarIceberg);

                if($insert==true)
                        {
                            echo"<script>alert('Icberg alterado com sucesso!');</script>";
                            echo"<script>location.href='../index.php?page=iceberg'</script>";
                        }else
                        {
                            echo"<script>alert('Erro ao alterar Iceberg');</script>";
                            echo"<script>location.href='../index.php?page=criarIceberg'</script>";
                        }
            } 
        break;
    
    case "excluir":
$sql = "DELETE FROM icebergs WHERE iceberg_id=".$_REQUEST["idIce"];

            $res = $sqlUsuarios->query($sql);

            if($res==true)
            {
                echo"<script>alert('Excluido com sucesso');</script>";
                echo"<script>location.href='../index.php?page=iceberg'</script>";
            }else
            {
                echo"<script>alert('Falha ao Excluir');</script>";
                echo"<script>location.href='../index.php?page=iceberg'</script>";
            }
        break;

    default:
        break;
}


?>