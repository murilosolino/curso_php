<?php
setcookie('nome', 'Murilo', time() + 3600);

if (isset($_COOKIE['nome'])) {
    $nome = $_COOKIE['nome'];
}

print_r($_COOKIE);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello Word</h1>
    <?php if ($nome != ""): ?>
        <h4>Nome capturado nos Cookies: <?php echo $nome ?></h4>
    <?php endif; ?>
</body>

</html>