<?php 
    
    include('conexao.php');


    $selecionar_curso = "SELECT * FROM sistema WHERE ra_aluno = '2003' AND tipo_atividade = 'curso'";
    $result_curso = mysqli_query($conn, $selecionar_curso);
    
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

    <h2><b>Cursos</b></h2>
            <a href="#"><i class="fa fa-ellipsis-h" style="margin-left: 95%;" aria-hidden="true"></i></a>
            <?php while($linha_curso = mysqli_fetch_assoc($result_curso)){
                
                echo "<p style='font-size: 18px;'>". $i. ") ".  $linha_curso['desc_atividade']. " <a href='#'><i class='fa fa-trash delete_curso' style='color: red;' aria-hidden='true'></i></a></p><br/>";

                $i++;
            }?>

</body>
</html>