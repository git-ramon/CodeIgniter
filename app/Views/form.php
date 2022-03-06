<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <title>Formulario</title>
</head>
<body>
    <div class="container mt-5">
    <!-- Formulario de Cadastro e Alteraçao de Usuario -->
        <?php echo form_open('usuario/store') ?>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" value="<?php echo isset($useredit['nome']) ? $useredit['nome']: '' ?>" name="nome" id="nome" class="form-control">

            <label for="sobrenome">Sobrenome</label>
            <input type="text" value="<?php echo isset($useredit['sobrenome']) ? $useredit['sobrenome']: '' ?>" name="sobrenome" id="sobrenome" class="form-control">

            <label for="login">Login</label>
            <input type="text" value="<?php echo isset($useredit['login']) ? $useredit['login']: '' ?>" name="login" id="login" class="form-control">
            
            <label for="email">E-mail</label>
            <input type="email" value="<?php echo isset($useredit['email']) ? $useredit['email']: '' ?>" name="email" id="email" class="form-control">
        </div>
        <input type="submit" value="Salvar" class="btn btn-success">
        <input type="hidden" name="id" value="<?php echo isset($useredit['id']) ? $useredit['id']: '' ?>">
        <?php echo form_close(); ?>
    </div>
</body>
</html>