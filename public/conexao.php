<?php

define('HOST','127.0.0.1');
define('USUARIO','root');
define('SENHA','Di140617');
define('DB','devtop');





//Criar a conexao
$conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel connectar!');

?>

