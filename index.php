<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Formulário para inscrição de competidores</title>

    <style> 
        form{
            text-align: center;
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <form action="script.php" method='POST' class="form-inline">
        <div class="form-group">
            <label for="">Seu nome: </label><input type="text" id="nome" name="nome" class="form-control">
        
        <div class="form-group">
            <label for="">Sua idade: </label><input type="text" name="idade" class="form-control">
        </div> 

            <input type="submit" id="bt" value="Enviar" class="btn btn-success">
        </div>
    </form>
</body>
</html>
