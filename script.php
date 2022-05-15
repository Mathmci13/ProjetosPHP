<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
// print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo 'O nome nao pode ser vazio.';
    return;
}

if(strlen($nome) < 3)
{
    echo 'O nome deve ter mais que 3 caracteres.';
    return;
}

if(strlen($nome) > 40)
{
    echo 'O nome é extenso demais.';
    return;
}

if(!is_numeric($idade))
{
    echo "Informe um número para idade";
    return;
}

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
