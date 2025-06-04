<?php
function pegaCategoria($produtos){
    $categorias = [];
    foreach($produtos as $produto){
        if(isset($produto['cat']) && is_string($produto['cat']) && $produto['cat'] !== ''){
            if(!in_array($produto['cat'], $categorias)){
                $categorias[] = $produto['cat'];
            }
        }
    }
    return $categorias;
}

function moeda($valor){
    return 'R$ ' . number_format($valor, 2, ',', '.');
}