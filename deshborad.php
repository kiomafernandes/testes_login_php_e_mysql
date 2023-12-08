<?php
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='index.php';</script>"
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha328-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zw1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Sistema de login</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Sistem K</a>
            <?php
                print "Olá, ".$_SESSION["nome"];
                print "<a href='logout.php' class='btn btn-danger'>Sair</a>"
            ?>
        </div>
    </nav>
</body>
</html>