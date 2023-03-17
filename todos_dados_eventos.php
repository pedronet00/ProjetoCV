<?php 
    
    include('conexao.php');


    $selecionar_eventos = "SELECT * FROM sistema WHERE ra_aluno = '2003' AND tipo_atividade = 'evento'";
    $result_eventos = mysqli_query($conn, $selecionar_eventos);
    
    $i = 1;
?>

<!DOCTYPE html>
<html lang="en">
<style>
    *{
        text-align: center;
        font-family: arial;
        font-size: 18px;
    }
</style>
<body>
    <h1>CURRICULO VITAE</h1>

    <h2><b>Eventos</b></h2>
            <a href="#"><i class="fa fa-ellipsis-h" style="margin-left: 95%;" aria-hidden="true"></i></a>
            <?php while($linha_eventos = mysqli_fetch_assoc($result_eventos)){
                
                echo "<p style='font-size: 18px;'>". $i. ") ".   $linha_eventos['desc_atividade']. " <a href='#'><i class='fa fa-trash delete_curso' style='color: red;' aria-hidden='true'></i></a></p><br/>";

                $i++;
            }?>

</body>
</html>