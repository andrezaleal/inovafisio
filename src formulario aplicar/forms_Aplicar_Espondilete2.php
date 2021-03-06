<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="imgs/favicon.png" type="image/x-icon" />
	<script src="js/jquery-3.5.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link rel = "stylesheet"href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type = "text/javascript"src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>            
	<link rel="stylesheet" href="../css/style.css">
	<script type="text/javascript" src="../js/main.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
	<div class="container">
		<div class="row">
			<form method="POST">
			<div class="col s12">
				<h6 style="font-size: 35px;">BASFI- Espondilite Anquilosante</h6>
			</div>

			<div class="col s12">
				<h6 style="font-size: 35px;">1. Colocar meias e amarrar sapatos sem ajuda ou auxílio :</h6>
			</div>
			<div class="col s12" >
				<div class="range-wrap">
					<output class="bubble"></output>
					<label style="font-size:25px">0</label><label style="left: 95%;position: relative; font-size:25px">10</label><input type="range" name="questao1" class="range" min="0" max="10" style="font-size:25px"><label style="font-size: 25px;">Fácil</label><label  style="left: 82%;position: relative; font-size: 25px;">Impossível</label>
				</div>
			</div>

			<div class="col s12">
				<h6 style="font-size: 35px;">2. Pegar uma caneta no chão sem ajuda, partindo da posição em pé:</h6>
			</div>
			<div class="col s12" >
				<div class="range-wrap">
					<output class="bubble"></output>
					<label style="font-size:25px">0</label><label style="left: 95%;position: relative; font-size:25px">10</label><input type="range" name="questao2" class="range" min="0" max="10" style="font-size:25px"><label style="font-size: 25px;">Fácil</label><label  style="left: 82%;position: relative; font-size: 25px;">Impossível</label>
				</div>
			</div>

			<div class="col s12">
				<h6 style="font-size: 35px;">3. Alcançar uma prateleira acima da sua cabeça, sem ajuda:</h6>
			</div>
			<div class="col s12" >
				<div class="range-wrap">
					<output class="bubble"></output>
					<label style="font-size:25px">0</label><label style="left: 95%;position: relative; font-size:25px">10</label><input type="range" name="questao3" class="range" min="0" max="10" style="font-size:25px"><label style="font-size: 25px;">Fácil</label><label  style="left: 82%;position: relative; font-size: 25px;">Impossível</label>
				</div>
			</div>

			<div class="col s12">
				<h6 style="font-size: 35px;">4. Levantar de uma cadeira sem braços, sem a ajuda das próprias mãos ou ajuda de outros:</h6>
			</div>
			<div class="col s12" >
				<div class="range-wrap">
					<output class="bubble"></output>
					<label style="font-size:25px">0</label><label style="left: 95%;position: relative; font-size:25px">10</label><input type="range" name="questao4" class="range" min="0" max="10" style="font-size:25px"><label style="font-size: 25px;">Fácil</label><label  style="left: 82%;position: relative; font-size: 25px;">Impossível</label>
				</div>
			</div>

			<div class="col s12">
				<h6 style="font-size: 35px;">5. Da posição de deitado no chão, consegue levantar-se sem ajuda:</h6>
			</div>
			<div class="col s12" >
				<div class="range-wrap">
					<output class="bubble"></output>
					<label style="font-size:25px">0</label><label style="left: 95%;position: relative; font-size:25px">10</label><input type="range" name="questao5" class="range" min="0" max="10" style="font-size:25px"><label style="font-size: 25px;">Fácil</label><label  style="left: 82%;position: relative; font-size: 25px;">Impossível</label>
				</div>
			</div>

			<div class="col s12">
				<h6 style="font-size: 35px;">6. Ficar em pé por 10 minutos sem desconforto:</h6>
			</div>
			<div class="col s12" >
				<div class="range-wrap">
					<output class="bubble"></output>
					<label style="font-size:25px">0</label><label style="left: 95%;position: relative; font-size:25px">10</label><input type="range" name="questao6" class="range" min="0" max="10" style="font-size:50px; size: 50px;"><label style="font-size: 25px;">Fácil</label><label  style="left: 82%;position: relative; font-size: 25px;">Impossível</label>
				</div>
			</div>

			<div class="col s12">
				<h6 style="font-size: 35px;">7. Subir 12 ou 15 degraus sem auxílio de corrimão ou apoio de outra pessoa:</h6>
			</div>
			<div class="col s12" >
				<div class="range-wrap">
					<output class="bubble"></output>
					<label style="font-size:25px">0</label><label style="left: 95%;position: relative; font-size:25px">10</label><input type="range" name="questao7" class="range" min="0" max="10"><label style="font-size: 25px;">Fácil</label><label  style="left: 82%;position: relative; font-size: 25px;">Impossível</label>
				</div>
			</div>

			<div class="col s12">
				<h6 style="font-size: 35px;">8. Olhar por cima do ombro sem virar o corpo:</h6>
			</div>
			<div class="col s12" >
				<div class="range-wrap">
					<output class="bubble"></output>
					<label style="font-size:25px">0</label><label style="left: 95%;position: relative; font-size:25px">10</label><input type="range" name="questao8" class="range" min="0" max="10"><label style="font-size: 25px;">Fácil</label><label  style="left: 82%;position: relative; font-size: 25px;">Impossível</label>
				</div>
			</div>

			<div class="col s12">
				<h6 style="font-size: 35px;">9. Fazer atividades físicas (exercícios de fisioterapia, cuidar do jardim, praticar algum esporte):</h6>
			</div>
			<div class="col s12" >
				<div class="range-wrap">
					<output class="bubble"></output>
					<label style="font-size:25px">0</label><label style="left: 95%;position: relative; font-size:25px">10</label><input type="range" class="range" name="questao9" min="0" max="10"><label style="font-size: 25px;">Fácil</label><label  style="left: 82%;position: relative; font-size: 25px;">Impossível</label>
				</div>
			</div>

			<div class="col s12">
				<h6 style="font-size: 35px;">10. Fazer atividades que durem o dia todo, seja em casa ou no trabalho:</h6>
			</div>
			<div class="col s12" >
				<div class="range-wrap">
					<output class="bubble"></output>
					<label style="font-size:25px">0</label><label style="left: 95%;position: relative; font-size:25px">10</label><input type="range" class="range" name="questao10" min="0" max="10"><label style="font-size: 25px;">Fácil</label><label  style="left: 82%;position: relative; font-size: 25px;">Impossível</label>
				</div>
			</div>







			<div class="col s12">
				<a href="../src formulario concluido/forms_conclusao2.html"><button class="avanar valign-text-middle exo2-bold-white-16px" style="display: block;
					margin-left: auto;
					margin-right: auto; margin-top: 14%;">Avançar</button></a>
			</div>
	  </div>
	</form>
	</div>

	  
	<script type="text/javascript">
		const allRanges = document.querySelectorAll(".range-wrap");
		allRanges.forEach(wrap => {
			const range = wrap.querySelector(".range");
			const bubble = wrap.querySelector(".bubble");

			range.addEventListener("input", () => {
				setBubble(range, bubble);
			});
			setBubble(range, bubble);
		});

		function setBubble(range, bubble) {
			const val = range.value;
			const min = range.min ? range.min : 0;
			const max = range.max ? range.max : 100;
			const newVal = Number(((val - min) * 100) / (max - min));
			bubble.innerHTML = val;

		   bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
}

	</script>
