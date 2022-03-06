<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <title>Usuario - Mensagens</title>
</head>
<body>
    <!-- Exibe Botao de retorno a tela inicial -->
    <div class="container mt-5">
        <div class="alert alert-info">
            <?php echo $message;?><br> 
        </div>
        <?php echo anchor(base_url(), 'Pagina Inicial', ['class' => 'btn btn-success mb-3']) ?>
    </div>
</body>
</html>