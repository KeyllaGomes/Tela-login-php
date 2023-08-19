<?php
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='index.php';</script>";

    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    <title>Sistema de login</title>
   
</head>
<body>
    <nav class="navbar navbar-light hg_light">
        <div class="container-fluid">
            <a class="navbar-brand">Sistema X</a>
            <?php
                print "Olá, " .$_SESSION["nome"];
                print "<a href='logout.php' class='btn btn-danger'>Sair</a>";

            ?>
        </div>
    </nav>

    Coloque seu conteudo aqui
    
</body>
</html>