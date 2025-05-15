<?php

if (isset($_POST['items'])) {
    $items = $_POST['items'];
    print_r($items);
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
    <form action="" method="post">
        <div>
            <input type="checkbox" name="items[]" value="Camiseta"> Camiseta
        </div>
        <div>
            <input type="checkbox" name="items[]" value="Jaqueta"> Jaqueta
        </div>
        <div>
            <input type="checkbox" name="items[]" value="Meia"> Meia
        </div>
        <div>
            <input type="checkbox" name="items[]" value="Short"> Short
        </div>
        <div>
            <input type="checkbox" name="items[]" value="Chinelo"> Chinelo
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>

</html>