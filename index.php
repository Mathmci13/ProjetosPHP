<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
// print_r($categorias);

$nome = 'Matheus';
$idade = 16;
// var_dump($nome);
// var_dump($idade);

if($idade >= 6 && $idade <= 12)
{
    for($I = 0; $I <= count($categorias); $I++)
    {
        if($categorias[$I] == 'infantil')
            echo "O nadador ",$nome, " compete na categoria infantil"; 
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($I = 0; $I <= count($categorias); $I++)
    {
        if($categorias[$I] == 'adolescente')
            echo "O nadador ",$nome, " compete na categoria adolescente"; 
    }
}
else

    for($I = 0; $I <= count($categorias); $I++)
    {
        if($categorias[$I] == 'adulto')
            echo "O nadador ",$nome, " compete na categoria adulto"; 
    }
