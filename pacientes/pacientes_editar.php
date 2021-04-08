<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="imgs/favicon.png" type="image/x-icon" />
	<script src="../js/jquery-3.5.0.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
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
	<div id="titulo">Pacientes</div>
</div>	
</div>
<div class="row">
	<div class="col s12 center-align">
		<div id="titulo" style="font-size: 55px;">Visualizar</div>
	</div>
</div>
</nav>
	<!--fim título-->

	<div class="container">
		<div class="row">
	      <div class="col s4 ">
			<img class="imagens responsive-img left-align" src="../assets/paciente_feminina.png">
			      </div>
	      <div class="col s4 ">
	      	<nav id="barrinha">
			</nav>
	      </div>
	      <div class="col s4 ">
	      	<h7 style="font-size: 40px;">Dávila Fernandes</h7>
	      	<h7 style="font-size: 36px;">22/06/1990</h7>
	      </div>
	  </div>
	

	<div class="row" style="margin-top: 10%;">
	  	<div class="col s12">
	  		<div class="col s6 center-align">
	  			<button id="meubotao3" class="button-verde">Dados</button>
	  		</div>
	  		<div class="col s6 center-align">
	  			<button id="meubotao4" class="button-cinza">Formulários</button>
	  		</div>
	  	</div>
	 </div>
	 <?php
           include_once("../conexao.php");
           $result_pacientes = "SELECT * FROM tb_paciente";
           if ($resultado_pacientes = mysqli_query($conn, $result_pacientes)) {
               $id_paciente = array(); 
               $data_nascimento = array();
               $naturalidade = array();
               $i = 0; 
               while ($row_paciente = mysqli_fetch_assoc($resultado_pacientes)) {
                   $nomePaciente[$i] = $row_paciente['nome'];
                   $id_paciente[$i] = $row_paciente['id_paciente'];
                   $data_nascimento[$i] = (new DateTime($row_paciente['data_nascimento']))->format('d/m/Y');
                   $naturalidade[$i] = $row_paciente['naturalidade'];
        ?>
	<div class="row" style="margin-top: 10%;">
		<form method="POST" action="pacientes_visualizar.php">
		<div class="col s12 ">
			<p style="font-size: 40px; font-family: 'Exo 2-Regular'; color: #323B43; margin-top: 5%;"><b style="font-size: 35px; color: #323B43; margin-bottom: 16px; font-style: bold;
				font-family: 'Exo 2-Semi';
				text-align: left;
				padding: 24px 0;">Paciente:</b></p>
			<input type="text" name="nome" value="<?php echo $nomePaciente[$i];?>" style="font-size: 40px;" >
		</div>

		<div class="col s6 ">
			<p style="font-size: 40px; font-family: 'Exo 2-Regular'; color: #323B43; margin-top: 5%;"><b style="font-size: 35px; color: #323B43; margin-bottom: 16px; font-style: bold;
				font-family: 'Exo 2-Semi';
				text-align: left;
				padding: 24px 0;">Data de Nascimento:</b></p>
			<input type="text" name="data_nascimento" value="<?php echo $data_nascimento[$i]; ?>"  style="font-size: 40px;" >
		</div>

		<div class="col s12 ">
			<p style="font-size: 40px; font-family: 'Exo 2-Regular'; color: #323B43; margin-top: 5%;"><b style="font-size: 35px; color: #323B43; margin-bottom: 16px; font-style: bold;
				font-family: 'Exo 2-Semi';
				text-align: left;
				padding: 24px 0;">Naturalidade:</b></p>
			<input type="text" name="naturalidade" value="<?php echo $naturalidade[$i];?>"  style="font-size: 40px;" >
		</div>
	</div>
 <?php
              $i++;
               }
           }
           ?>  
         <?php  
        ?>
	<div class="col s12">

		<a href="pacientes_visualizar.html"><button class=" avanar valign-text-middle exo2-bold-white-16px"  style="margin-top: 100px; display: inline-block;
		margin-left: auto;
		margin-right: auto;">Cancelar</button></a>
		<button class="avanar valign-text-middle exo2-bold-white-16px modal-trigger" href="#modal1" style="margin-top: 100px; display: inline-block;
		margin-left: auto;
		margin-right: auto;">Salvar Alterações</button>
	</div>
