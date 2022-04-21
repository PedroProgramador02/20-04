<?php
    include './lib/bancoDados.php'; 

    $alunos = listaAlunos(); 
    $aluno = $alunos[7]['nome'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/stilo.css">
    <title>HOME</title>
</head>
<body>
    <header>
        <figure>
            <img src="" alt="logo">
        </figure>
        <section>
            <a href="/">HOME</a>
            <a href="/listaAlunos.php">Alunos</a>
            <a href="/cadastrarAluno.php">Cadastrar</a>
        </section>
    </header>
    <main>
        Olá, 
        
        <?php
            echo '<p> '. $aluno . '</p>'
        ?>
    </main>
</body>
</html>