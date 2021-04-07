<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="imgs/favicon.png" type="image/x-icon" />
	<script src="js/jquery-3.5.0.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link rel="stylesheet" href="../css/style.css">
	<script type="text/javascript" src="js/main.js"></script>
	<script  src="js/main.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta charset="utf-8">
	<title>InovaForms</title>
</head>
<body>
		<!--inicio título-->
		<nav id="barra-status">
			<div class="row">
			<div class="col s1" style="display: flex; flex-direction: column; align-items: flex-start; margin-left: -10%;">
		<a href="../src formulario aplicar/forms_Aplicar_pelvico.html" class="waves-effect waves-light btn" style="background-color: rgba(0, 0, 0, 0);"><i class="material-icons center">chevron_left</i></a>
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

	      <div class="col s12">
	      	<h6 style="color: #30566B; margin-top: 0px; margin-bottom: 0px;">Questionário de Impacto no Assoalho Pélvico</h6>
	      </div> 

	      <div class="col s12">
	      	<h6 style="font-size: 40px; color: #323B43; margin-bottom: 16px;">Condições ou sintomas que afetam o paciente em relação a:</h6>
	      </div>

	      <form method="POST">
	      	<div class="col s12">
	      		<label class="bexiga exo2-semi-bold-tuna-16px">Bexiga</label>
	      	</div>

	      	<div class="col s12">
	      		<textarea name="condicoes_bexiga" class="rectangle-33"></textarea>
	      	</div>

	      	<div class="col s12">
	      		<label class="bexiga exo2-semi-bold-tuna-16px">Intestino</label>
	      	</div>

	      	<div class="col s12">
	      		<textarea name="condicoes_intestino" class="rectangle-33"></textarea>
	      	</div>

	      	<div class="col s12">
	      		<label class="bexiga exo2-semi-bold-tuna-16px">Vagina</label>
	      	</div>

	      	<div class="col s12">
	      		<textarea name="condicoes_Vagina" class="rectangle-33"></textarea>
	      	</div>
		  <div class="col s12">
			<h6 style="font-size: 35px;">1. Como os sintomas citados geralmente afetam sua habilidade de realizar atividades domésticas
		  (ex: cozinhar, arrumar a casa, lavar
		  roupas)?</h6>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Bexiga</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="bexiga1" type="radio" checked value="nem um pouco" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="bexiga1" type="radio" value="Um pouco" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="bexiga1" type="radio" value="Moderadamente" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="bexiga1" type="radio" value="Bastante" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Intestino</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="intestino1" value="Nem um pouco" type="radio" checked />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="intestino1" type="radio" value="Um pouco" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="intestino1" value="Moderadamente" type="radio"  />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="intestino1" value="Bastante" type="radio" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Vagina</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="vagina1" value="Nem um pouco" type="radio" checked />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="vagina1" value="Um pouco" type="radio" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="vagina1" value="Moderadamente" type="radio"  />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="vagina1" value="Bastante" type="radio" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
			<h6 style="font-size: 35px;">2. Como os sintomas citados geralmente afetam sua habilidade de realizar atividades físicas como caminhar, nadar ou outro tipo de exercício?</h6>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Bexiga</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="bexiga2" value="Nem um pouco" type="radio" checked />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="bexiga2" value="Um pouco" type="radio" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="bexiga2" value="Moderadamente" type="radio"  />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="bexiga2" value="Bastante" type="radio" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Intestino</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="intestino2" value="Nem um pouco" type="radio" checked />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="intestino2" value="Um pouco" type="radio" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="intestino2" value="Moderadamente" type="radio"  />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="intestino2" value="Bastante" type="radio" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Vagina</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="vagina2" value="Nem um pouco" type="radio" checked />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="vagina2" value="Um pouco" type="radio" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="vagina2" value="Moderadamente" type="radio"  />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="vagina2" value="Bastante" type="radio" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
			<h6 style="font-size: 35px;">3. Geralmente afetam atividades de entretenimento, como ir ao cinema ou a um show?</h6>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Bexiga</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="bexiga3" value="Nem um pouco" type="radio" checked />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="bexiga3" value="Um pouco" type="radio" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="bexiga3" value="Moderadamente" type="radio"  />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 16px;">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="bexiga3" value="Bastante" type="radio" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Intestino</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="intestino3" value="Nem um pouco" type="radio" checked />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="intestino3" value="Um pouco" type="radio" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="intestino3" value="Moderadamente" type="radio"  />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="intestino3" value="Bastante" type="radio" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Vagina</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="vagina3" value="Nem um pouco" type="radio" checked />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="vagina3" value="Um pouco" type="radio" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="vagina3" value="Moderadamente" type="radio"  />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="vagina3" value="Bastante" type="radio" />
				  <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
			<h6 style="font-size: 35px;">4. Geralmente afetam sua habilidade de viajar de carro ou ônibus por uma distancia maior do que 30 minutos da sua casa?</h6>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Bexiga</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="bexiga4" value="Nem um pouco" type="radio" checked />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="bexiga4" value="Um pouco" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="bexiga4" value="Moderadamente" type="radio"  />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="bexiga4" value="Bastante" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Intestino</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="intestino4" value="Nem um pouco" type="radio" checked />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="intestino4" value="Um pouco" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="intestino4" value="Moderadamente" type="radio"  />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="intestino4" value="Bastante" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Vagina</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="vagina4" value="Nem um pouco" type="radio" checked />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="vagina4" value="Um pouco" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="vagina4" value="Moderadamente" type="radio"  />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="vagina4" value="Bastante" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
			<h6 style="font-size: 35px;">5. Geralmente afetam sua participação em atividades sociais fora de casa?</h6>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Bexiga</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="bexiga5" value="Nem um pouco" type="radio" checked />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="bexiga5" value="Um pouco" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="bexiga5" value="Moderadamente" type="radio"  />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="bexiga5" value="Bastante" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Intestino</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="intestino5" value="Nem um pouco" type="radio" checked />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="intestino5" value="Um pouco" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="intestino5" value="Moderadamente" type="radio"  />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="intestino5" value="Bastante" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Vagina</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="vagina5" value="Nem um pouco" type="radio" checked />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="vagina5" value="Um pouco" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="vagina5" value="Moderadamente" type="radio"  />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="vagina5" value="Bastante" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
			<h6 style="font-size: 35px;">6. Geralmente afetam sua saúde emocional (ex: nervosismo, depressão)?</h6>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Bexiga</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="bexiga6" value="Nem um pouco" type="radio" checked />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="bexiga6" value="Um pouco" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="bexiga6" value="Moderadamente" type="radio"  />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="bexiga6" value="Bastante" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Intestino</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="intestino6" value="Nem um pouco" type="radio" checked />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="intestino6" value="Um pouco" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="intestino6" value="Moderadamente" type="radio"  />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="intestino6" value="Bastante" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Vagina</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="vagina6" value="Nem um pouco" type="radio" checked />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="vagina6" value="Um pouco" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="vagina6" value="Moderadamente" type="radio"  />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="vagina6" value="Bastante" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
			<h6 style="font-size: 35px;">7. Fazem você se sentir frustrada?</h6>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Bexiga</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="bexiga7" value="Nem um pouco" type="radio" checked />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="bexiga7" value="Um pouco" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="bexiga7" value="Moderadamente" type="radio"  />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="bexiga7" value="Bastante" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Intestino</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="intestino7" value="Nem um pouco" type="radio" checked />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="intestino7" value="Um pouco" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="intestino7" value="Moderadamente" type="radio"  />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="intestino7" value="Bastante" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
		</div>

		<div class="col s12">
		  <p class="bexiga exo2-semi-bold-tuna-16px" style="margin-bottom:3%">Vagina</p>
		  </div>

		<div class="col s12">
				<label>
				  <input name="vagina7" value="Nem um pouco" type="radio" checked />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Nem um pouco</span>
				</label>
			  <p>
				<label>
				  <input name="vagina7" value="Um pouco" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Um pouco</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input class="with-gap" name="vagina7" value="Moderadamente" type="radio"  />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Moderadamente</span>
				</label>
			  </p>
			  <p>
				<label>
				  <input name="vagina7" value="Bastante" type="radio" />
				 <span style="font-family: 'Exo 2-Regular'; color: #323B43; font-size: 35px; margin-bottom: 3%">Bastante</span>
				</label>
			  </p>
	      <div class="col s12">

	      <a href="../src formulario concluido/forms_conclusao.html" ><button type="submit" class="avanar valign-text-middle exo2-bold-white-16px" style="margin-top: 100px; display: block;
			margin-left: auto;
			margin-right: auto;">Avançar</button></a>
	  </div>
