// $(document).ready(function() {
//   $('.form2').hide();
//   $('.form3').hide();
//   $("#radio_1").prop("checked", true);
// });

// $('input[name="group1"]').change(function () {
//     if ($('input[name="group1"]:checked').val() === "1") {
//         $('.form1').show();
//         $('.form2').hide();
//         $('.form3').hide();
//     }
//     else if ($('input[name="group1"]:checked').val() === "2") {
//         $('.form2').show();
//         $('.form1').hide();
//         $('.form3').hide();
//     }
//     else if ($('input[name="group1"]:checked').val() === "3") {
//         $('.form3').show();
//         $('.form1').hide();
//         $('.form2').hide();
//     }
// });

$(function(){
  $("#fecharNotificacao").click(function()
  {
    $(this).parent().fadeOut();
  });
});

function toggle(source) {
  checkboxes = document.getElementsByName('select');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}

// $(document).ready(function() {
//   $('.form2').hide();
//   $('.form3').hide();
//   $("#radio_1").prop("checked", true);
// });

$(document).ready(function(){
  $('.modal').modal();
});

// $('input[name="group1"]').change(function () {
//     if ($('input[name="group1"]:checked').val() === "1") {
//         $('.form1').show();
//         $('.form2').hide();
//         $('.form3').hide();
//     }
//     else if ($('input[name="group1"]:checked').val() === "2") {
//         $('.form2').show();
//         $('.form1').hide();
//         $('.form3').hide();
//     }
//     else if ($('input[name="group1"]:checked').val() === "3") {
//         $('.form3').show();
//         $('.form1').hide();
//         $('.form2').hide();
//     }
// });

$(document).on('click','.toggle-password',function(){
  $(this).toggleClass("fa-eye fa-eye-slash");

  var input = $("#inputPassword");
  var input2 = $("#inputNPassword");
  var input3 = $("#inputNCPassword");

  if (input.attr("type") == "password") {
      input.attr("type", "text");
      input2.attr("type", "text");
      input3.attr("type", "text");
  } else {
      input.attr("type", "password");
      input2.attr("type", "password");
      input3.attr("type", "password");
  }
});

$(document).on('click','#btnHabilitar',function(){
  $('#inputEstiloNm').prop("disabled", false);
  $('#inputEstiloRM').prop("disabled", false);
  $('#inputEstiloTr').prop("disabled", false);
  $('#inputEstiloRG').prop("disabled", false);
  $('#inputEstiloLog').prop("disabled", false);
  $('#inputEstiloNumero').prop("disabled", false);
  $('#inputEstiloBr').prop("disabled", false);
  $('#inputEstiloCd').prop("disabled", false);
  $('#inputEstiloEstd').prop("disabled", false);
  $('#inputEstiloCp').prop("disabled", false);
  $('#inputEstiloMail').prop("disabled", false);
});


// Codigo para troca de conteudo

// function conteudoSelect() {
//   var opcao = document.getElementById("estiloSelect").value;
//   if(opcao == 8){
//     document.getElementById("pDescricao").innerHTML="Solicite uma carta de apresentação com um breve resumo de suas qualificações e experiências.";
//   }else if(opcao == 5){
//     document.getElementById("pDescricao").innerHTML="Solicitação de declarações em geral. Especificando o tipo de declaração de deseja na proxima etapa.";
//   }else if(opcao == 1){
//     document.getElementById("pDescricao").innerHTML="Solicitação de Destrancamento de uma matrácula que foi trancada na instituição. Informações necessarias na proxima etapa.";
//   }else if(opcao == 3){
//     document.getElementById("pDescricao").innerHTML="Solicitação de Justificativa de Falta na escola. Essa Solicitação deve conter um arquivo anexado e entrege a secretária.";
//   }else if(opcao == 7){
//     document.getElementById("pDescricao").innerHTML="Solicitar um comunicado paar ser repassado pela secretaria a outros alunos ou funcionários.";
//   }else if(opcao == 9){
//     document.getElementById("pDescricao").innerHTML="Solicitação de um pedido especifico que não se enquadra nas demais opções.";
//   }else if(opcao == 4){
//     document.getElementById("pDescricao").innerHTML="Solicitação de uma prova para substituir uma nota baixa ou uma avaliação não feita pelo aluno.";
//   }else if(opcao == 6){
//     document.getElementById("pDescricao").innerHTML="Realize sua rematricula fora da data estipulada pela instituição, garantindo sua matricula para o proximo semestre.";
//   }else if(opcao == 10){
//     document.getElementById("pDescricao").innerHTML="Deixe suas sugestões, criticas e elogias aos colaboradores ou ao corpo de docentes da escola :3";
//   }else if(opcao == 2){
//     document.getElementById("pDescricao").innerHTML="Solicitação de transferencia de instituição. Podendo se tranfeirir para as instituições que contém o seu curso";
//   }
// }