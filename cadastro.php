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
<body>

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
                <a href="login.html">
                <h7 style="display: block;
                margin-left: auto;
                margin-right: auto; position:relative !important; text-align: center; font-size: 40px; font-family: 'Exo 2-Semi'; color: #323B43;">Tem uma conta? Faça login</h7> 
            </a>
            </div>
        </div>
    <div class="row linha" id="botoes" style="margin-top: 8%;">
        <div class="col s6 center-align">
            <button id="meubotao1" class="button-cinza"onclick="window.location.href = 'login.html'">Login</button>
        </div>
        <div class="col s6 center-align">
            <button id="meubotao2" class="button-verde">Cadastrar</button>
        </div>
    </div>
    <div class="row">
        <form method="POST" action="processa.php">
            <div class="col s12" style="margin-top: 5%;">
                <label class="bexiga exo2-semi-bold-tuna-16px">Nome Completo</label>
            </div>
    
            <div class="col s12" style="margin-top: 5%;">
                <input class="rectangle-13" placeholder="Fulano Sicrano da Silva" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; " name="nome" type="text" required></input>
            </div>
            <div class="col s12" style="margin-top: 5%;">
                <label class="bexiga exo2-semi-bold-tuna-16px">Data de Nascimento</label>
            </div>
    
            <div class="col s12" style="margin-top: 5%;">
                <input class="rectangle-13" type="date" name="data_nascimento" placeholder="23/12/2000" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; " required ></input>
            </div> 
            <div class="col s12" style="margin-top: 5%;">
                <label class="bexiga exo2-semi-bold-tuna-16px">Email</label>
            </div>
    
            <div class="col s12" style="margin-top: 5%;">
                <input class="rectangle-13" type="email" name="email" placeholder="DrHenrique@gmail.com" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; " required></input>
            </div>
            <div class="col s12" style="margin-top: 5%;">
                <label class="bexiga exo2-semi-bold-tuna-16px">Senha</label>
            </div>
    
            <div class="col s12" style="margin-top: 5%;">
                <input class="rectangle-13" type="password" name="senha" placeholder="********" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; " required></input>
            </div> 
            <div class="col s12" style="margin-top: 5%;">
                <label class="bexiga exo2-semi-bold-tuna-16px">Confirmar Senha</label>
            </div>
    
            <div class="col s12" style="margin-top: 5%;">
                <input class="rectangle-13" type="password" name="confirm_senha" placeholder="********" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; " required></input>
            </div> 

             <div class="col s12" style="margin-top: 5%;">
                <label class="bexiga exo2-semi-bold-tuna-16px">CPF</label>
            </div>
    
            <div class="col s12" style="margin-top: 5%;">
                <input class="rectangle-13" name="cpf" placeholder="123.345.678-89" style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; " ></input>
            </div>
            <div class="col s12" style="margin-top: 5%;">
                <label class="bexiga exo2-semi-bold-tuna-16px">Qual sua ocupação?</label>
            </div>
    
            <div class="col s12" style="margin-top: 5%;">
                <select name="ocupacao" style="background-color: #323B43 !important;">
                    <option value="Profissional">Profissional</option>
                    <option value="Estudante">Estudante</option>
                    </select>
                </div> 
            <div class="col s12" style="margin-top: 5%;">
                <label class="bexiga exo2-semi-bold-tuna-16px">Qual(is) seu(s) local(is) de trabalho?</label>
            </div>
    
            <div class="col s12" style="margin-top: 5%;">
                <input name="local_trabalho" type="text" class="rectangle-13"  style="font-size: 35px; color:#30566B; font-family: 'Exo 2-Regular'; "></input>
            </div>
             <div class="col s12">
    
                <a href="confirma_email.html" ><button class="avanar valign-text-middle exo2-bold-white-16px" style="margin-top: 15%; display: block;
                  margin-left: auto;
                  margin-right: auto;">Avançar</button></a>
            </div>
        </form> 
           
    </div>
    </body>