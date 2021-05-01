<?php 

    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescente';
    $categorias[] = 'Adulto';
    $categorias[] = 'Idoso';

    $nome_nadador = 'Gabrielle';
    $idade_nadador = 18;

    if($idade_nadador < 6){
    }
    else if ($idade_nadador >= 6 && $idade_nadador <=12) {
        for($i=0; $i< count($categorias); $i++){
            if($categorias[$i] == 'Infantil'){
                echo "O(a) nadador(a) ".$nome_nadador." compete na Categoria Infantil";?> <br> 
    <?php
        }}
    }
    else if (($idade_nadador >= 13) && ($idade_nadador <18)) {
        for($i=0; $i< count($categorias); $i++){
            if($categorias[$i] == 'Adolescente'){
                echo "O(a) nadador(a) ".$nome_nadador." compete na Categoria Adolescente";?> <br> 
    <?php
        }}
    }
    else if ($idade_nadador >= 18) {
        for($i=0; $i< count($categorias); $i++){
            if($categorias[$i] == 'Adulto'){
                echo "O(a) nadador(a) ".$nome_nadador." compete na Categoria Adulto";?> <br> 
    <?php
        }}
    }

    //echo $categoria;
    
    /*ordenar a lista
    sort($categorias); */

    //mostrar a lista
    print_r($categorias);

    //mostra a 
    var_dump($nome_nadador);
    var_dump($idade_nadador);
   


?>