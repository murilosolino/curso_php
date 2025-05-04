<?php

    //IMPEDE QUE O ARQUIVO SEJA INCLUIDO MAIS DE UMA VEZ 
    include_once __DIR__ . "/../require/index.php"
?>

<?php

    //IMPEDE QUE O ARQUIVO SEJA INCLUIDO MAIS DE UMA VEZ 
    require_once __DIR__ . "/../require/index.php";
?>

<?php

    //permite que o arquivo seja incluido n vezes
    include __DIR__ . "/../require/arquivo/testando.php";
    include __DIR__ . "/../require/arquivo/testando.php";

    require __DIR__ . "/../require/arquivo/testando.php";
    require __DIR__ . "/../require/arquivo/testando.php";

?>