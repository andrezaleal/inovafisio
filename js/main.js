document.addEventListener('DOMContentLoaded', function() {
  var elem = document.querySelectorAll('select');
  var options = document.querySelectorAll("options");
  var instances = M.FormSelect.init(elem, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });

$(document).ready(function(){
  // TABS
  $('ul.tabs').tabs();
});

//Modal
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elems);
});

// botoes repostas e resultados
let buttonClick1 = document.getElementById('meubotao1'); //O botao criado deve ter o campo id="meubotao"
let buttonClick2 = document.getElementById('meubotao2');

console.log(buttonClick1);
buttonClick1.addEventListener("click",function(event){
    window.location.href = "../src formulario visualizar/forms_respostas_pelvica.html";
    console.log("Tentei redirecionar!!!");
});
console.log(buttonClick2);
buttonClick2.addEventListener("click",function(event){
    window.location.href = "../src formulario concluido/forms_respostas.html";
    console.log("Tentei redirecionar!!!");
});

