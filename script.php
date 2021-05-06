<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<?php 

    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescente';  
    $categorias[] = 'Adulto';
    $categorias[] = 'Idoso';

    $nome_nadador = $_POST['nome'];
    $idade_nadador = $_POST['idade'];

    //Validações
    if(empty($nome_nadador) || $nome_nadador == ''){
        echo "<div class='danger'><p class='bg-danger'>O nome não pode ser vazio!</p></div>";
        return;
    }

    if(strlen($nome_nadador) < 3){
        echo "<div class='danger'><p class='bg-danger'>O nome deve conter mais de 3 caracteres!</p></div>";
        return;
    }

    if(strlen($nome_nadador) >= 40){
        echo "<div class='danger'><p class='bg-danger'>Nome muito extenso!</p></div>";
        return;
    }
    if(!is_numeric($idade_nadador)){
        echo "<div class='danger'><p class='bg-danger'>Idade deve ser número...</p></div>";
        return;
    }

    //Definindo as categorias
    if($idade_nadador < 6){
    }
    else if ($idade_nadador >= 6 && $idade_nadador <=12) {
        for($i=0; $i< count($categorias); $i++){
            if($categorias[$i] == 'Infantil'){
                echo "O(a) nadador(a) ".$nome_nadador." compete na Categoria Infantil";
    
        }}
    }
    else if (($idade_nadador >= 13) && ($idade_nadador <18)) {
        for($i=0; $i< count($categorias); $i++){
            if($categorias[$i] == 'Adolescente'){
                echo "O(a) nadador(a) ".$nome_nadador." compete na Categoria Adolescente";
   
        }}
    }
    else if ($idade_nadador >= 18) {
        for($i=0; $i< count($categorias); $i++){
            if($categorias[$i] == 'Adulto'){
                echo "O(a) nadador(a) ".$nome_nadador." compete na Categoria Adulto";
    
        }}
    }


?>