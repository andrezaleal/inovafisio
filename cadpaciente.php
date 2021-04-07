<?php
    include_once("conexao.php");
    //cadastro paciente 
    $nome_paciente = filter_input(INPUT_POST, 'nome_paciente', FILTER_SANITIZE_STRING);
    $data_nascimento_paciente = filter_input(INPUT_POST, 'data_nascimento_paciente', FILTER_SANITIZE_STRING);
    $profissao = filter_input(INPUT_POST, 'profissao_paciente', FILTER_SANITIZE_STRING);
    $etnia = filter_input(INPUT_POST, 'etnia_paciente', FILTER_SANITIZE_STRING);
    $naturalidade = filter_input(INPUT_POST, 'naturalidade_paciente', FILTER_SANITIZE_STRING);
    $sexo = filter_input(INPUT_POST, 'sexo_paciente', FILTER_SANITIZE_STRING);
    $estado_civil = filter_input(INPUT_POST, 'estado_civil_paciente', FILTER_SANITIZE_STRING);
    $grau_instrucao = filter_input(INPUT_POST, 'grau_instrucao_paciente', FILTER_SANITIZE_STRING);
    $motivo_atendimento = filter_input(INPUT_POST, 'motivo_atendimento_paciente', FILTER_SANITIZE_STRING);
    $data_ocorrido = filter_input(INPUT_POST, 'data_ocorrido_paciente', FILTER_SANITIZE_STRING);
    $tempo_doenca = filter_input(INPUT_POST, 'tempo_doenca_paciente', FILTER_SANITIZE_STRING);
    $regioes_acometidas= filter_input(INPUT_POST, 'regioes_acometidas_paciente', FILTER_SANITIZE_STRING);
    $procedimento = filter_input(INPUT_POST, 'procedimento_paciente', FILTER_SANITIZE_STRING);
    $remedio = filter_input(INPUT_POST, 'remedio_paciente', FILTER_SANITIZE_STRING);

    $result_paciente = "INSERT INTO `tb_paciente`(`nome`, `data_nascimento`, `profissao`, `etnia`, `naturalidade`, `sexo`, `estado_civil`, `grau_instrucao`, `motivo_atendimento`, `data_ocorrido`, `tempo_de_doenca`, `regioes_mais_acometidas`, `procedimento_cirurgico`, `remedios_frequentes`) VALUES ('$nome_paciente', '$data_nascimento_paciente','$profissao', '$etnia', '$naturalidade', '$sexo', '$estado_civil', '$grau_instrucao', '$motivo_atendimento', '$data_ocorrido', '$tempo_doenca', '$regioes_acometidas', '$procedimento', '$remedio')";
    $resultado_paciente = mysqli_query($conn, $result_paciente);
    $linhas = mysqli_affected_rows($conn);
    header("location: cadastropaciente.php");exit();
?>