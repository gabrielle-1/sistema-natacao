<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<?php 
    session_start();

    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescente';  
    $categorias[] = 'Adulto';
    $categorias[] = 'Idoso';

    $nome_nadador = $_POST['nome'];
    $idade_nadador = $_POST['idade'];

    //Validações
    if(empty($nome_nadador) || $nome_nadador == ''){
        $_SESSION['mensagem-de-erro'] = "<div class='danger'><p class='bg-danger'>O nome não pode ser vazio!</p></div>";
        header('location: index.php');
    }

    else if(strlen($nome_nadador) < 3){
        $_SESSION['mensagem-de-erro'] = "<div class='danger'><p class='bg-danger'>O nome deve conter mais de 3 caracteres!</p></div>";
        header('location: index.php');
    }

    else if(empty($idade_nadador) || $idade_nadador == ''){
        $_SESSION['mensagem-de-erro'] = "<div class='danger'><p class='bg-danger'>Informe a idade!</p></div>";
        header('location: index.php');
    }

    else if(!is_numeric($idade_nadador)){
        $_SESSION['mensagem-de-erro'] = "<div class='danger'><p class='bg-danger'>Idade deve ser número...</p></div>";
        header('location: index.php');
    }

    else if(strlen($nome_nadador) >= 40){
        $_SESSION['mensagem-de-erro'] = "<div class='danger'><p class='bg-danger'>Nome muito extenso!</p></div>";
        header('location: index.php');
    }
    

    //Definindo as categorias
    if($idade_nadador < 6){
    }
    else if ($idade_nadador >= 6 && $idade_nadador <=12) {
        for($i=0; $i< count($categorias); $i++){
            if($categorias[$i] == 'Infantil'){
                $_SESSION['mensagem-de-sucesso'] = "O(a) nadador(a) ".$nome_nadador." compete na Categoria Infantil";
                header('location: index.php');

        }}
    }
    else if (($idade_nadador >= 13) && ($idade_nadador <18)) {
        for($i=0; $i< count($categorias); $i++){
            if($categorias[$i] == 'Adolescente'){
                $_SESSION['mensagem-de-sucesso'] = "O(a) nadador(a) ".$nome_nadador." compete na Categoria Adolescente";
                header('location: index.php');

        }}
    }
    else if ($idade_nadador >= 18) {
        for($i=0; $i< count($categorias); $i++){
            if($categorias[$i] == 'Adulto'){
                $_SESSION['mensagem-de-sucesso'] = "O(a) nadador(a) ".$nome_nadador." compete na Categoria Adulto";
                header('location: index.php');

        }}
    }


?>