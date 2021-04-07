<?php

include_once("conexao.php");
//cadastro de usuario
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$data_nascimento = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$confirm_senha = filter_input(INPUT_POST, 'confirm_senha', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$ocupacao = $_POST['ocupacao'];
$local_trabalho = filter_input(INPUT_POST, 'local_trabalho', FILTER_SANITIZE_STRING);

echo $ocupacao;

 $result_usuario = "INSERT INTO tb_cad_usuario(nome, data_nascimento, email, senha, confirm_senha, cpf, ocupacao, local_trabalho) VALUES ('$nome', '$data_nascimento', '$email', '$senha', '$confirm_senha', '$cpf', '$ocupacao', '$local_trabalho')";

 $result_login = "INSERT INTO tb_login( email, senha) VALUES ('$email', '$senha')";

 $resultado_usuario = mysqli_query($conn, $result_usuario);
 $resultado_login = mysqli_query($conn, $result_login);
 $linhas = mysqli_affected_rows($conn);
    
    echo "$linhas linhas afetadas";
                                
?>
