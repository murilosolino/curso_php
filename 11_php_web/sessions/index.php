<?php

session_start();
$_SESSION['nome'] = "Murilo";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <H1>Ola Session</H1>
    <a href="pagina.php">Descobrir dados da Session</a>
</body>

</html>