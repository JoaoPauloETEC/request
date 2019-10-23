$(document).on("change",".tipo",function(){
    var tipo = $("option:selected", (".lista")).val();
    $.ajax({
        type:"get", //como enviar
        url:"http://request.unaux.com/ajax/php/tipo.php",//para onde enviar
        data:"tipo="+tipo,
        dataType:"json",
        //se der certo
        success: function(data){
            $.each(data.requerimento,function(i,dados){
                itemlista += '<li> <a href="#"> <div class="row historico" id="conteudoHistorico"> <div class="col l1 m1 s1"> <label id="checkboxLinha"><input type="checkbox" class="filled-in" name="select" id="checkboxStyle"><span></span></label></div><div class="col l4 m4 s11" id="estiloInputEmails"><input class="center-align" type="text" value="'+dados.assunto+'" id="assuntoHistorico" readonly></div><div class="col l2 m2 s6" id="estiloInputEmails"><input class="center-align" type="text" value="" id="envioHistorico" readonly></div><div class="col l2 m2 s6" id="estiloInputEmails"><input class="center-align" type="text" value="" id="entregaHistorico" readonly></div><div class="col l2 m2 s6" id="estiloInputEmails"><input class="center-align" type="text" value="Aceito" id="situacaoHistorico"  readonly></div><div class="col l1 m1 s6 center-align"><ul><li><a href="#"><i class="fas fa-file-download" id="pdfHistoricoButton"></i></a></li></ul></div></div></a></li>; 
            });
            $('#emails').html("");
        },
        //se der errado
        error: function(data){
             navigator.notification.alert(data);
        }
    });    
});
