<?php
include_once("conexao.php");

//validação de login
 if (empty($_POST['email_login']) || empty($_POST['senha_login'])) {
 	header('Location: login.php');
 	exit();
 }

$email_login = mysqli_real_escape_string($conn, $_POST['email_login']);
$senha_login = mysqli_real_escape_string($conn, $_POST['senha_login']);

$query =  "SELECT id_usuario, email from tb_login where email = {'$email_login'} and senha = md5({'$senha_login'})";

$result = mysqli_query($conn,$query);
$row = mysqli_num_rows($result);
echo $row;exit();
?>