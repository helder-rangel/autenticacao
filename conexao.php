<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'contr279_egressos');
define('SENHA', '123abc');
define('DB', 'contr279_egressos');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível acessar');