</div>
<!--inicio modal de excluir formulário-->
		<!-- Modal Structure --> 
		<div id="modal1" class="modal" style="background-color: #30566B;">
			<div class="modal-content">
				<h6 style="color: white;">Deseja salvar as alterações realizadas?</h6>
			</div>
				<div class="row" style="background-color: #30566B;">		
					<div class="modal-footer" style="background-color: #30566B;">
						<div class="col s5">
				<button class=" modal-close avanar valign-text-middle exo2-bold-white-16px" href="#" style="display: inline-block;
				margin-left: auto;
				margin-right: auto; width: auto; height: auto; border-style: double; border-color: #5ABBE5; color: #5ABBE5;">Cancelar</button>
				<a href="pacientes_visualizar.php"><button class=" avanar valign-text-middle exo2-bold-white-16px modal-trigger fechar-modal modal-close" name="submitPaciente" style="margin-top: 0px; display: inline-block;
					 width: auto; height: auto; border-style: double; border-color: #5ABBE5; color: white; text-align: center; margin-bottom: 0px;">Concluir</button></a>
			</div>
		</div>
	</div>
</div></form>
</div>
<?php
	include_once("../conexao.php");
	$id_paciente = array(); 
	$nomePaciente[$i] = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$data_nascimento[$i] = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_STRING);
	$naturalidade[$i] = filter_input(INPUT_POST, 'naturalidade', FILTER_SANITIZE_STRING);
	
	if ($conn) {
		$query = mysqli_query($conn,"update tb_paciente set nome = '$nomePaciente[$i]', data_nascimento = '$data_nascimento[$i]', naturalidade = '$naturalidade[$i]' where id_paciente = '$id_paciente[$i]'");
		if ($query) {
			header("Location: ". mysqli_error($conn));
		}else{
			die("ERROR: ". mysqli_error($conn));
		}
	}else{
		die("ERROR: ". mysqli_error($conn));
	}

?>
		<!--fim modal de excluir formulario-->

		<!--inicio modal de confirmar exclusão-->
		<!-- Modal Structure -->
		<div id="modal2" class="modal">
			<div class="modal-content" style="background-color: #30566B;">
				<img src="../assets/icon_confirma.png">
				<h6 style="color: white;">Os dados do paciente foram alterados com sucesso.</h6>
			</div>
			<div class="modal-footer" style="background-color: #30566B;">
				
				<a href="pacientes_visualizar.html"><button class=" avanar valign-text-middle exo2-bold-white-16px modal-trigger fechar-modal modal-close" style="margin-top: 0px; display: inline-block;
					 width: auto; height: auto; border-style: double; border-color: #5ABBE5; color: white; text-align: center; margin-bottom: 0px;">Concluir</button></a>
			
			</div>
		</div>
		<!--fim modal de confirmar exclusão-->

</body>
<!--inicio do menu inferior-->
<div class="footer-fixed">
	<footer >
		<nav class="z-depth-0 nav-menu">
			<div class="nav-wrapper">
				<ul class="justify">
					<li><a href="../index.html"><img src="../assets/icon-home.png" class="img-icon" ></a></li>
					<li><a href="../formulario.html"><img src="../assets/icon_forms.png" class="img-icon"></a></li>
					<li><a class="active" href="pacientes.html"><img src="../assets/icon_paciente.png" class="img-icon"></a></li>
					<li><a href="../ajuda.html"><img src="../assets/icon_ajuda.png" class="img-icon"></a></li>
					<li><a href="../sobre.html"><img src="../assets/icon_sobre.png" class="img-icon"></a></li>
				</ul>
			</div>
		</nav>
	</footer>
</div>
<!--fim do menu inferior-->  
<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript">
	let buttonClick3 = document.getElementById('meubotao3'); //O botao criado deve ter o campo id="meubotao"
	let buttonClick4 = document.getElementById('meubotao4');

	console.log(buttonClick3);
	buttonClick3.addEventListener("click",function(event){
	    window.location.href = "../pacientes/pacientes_visualizar.html";
	    console.log("Tentei redirecionar!!!");
	});
	console.log(buttonClick4);
	buttonClick4.addEventListener("click",function(event){
	    window.location.href = "../pacientes/pacientes_formulario.html";
	    console.log("Tentei redirecionar!!!");
	});
</script>
</html>