<?php 
    
    include('conexao.php');


    $selecionar_disciplina = "SELECT * FROM sistema WHERE ra_aluno = '2003' AND tipo_atividade = 'disciplina'";
    $result_disciplina = mysqli_query($conn, $selecionar_disciplina);
    
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

    <h2><b>Disciplinas</b></h2>
            <a href="#"><i class="fa fa-ellipsis-h" style="margin-left: 95%;" aria-hidden="true"></i></a>
            <?php while($linha_disciplina = mysqli_fetch_assoc($result_disciplina)){
                
                echo "<p style='font-size: 18px;'>". $i. ") ".  $linha_disciplina['desc_atividade']. " <a href='#'><i class='fa fa-trash delete_curso' style='color: red;' aria-hidden='true'></i></a></p><br/>";

                $i++;
            }?>

</body>
</html>