<?php

    //foreach para array associativo
    $pessoa = [
        'nome' => 'murilo',
        'idade' => 21,
        'profissao' => 'programador'
    ];

    foreach($pessoa as $chave => $valor){
        echo "$chave => $valor \n";
    }