</form>
	</div>
   </div>
   </div>

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
<!--fim do menu inferior-->
<?php
	 include_once("../conexao.php");
    //cadastro paciente 
    $condicoes_bexiga = $_POST['condicoes_bexiga'];
    $condicoes_intestino = $_POST['condicoes_intestino'];
    $condicoes_Vagina = $_POST['condicoes_Vagina'];
    $bexiga1 = filter_input(INPUT_POST, 'bexiga1', FILTER_SANITIZE_STRING);
    $bexiga2 = filter_input(INPUT_POST, 'bexiga2', FILTER_SANITIZE_STRING);
    $bexiga3 = filter_input(INPUT_POST, 'bexiga3', FILTER_SANITIZE_STRING);
    $bexiga4 = filter_input(INPUT_POST, 'bexiga4', FILTER_SANITIZE_STRING);
    $bexiga5 = filter_input(INPUT_POST, 'bexiga5', FILTER_SANITIZE_STRING);
    $bexiga6 = filter_input(INPUT_POST, 'bexiga6', FILTER_SANITIZE_STRING);
    $bexiga7 = filter_input(INPUT_POST, 'bexiga7', FILTER_SANITIZE_STRING);
    $intestino1 = filter_input(INPUT_POST, 'intestino1', FILTER_SANITIZE_STRING);
    $intestino2 = filter_input(INPUT_POST, 'intestino2', FILTER_SANITIZE_STRING);
    $intestino3 = filter_input(INPUT_POST, 'intestino3', FILTER_SANITIZE_STRING);
    $intestino4 = filter_input(INPUT_POST, 'intestino4', FILTER_SANITIZE_STRING);
    $intestino5 = filter_input(INPUT_POST, 'intestino5', FILTER_SANITIZE_STRING);
    $intestino6 = filter_input(INPUT_POST, 'intestino6', FILTER_SANITIZE_STRING);
    $intestino7 = filter_input(INPUT_POST, 'intestino7', FILTER_SANITIZE_STRING);
    $vagina1 = filter_input(INPUT_POST, 'vagina1', FILTER_SANITIZE_STRING);
    $vagina2 = filter_input(INPUT_POST, 'vagina2', FILTER_SANITIZE_STRING);
    $vagina3 = filter_input(INPUT_POST, 'vagina3', FILTER_SANITIZE_STRING);
    $vagina4 = filter_input(INPUT_POST, 'vagina4', FILTER_SANITIZE_STRING);
    $vagina5 = filter_input(INPUT_POST, 'vagina5', FILTER_SANITIZE_STRING);
    $vagina6 = filter_input(INPUT_POST, 'vagina6', FILTER_SANITIZE_STRING);
    $vagina7 = filter_input(INPUT_POST, 'vagina7', FILTER_SANITIZE_STRING);

   

    $result_questionario = "INSERT INTO `tb_questionario_pelvico`(`condicoes_bexiga`, `condicoes_intestino`, `condicoes_vagina`, `1_bexiga`, `1_intestino`, `1_vagina`, `2_bexiga`, `2_intestino`, `2_vagina`, `3_bexiga`, `3_intestino`, `3_vagina`, `4_bexiga`, `4_intestino`, `4_vagina`, `5_bexiga`, `5_intestino`, `5_vagina`, `6_bexiga`, `6_intestino`, `6_vagina`, `7_bexiga`, `7_intestino`, `7_vagina`) VALUES ('$condicoes_bexiga', '$condicoes_intestino','$condicoes_Vagina', '$bexiga1', '$bexiga2', '$bexiga3', '$bexiga4', '$bexiga5', '$bexiga6', '$bexiga7', '$intestino1', '$intestino2', '$intestino3', '$intestino4', '$intestino5', '$intestino6', '$intestino7', '$vagina1', '$vagina2', '$vagina3', '$vagina4', '$vagina5', '$vagina6', '$vagina7')";
    $resultado_questionario = mysqli_query($conn, $result_questionario);
    $linhas = mysqli_affected_rows($conn);
?>
</body>
</html>