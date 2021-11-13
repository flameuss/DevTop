<?php
session_start();
include('conexao.php');

if (empty($_POST['login']) || empty($_POST['password'])) {
    header('Location: index.php');
    exit();
}

$login = mysqli_real_escape_string($conn, $_POST['login']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$query = "select login_id, login from usuario where login='{$login}' and password = md5('{$password}');";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['login'] = $login;
    header('Location: cursos.php');
    exit();
} else {
    header('Location: painel.php');
    exit();
}
