$(document).ready(function(){
   $('#insert_form').on("submit", function(event){
      event.preventDefault();
     
     if($('#nome').val() === ""){
         $(".msg").html('<div class="alert alert-danger">Erro: Necessário preencher o campo nome!</div>');
     } else if ($('#email').val() === ""){
         $(".msg").html('<div class="alert alert-danger">Erro: Necessário preencher o campo e-mail!</div>');
     } else if ($('#assunto').val() === ""){
         $(".msg").html('<div class="alert alert-danger">Erro: Necessário preencher o campo assunto!</div>');
     } else {
         
        //receber dados do form
        var dados = $("#insert_form").serialize();
        
        var url = $('#url').val();
        
        $.post(url, dados, function(retorno){
            if(retorno){
                //limpar campos
                $('#insert_form')[0].reset();
                
                 $(".msg").html('<div class="alert alert-success">Mensagem enviada com sucesso!</div>');
            }
            else{
                $(".msg").html('<div class="alert alert-danger">Erro: Mensagem não enviada com sucesso!</div>');
            }
        });         
     }
     
   }); 
});
