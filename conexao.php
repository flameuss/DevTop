<?php
  define('HOST', '127.0.0.1'); // aqui você insere o caminho do seu host local, por padrão  "127.0.0.1"
  define('USUARIO', 'root'); // aqui o usuário de conexão ao banco de dados, por padrão do xampp "root"
  define('SENHA', ''); //aqui vai a senha do seu banco de dados
  define('DB', ''); // aqui o nome do banco de dados

//Criar a conexao
$conn = mysqli_connect( HOST, USUARIO, SENHA, DB ) or die('Não foi possivel conectar!');

