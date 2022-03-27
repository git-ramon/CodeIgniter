<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <title>Usuario</title>
</head>
<body>
    <div class="container mt-5">
        
        <?php echo anchor(base_url('usuario/create'), 'Novo Usuario', ['class' => 'btn btn-success mb-3']) ?>

        <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobre Nome</th>
                    <th>Login</th>
                    <th>Email</th>
                    <th>Açoes</th>
                </tr>
            <?php foreach ($usuarios as $user): ?>
                    <tr>
                        <td><?php echo $user['id'] ?></td>
                        <td><?php echo $user['nome'] ?></td>
                        <td><?php echo $user['sobrenome'] ?></td>
                        <td><?php echo $user['login'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td>
                            <?php echo anchor('usuario/editar/' .$user['id'], 'Editar') ?>
                            -
                            <?php echo anchor('usuario/delete/' .$user['id'], 'Excluir', ['onclick' => 'return confirma()']) ?>
                        </td>
                    </tr>
            <?php endforeach; ?>
        </table>
         <!-- Exibe o Link de paginaçao enviado pelo pager -->
        <?php echo $paginas->links(); ?>
    </div>     

    <!-- Arquivo Java Script com funçoes externas -->
    <script type="text/javascript" src="../scrypt.js"></script>

</body>
</html>