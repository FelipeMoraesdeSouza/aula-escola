<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require ("./inc/Config.inc.php");

    $aluno = new Aluno('felipe','999.999.999');
    echo $aluno->verMatricula();
    echo "<hr>";

    $turma = new Turma ('felipe','999.999.999','sala 1001','juan');
    echo $turma->exibirTurma();
    echo "<hr>";

    $pagamento = new Pagamentos('felipe','999.999.999','3000.59');
    echo $pagamento->exibirPagamentos();
    echo "<hr>";
    ?>
</body>
</html>