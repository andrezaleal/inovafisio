<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="imgs/favicon.png" type="image/x-icon" />
	<script src="js/jquery-3.5.0.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/main.js"></script>
	<script  src="js/main.js"></script>
	<meta charset="utf-8">
	<title>InovaForms</title>
</head>
<body style="background-image: url(assets/fundo.png); background-repeat: no-repeat; background-attachment: scroll; background-size: 100%;">

    <div class="container">
        <div class="row">
            <div class="col s12">
                <img src="assets/logo.png" style="display: block;
                margin-left: auto;
                margin-right: auto; position:relative !important;
  margin-top: 5%; width: 100%; height: auto; margin-bottom: 8%;
   ">
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <a href="cadastro.html"> 
                <h7 style="display: block;
                margin-left: auto;
                margin-right: auto; position:relative !important; text-align: center; font-size: 40px; font-family: 'Exo 2-Semi'; color: #323B43;">Não tem uma conta? Cadastre-se</h7> 
            </a>
            </div>
        </div>
    <div class="row linha" id="botoes" style="margin-top: 8%;">
        <div class="col s6 center-align">
            <button id="meubotao1" class="button-verde">Login</button>
        </div>
        <div class="col s6 center-align">
            <button id="meubotao2" class="button-cinza" onclick="window.location.href = 'cadastro.php'">Cadastrar</button>
        </div>
    </div>
    <div class="row">
    <form method="POST">
        <div class="col s12" style="margin-top: 5%;">
            <label class="bexiga exo2-semi-bold-tuna-16px">Email</label>
        </div>

        <div class="col s12" style="margin-top: 5%;">
            <input class="rectangle-13" name="email_login" type="email" placeholder="DrHenrique@gmail.com" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular';"></input>
        </div>
        <div class="col s12" style="margin-top: 5%;">
            <label class="bexiga exo2-semi-bold-tuna-16px">Senha</label>
        </div>

        <div class="col s12" style="margin-top: 5%;">
            <input class="rectangle-13" name="senha_login" type="password" placeholder="********" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; "></input>
        </div>
         </div>
        <div class="row">
            <div class="col s12" style="margin-top: 5%;">
              <a href="senha/recuemail.html">
              <h7 style="display: block;
                margin-left: auto;
                margin-right: auto; position:relative !important; text-align: center; font-size: 35px; font-family: 'Exo 2-Semi'; color: #323B43;">Esqueceu sua senha?</h7> 
      </a>  
    </div>
        </div>
        <div class="col s12">

            <a href="index.html" ><button class="avanar valign-text-middle exo2-bold-white-16px" style="margin-top: 15%; display: block;
              margin-left: auto;
              margin-right: auto;">Entrar</button></a>
        </div> 
    </form> 
    </div>
    <?php

    ?>
    </body>