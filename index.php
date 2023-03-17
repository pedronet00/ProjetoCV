<?php 

    include('conexao.php');

    $selecionar_geral = "SELECT * FROM sistema WHERE ra_aluno = '2003'";
    $result_geral = mysqli_query($conn, $selecionar_geral);
    $linha_geral = mysqli_fetch_assoc($result_geral);


    //viria do envio da documentação para a secretaria
    $selecionar_curso = "SELECT * FROM sistema WHERE ra_aluno = '2003' AND tipo_atividade = 'curso' AND status_atividade = '1' LIMIT 3";
    $result_curso = mysqli_query($conn, $selecionar_curso);
    
    //viria do controle da lista de presença do evento
    $selecionar_evento = "SELECT * FROM sistema WHERE ra_aluno = '2003' AND tipo_atividade = 'evento' AND status_atividade = '1' LIMIT 3";
    $result_evento = mysqli_query($conn, $selecionar_evento);
    
    //viria do boletim do aluno. se nota > 7, adiciona
    $selecionar_disciplina = "SELECT * FROM sistema WHERE ra_aluno = '2003' AND tipo_atividade = 'disciplina' AND status_atividade = '1' LIMIT 3";
    $result_disciplina = mysqli_query($conn, $selecionar_disciplina);
    
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculo Vitae - Gustavo Caruso</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0;
            font-family: arial;
        }
        
        .left_container{
            margin-left: 0%;
            height: 60.9rem;
            width: 18.3%;
            background-color: red;
            display: inline-block;
        }

        .right_container{
            background-color: green;
            height: 60.9rem;
            width: 70%;
            display: inline-block;
        }
    </style>
</head>


<body style="background-color: #B0C4DE;">

<div class="container" style="background-color: #DCDCDC; border: 2px solid black;">

    <div class="row">
        <div class="col">
            <img src="gustavo.jpg" height="400px" width="350px">
            <div class="infos" style="width: 350px">
                <?php echo "<b>". $linha_geral['nome_aluno']. "</b>"; ?>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lorem risus, porttitor vitae euismod et, 
                    suscipit vel tortor. Ut ut sagittis magna. Maecenas massa nulla, maximus quis ullamcorper pretium, posuere et erat. 
                    Phasellus sit amet ante odio. Maecenas pulvinar sem non mattis maximus. Pellentesque ac varius neque. Sed tincidunt 
                    accumsan velit a pretium. Nulla pellentesque est lacus, at malesuada dolor scelerisque sed. Morbi risus ipsum, rutrum 
                    nec dolor sed, condimentum viverra sem.
                    Proin magna diam, scelerisque id dapibus a, feugiat ut lacus. Etiam at pulvinar urna. Praesent mauris turpis, vulputate at 
                    dapibus eu, mollis non massa. Vivamus iaculis quis lorem vitae vestibulum. Phasellus venenatis interdum vestibulum. 
                    Suspendisse euismod mollis lectus nec tempor. Vestibulum velit tortor, elementum ac aliquam ac, tristique in felis. 
                    Aliquam sodales feugiat lectus, eu elementum tortor varius sit amet.</p>
            </div>
        </div>

        <div class="col">
            <h1>CURRICULO VITAE</h1>

            <br/>

            <h2><b>Cursos</b></h2>
            <a href="#" class="ver_tudo_curso"><i class="fa fa-ellipsis-h" style="margin-left: 95%;" aria-hidden="true"></i></a>

            <?php while($linha_curso = mysqli_fetch_assoc($result_curso)){
                $id = $linha_geral['id_atividade'];
                echo "<p style='font-size: 18px;'>". $linha_curso['desc_atividade']. " <a href='index.php'><i class='fa fa-trash delete_curso' style='color: red;' aria-hidden='true'></i></a></p><br/>";
            }?>



            <h2><b>Disciplinas</b></h2>
            <a href="#" class="ver_tudo_disciplina"><i class="fa fa-ellipsis-h" style="margin-left: 95%;" aria-hidden="true"></i></a>

            <?php while($linha_disciplina = mysqli_fetch_assoc($result_disciplina)){
                $id = $linha_geral['id_atividade'];
                echo "<p style='font-size: 18px;'>". $linha_disciplina['desc_atividade']. " <a href='index.php'><i class='fa fa-trash delete_disciplina' style='color: red;' aria-hidden='true'></i></a></p><br/>";
            }?>



            <h2><b>Eventos</b></h2>
            <a href="#" class="ver_tudo_eventos"><i class="fa fa-ellipsis-h" style="margin-left: 95%;" aria-hidden="true"></i></a>

            <?php while($linha_evento = mysqli_fetch_assoc($result_evento)){
                $id = $linha_geral['id_atividade'];
                echo "<p style='font-size: 18px;'>". $linha_evento['desc_atividade']. " <a href='index.php'><i class='fa fa-trash delete_eventos' style='color: red;' aria-hidden='true'></i></a></p><br/>";
            }?>
        </div>
    </div>
</div>

<iframe class="todos_dados_curso" src="todos_dados_curso.php" style="position: absolute; width: 1000px; height: 800px; background-color: white; left: 23.8%; bottom: 10%; visibility: hidden;"></iframe>
<iframe class="todos_dados_disciplina" src="todos_dados_disciplina.php" style="position: absolute; width: 1000px; height: 800px; background-color: white; left: 23.8%; bottom: 10%; visibility: hidden;"></iframe>
<iframe class="todos_dados_evento" src="todos_dados_eventos.php" style="position: absolute; width: 1000px; height: 800px; background-color: white; left: 23.8%; bottom: 10%; visibility: hidden;"></iframe>

<a class="fechar" style="position: absolute; bottom: 87.5%; left: 74%; cursor: pointer; visibility: hidden;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
<script>

            $(".delete_curso").click(function(){
                <?php 
                    $novo = "UPDATE sistema SET status_atividade = '1' WHERE id_atividade = '$id'";
                    $result_novo = mysqli_query($conn, $novo);
                ?>
            });

            $(".ver_tudo_curso").click(function(){
                $(".todos_dados_curso").css("visibility", "visible");
                $(".fechar").css("visibility", "visible");
            });

            $(".ver_tudo_disciplina").click(function(){
                $(".todos_dados_disciplina").css("visibility", "visible");
                $(".fechar").css("visibility", "visible");
            });

            $(".ver_tudo_eventos").click(function(){
                $(".todos_dados_evento").css("visibility", "visible");
                $(".fechar").css("visibility", "visible");
            });

            $(".fechar").click(function(){
                $(".todos_dados_curso").css("visibility", "hidden");
                $(".todos_dados_disciplina").css("visibility", "hidden");
                $(".todos_dados_evento").css("visibility", "hidden");
                $(".fechar").css("visibility", "hidden");
            });

</script>
</body>
</html>