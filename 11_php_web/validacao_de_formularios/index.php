<?php

$validacoes = [];

if (count($_POST) > 0) {

    if (($_POST['nome']) === '') {
        $validacoes[] = "Nome eh obrigatorio";
    }

    if ($_POST['email'] === '') {
        $validacoes[] = "Por favor, digite o email";
    }

    if ($_POST['senha'] != $_POST['confirmacao-senha']) {
        $validacoes[] = "Senhas devem ser iguais";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (count($validacoes)) : ?>
        <ul>
            <?php foreach ($validacoes as $validacao): ?>
                <li><?= $validacao ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form action="index.php" method="post">
        <div>
            <input type="text" name="nome" placeholder="digite seu nome">
        </div>
        <div>
            <input type="text" name="email" placeholder="digite seu email">
        </div>
        <div>
            <input type="text" name="senha" placeholder="digite sua senha">
        </div>
        <div>
            <input type="text" name="confirmacao-senha" placeholder="digite sua senha">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>

</html>