<!--inicio do menu inferior-->
<div class="footer-fixed">
	<footer >
		<nav class="z-depth-0 nav-menu">
			<div class="nav-wrapper">
				<ul class="justify">
					<li><a href="../index.html"><img src="../assets/icon-home.png" class="img-icon" ></a></li>
					<li><a href="../formulario.html"><img src="../assets/icon_forms.png" class="img-icon"></a></li>
					<li><a class="active" href="../pacientes/pacientes.html"><img src="../assets/icon_paciente.png" class="img-icon"></a></li>
					<li><a href="../ajuda.html"><img src="../assets/icon_ajuda.png" class="img-icon"></a></li>
					<li><a href="../sobre.html"><img src="../assets/icon_sobre.png" class="img-icon"></a></li>
				</ul>
			</div>
		</nav>
	</footer>
</div>
<?php
include_once("../conexao.php");
$questao1 = $_POST['questao1'];
$questao2 = $_POST['questao2'];
$questao3 = $_POST['questao3'];
$questao4 = $_POST['questao4'];
$questao5 = $_POST['questao5'];
$questao6 = $_POST['questao6'];
$questao7 = $_POST['questao7'];
$questao8 = $_POST['questao8'];
$questao9 = $_POST['questao9'];
$questao10 = $_POST['questao10'];

$result_questionario = "INSERT INTO tb_questionario_espondilete(questao1, questao2, questao3, questao4, questao5, questao6, questao7, questao8, questao9, questao10) VALUES ('$questao1', '$questao2', '$questao3', '$questao4', '$questao5', '$questao6', '$questao7', '$questao8', '$questao9', '$questao10')";
 $resultado_questionario = mysqli_query($conn, $result_questionario);
 $linhas = mysqli_affected_rows($conn);
echo "$linhas linhas afetadas";
?>
<!--fim do menu inferior-->
</body>
</html>