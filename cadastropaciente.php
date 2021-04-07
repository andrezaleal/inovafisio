<?php??>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="imgs/favicon.png" type="image/x-icon" />
	<script src="js/jquery-3.5.0.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/main.js"></script>
	<script  src="js/main.js"></script>
	<meta charset="utf-8">
	<title>InovaForms</title>
</head>
<body>
	<!--inicio título-->
	<nav id="barra-status">
		<div class="row">
		<div class="col s1" style="display: flex; flex-direction: column; align-items: flex-start; margin-left: -10%;">
	<a href="javascript:void(0)" onClick="history.go(-1); return false;" class="waves-effect waves-light btn" style="background-color: rgba(0, 0, 0, 0);"><i class="material-icons center">chevron_left</i></a>
</div>
<div class="col s12 center-align">
	<div id="titulo">Formulários</div>
</div>	
</div>
<div class="row">
	<div class="col s12 center-align">
		<div id="titulo" style="font-size: 55px;">Aplicar</div>
	</div>
</div>
</nav>
	<!--fim título-->

    	<!--início pacientes-->

    <div class="wall wall-1" id="wall-1">
        <div class="container">
    <div class="row">
        <h7 style="font-size: 35px; font-family: 'Exo 2-Semi'; color: #30566B;">Escolha um dos pacientes ja cadastrados e selecione o local de atuação no qual irá aplicar esse questionário. Caso não tenha o cadastro do paciente, vá na aba “Cadastrar”.</h7> 
    </div>
    <div class="row linha" id="botoes" style="margin-top: 8%;">
        <div class="col s6 center-align">
            <button id="meubotao1" class="button-verde" onclick='window.location = "#wall-1"';>Pacientes</button>
        </div>
        <div class="col s6 center-align">
            <button id="meubotao2" class="button-cinza" onclick='window.location = "#wall-2"';>Cadastrar</button>
        </div>
    </div>
    <!--inicio barra de pesquisa-->
        <div class="row">
            <div class="col s10 barra-busca" style=" background-color: white; border-bottom-left-radius: 20px; border-top-left-radius: 20px;">
                <h6 style="margin-left: 5%;">Buscar por paciente</h6>
                <form>
                    <input type="text" name="" size="20" placeholder="Toque para buscar" class="campo-busca" style="background-color: #EBF0F1;
                    border-radius: 7px; width: 90%; margin-left: 5%; height: 50px;">
                </form>
            </div>

            <div class="col s2 barra-busca" style=" background-color: white;border-bottom-right-radius: 20px; border-top-right-radius: 20px;">
                <a class="waves-effect waves-light btn" style="position:relative !important;
                top: 77%;
                transform: translateY(-77%); border-radius: 10px; height: 50px;"><i class="material-icons left" style="margin-left: 10%;">search</i></a>
            </div>
        </div>
        <!--fim barra de pesquisa-->
        <?php
           include_once("conexao.php");
           $result_pacientes = "SELECT * FROM tb_paciente";
           if ($resultado_pacientes = mysqli_query($conn, $result_pacientes)) {
               $nomePaciente = array(); 
               $i = 0; 
               while ($row_paciente = mysqli_fetch_assoc($resultado_pacientes)) {
                   $nomePaciente[$i] = $row_paciente['nome'];
        ?>
            <a href="pacientes/pacientes_visualizar.php"><div class="row">
            <div class="col s12 categorias" style="display: inline-block; border-radius: 20px; margin-top: 10%; background-color: #5ABBE5;">
                <h6 style="display: inline-block; margin-left: 5%; padding: 0px; position:relative !important;
                font-size: 50px; color:white;"><?php echo $nomePaciente[$i];?></h6>
            </div>
        </div></a>
              <?php
              $i++;
               }
           }
           ?>  
         <?php  
        ?>
    
</div>
</div>

    	<!--fim pacientes-->
    	<!--início cadastro-->

<div class="wall wall-2" id="wall-2">
    <div class="container">
<div class="row">
    <h7 style="font-size: 35px; font-family: 'Exo 2-Semi'; color: #30566B;">Cadastre um novo paciente para ser realizado o formulário</h7> 
</div>
<div class="row linha" id="botoes" style="margin-top: 8%;">
    <div class="col s6 center-align">
        <button id="meubotao1" class="button-cinza" href="#wall-1"  onclick='window.location = "#wall-1"';>Pacientes</button>
    </div>
    <div class="col s6 center-align">
        <button id="meubotao2" class="button-verde" href="#wall-2">Cadastrar</button>
    </div>
