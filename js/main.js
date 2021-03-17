document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elems);
});

/*FUNÇÕES DO MODAL QUE DESLIZA PARA CIMA DA SESSAO 3*/
function funcaoAguda1() {
    document.getElementById("img-aguda").src="imgs/1-aguda.png";
    document.getElementById("item1-aguda").innerHTML = "<b>Manter-se</b> ativo em sua rotina;";
    document.getElementById("item2-aguda").innerHTML = "Entender sobre a <b>natureza da dor</b>;";
    document.getElementById("circulo3-aguda").style.display= "none";
    document.getElementById("item3-aguda").style.display= "none"; 
    document.getElementById("circulo4-aguda").style.display= "none";
    document.getElementById("item4-aguda").style.display= "none"; 
    document.getElementById("button-verde-aguda").style.color = "black";
    document.getElementById("button-verde-aguda").style.borderColor = "#7FCA70";
    document.getElementById("button-verde-aguda").style.background='rgb(143,219,130,0.3)';
    document.getElementById("button-cinza-aguda").style.color = " #666E75";
    document.getElementById("button-cinza-aguda").style.borderColor = "#666E75";
    document.getElementById("button-cinza-aguda").style.background='white';
}
function funcaoAguda2() {
    document.getElementById("img-aguda").src="imgs/2-aguda.png";
    document.getElementById("item1-aguda").innerHTML = "Uso de <b>medicamento</b> para alívio de dor;";
    document.getElementById("item2-aguda").innerHTML = "Tratamentos que envolvem <b>terapia manual</b> (manipulação na coluna lombar, massagem);";;
    document.getElementById("circulo3-aguda").style.display= "inline-block";
    document.getElementById("item3-aguda").style.display= "block"; 
    document.getElementById("circulo4-aguda").style.display= "inline-block";
    document.getElementById("item4-aguda").style.display= "block"; 
    document.getElementById("button-verde-aguda").style.color = " #666E75";
    document.getElementById("button-verde-aguda").style.borderColor = "#666E75";
    document.getElementById("button-verde-aguda").style.background='white';
    document.getElementById("button-cinza-aguda").style.color = "black";
    document.getElementById("button-cinza-aguda").style.borderColor = "#7FCA70";
    document.getElementById("button-cinza-aguda").style.background='rgb(143,219,130,0.3)';
}

function funcaoCronica1() {
    document.getElementById("img-cronica").src="imgs/1-cronica.png";
    document.getElementById("item1-cronica").innerHTML = "<b>Manter-se</b> ativo em sua rotina;";
    document.getElementById("item2-cronica").innerHTML = "Entender sobre a <b>natureza da dor</b>;";
    document.getElementById("item3-cronica").innerHTML = "Tratamento baseado em <b>exercícios físicos</b>;";
    document.getElementById("item4-cronica").innerHTML = "<b>Terapia comportamental</b> para o enfrentamento da dor.";
    document.getElementById("button-verde-cronica").style.color = "black";
    document.getElementById("button-verde-cronica").style.borderColor = "#7FCA70";
    document.getElementById("button-verde-cronica").style.background='rgb(143,219,130,0.3)';
    document.getElementById("button-cinza-cronica").style.color = " #666E75";
    document.getElementById("button-cinza-cronica").style.borderColor = "#666E75";
    document.getElementById("button-cinza-cronica").style.background='white';
}

function funcaoCronica2() {
    document.getElementById("img-cronica").src="imgs/2-cronica.png";
    document.getElementById("item1-cronica").innerHTML = "Uso de <b>medicamento</b> para alivio de dor;";
    document.getElementById("item2-cronica").innerHTML = "Tratamentos que envolvem <b>terapia manual</b> (manipulação na coluna lombar, massagem);";
    document.getElementById("item3-cronica").innerHTML = "<b>Acupuntura;</b>";
    document.getElementById("item4-cronica").innerHTML = "Tratamento com <b>equipe de profissionais da saúde</b> de diferentes áreas.";
    document.getElementById("button-verde-cronica").style.color = " #666E75";
    document.getElementById("button-verde-cronica").style.borderColor = "#666E75";
    document.getElementById("button-verde-cronica").style.background='white';
    document.getElementById("button-cinza-cronica").style.color = "black";
    document.getElementById("button-cinza-cronica").style.borderColor = "#7FCA70";
    document.getElementById("button-cinza-cronica").style.background='rgb(143,219,130,0.3)';
}