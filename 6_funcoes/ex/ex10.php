<?php

$lista = ['arroz', 'feijao', 'sal', 'vinagre'];

//funcao que recebe array de itens de supermercado
function listaParaString($lista){
    
    $str = "Voce esta levando: ";
   for($i = 0; $i < count($lista); $i++ ){

        if ($i + 1 == count($lista)) {
            $str .= "$lista[$i]. ";
        } else{
            $str .= "$lista[$i], ";
        }
        
   }

   return $str;
}

$str = listaParaString($lista);
echo $str;