</div>
<label class="bexiga exo2-semi-bold-tuna-16px">Cadastrar Novo Paciente</label>
<form method="POST" action="cadpaciente.php">
    <div class="col s12" style="margin-top: 5%;">
        <label class="bexiga exo2-semi-bold-tuna-16px">Nome Completo do Paciente</label>
    </div>

    <div class="col s12" style="margin-top: 5%;">
        <input name="nome_paciente" class="rectangle-13" placeholder="Fulano Sicrano da Silva" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; "></input>
    </div>
    <div class="col s12" style="margin-top: 5%;">
        <label class="bexiga exo2-semi-bold-tuna-16px">Data de Nascimento</label>
    </div>

    <div class="col s12" style="margin-top: 5%;">
        <input class="rectangle-13" type="date" name="data_nascimento_paciente" placeholder="23/12/2000" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; "></input>
    </div> 
    <div class="col s12" style="margin-top: 5%;">
        <label class="bexiga exo2-semi-bold-tuna-16px">Profissão</label>
    </div>

    <div class="col s12" style="margin-top: 5%;">
        <input class="rectangle-13" name="profissao_paciente" placeholder="" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; "></input>
    </div>
    <div class="col s12" style="margin-top: 5%;">
        <label class="bexiga exo2-semi-bold-tuna-16px">Etnia</label>
    </div>

    <div class="input-field col s12" style="margin-top: 5%;">
        <input class="rectangle-13" name="etnia_paciente" placeholder="" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; "></input>
    </div>

    <div class="col s12" style="margin-top: 5%;">
        <label class="bexiga exo2-semi-bold-tuna-16px">Naturalidade</label>
    </div>

    <div class="input-field col s12" style="margin-top: 5%;">
        <input class="rectangle-13" name="naturalidade_paciente" placeholder="" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; "></input>
    </div>

    <div class="col s12" style="margin-top: 5%;">
        <label class="bexiga exo2-semi-bold-tuna-16px">Sexo</label>
    </div>

    <div class="input-field col s12" style="margin-top: 5%;">
        <input class="rectangle-13" name="sexo_paciente" placeholder="" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; "></input>
    </div>

    <div class="col s12" style="margin-top: 5%;">
        <label class="bexiga exo2-semi-bold-tuna-16px">Estado Civil</label>
    </div>

    <div class="input-field col s12" style="margin-top: 5%;">
        <input class="rectangle-13" name="estado_civil_paciente" placeholder="" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; "></input>
    </div>

    <div class="col s12" style="margin-top: 5%;">
        <label class="bexiga exo2-semi-bold-tuna-16px">Grau de Instrução</label>
    </div>

    <div class="input-field col s12" style="margin-top: 5%;">
        <input class="rectangle-13" name="grau_instrucao_paciente" placeholder="" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; "></input>
    </div>

    <div class="col s12" style="margin-top: 5%;">
        <label class="bexiga exo2-semi-bold-tuna-16px">Motivo do Atendimento</label>
    </div>

    <div class="input-field col s12" style="margin-top: 5%;">
        <textarea class="rectangle-13" name="motivo_atendimento_paciente" placeholder="" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; height: 140px;"></textarea>
    </div>

    <div class="col s12" style="margin-top: 5%;">
        <label class="bexiga exo2-semi-bold-tuna-16px">Data do Ocorrido</label>
    </div>

    <div class="input-field col s12" style="margin-top: 5%;">
        <input class="rectangle-13" type="date" name="data_ocorrido_paciente" placeholder="" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; "></input>
    </div>

    <div class="col s12" style="margin-top: 5%;">
        <label class="bexiga exo2-semi-bold-tuna-16px">Tempo de doença</label>
    </div>

    <div class="input-field col s12" style="margin-top: 5%;">
        <input class="rectangle-13" name="tempo_doenca_paciente"  placeholder="" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; "></input>
    </div>

    <div class="col s12" style="margin-top: 5%;">
        <label class="bexiga exo2-semi-bold-tuna-16px">Regiões mais acometidas</label>
    </div>

    <div class="input-field col s12" style="margin-top: 5%;">
        <input class="rectangle-13" name="regioes_acometidas_paciente" placeholder="" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; "></input>
    </div>

    <div class="col s12" style="margin-top: 5%;">
        <label class="bexiga exo2-semi-bold-tuna-16px">Realizou procedimento cirúrgico? Se sim, qual?</label>
    </div>

    <div class="input-field col s12" style="margin-top: 5%;">
        <input class="rectangle-13" name="procedimento_paciente" placeholder="" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; "></input>
    </div>
    <div class="col s12" style="margin-top: 5%;">
        <label class="bexiga exo2-semi-bold-tuna-16px">Quais remédios faz uso frequentemente?</label>
    </div>

    <div class="input-field col s12" style="margin-top: 5%;">
        <input class="rectangle-13" name="remedio_" placeholder="" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; "></input>
    </div>
    <div class="row">
    <div class="col s6">
        <button class="avanar valign-text-middle exo2-bold-white-16px modal-trigger" onclick='window.location = "#wall-1"'; style="margin-top: 30%; background-color: white; color: #30566B; border-style: double; border-color: #30566B;">Cancelar Cadastro</button>
    </div>
    <div class="col s6">
        <button class="avanar valign-text-middle exo2-bold-white-16px" style="margin-top: 30%;">Cadastrar</button>
    </div>
    </div>
</form>

</div>


</div>
</div>
    	<!--fim cadastro-->

    </body>
    <script>window.location = "#wall-1";</script>


</html>