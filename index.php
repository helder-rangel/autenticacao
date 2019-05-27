<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Acesso - PHP && MySQL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <h3 class="title has-text-grey">Sistema de Acesso</h3>
                <h6 class="title has-text-grey">Egressos IFPB</h6>
                <?php
                if (isset($_SESSION['nao_autenticado'])) :
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <p>ERRO: Usuário ou senha inválido.</p>
                    </div>
                <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>
                <div class="form-group">
                    <form action="login.php" method="POST">
                        <label for="usuario">Usuário</label>
                        <input id="usuario" name="usuario" name="text" class="min-vw-50" placeholder="Seu usuário" autofocus="">
                        <label for="Password1">Senha</label>
                        <input id="Password1" name="senha" class="min-vw-50" type="password" placeholder="Sua senha">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>