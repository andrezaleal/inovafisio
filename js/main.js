$(document).ready(function(){
  // TABS
  $('ul.tabs').tabs();
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });

  //Modal

 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.modal').modal();
});

// botoes repostas e resultados
let buttonClick1 = document.getElementById('meubotao1'); //O botao criado deve ter o campo id="meubotao"
let buttonClick2 = document.getElementById('meubotao2');

buttonClick1.addEventListener("click",function(event){
    window.location.href = "../src formulario visualizar/forms_respostas_pelvica.html";
    console.log("Tentei redirecionar!!!");
});

buttonClick2.addEventListener("click",function(event){

//Usando esse método você vai para outra página e não pode usar o voltar do navegador    
window.location.href = "../src formulario concluido/forms_respostas.html";
    console.log("Tentei redirecionar!!!");
});

//select de busca
 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });