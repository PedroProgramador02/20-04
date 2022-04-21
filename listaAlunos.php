<?php
   include './lib/bancoDados.php';
   $alunos = listaAlunos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/stilo.css">
    <script src="./assets/js/script.js" defer></script>
    <title>Listar Alunos</title>
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
        <table>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Sexo</th>
            </tr>
            <?php
                for($i = 0; $i < count($alunos); $i++){
                    $td = '<td>';
                    if($i%2 != 0 ){
                        $td = '<td class = "td-cinza">';
                    }
                    echo '<tr>';
                    echo $td .  $alunos[$i]['nome'] . '</td>';
                    echo $td .  $alunos[$i]['idade'] . '</td>';

                    $sSexo = $alunos[$i]['sexo'];
                    $sexo = '';

                    if ($sSexo == 'f') {
                        $sexo = 'Feminino';
                    } else if ( $sSexo == 'm'){
                        $sexo = 'Masculino';
                    }

                    echo $td . $sexo . '</td>';
                    echo '</tr>';

                }
            ?>
        </table>
        
    </main>
</body>
</html>