<h2>TESTANDO</h2>

<?php
// require gera um fatal error caso o arquivo nao seja encontrado desta forma parando o programa
require "teste.php";

require __DIR__  . "/arquivo/testando.php";

?>


<?php
    for ($i=0; $i < 10; $i++) { 
        echo $i . "<br>";
    }
?>