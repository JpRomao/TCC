$(function(){
  $(document).on("click", "#action", function(){
      const materia = $("select[name='materia']").val();
      const ano = $("select[name='ano']").val();
      const quantidade = $("input[name='quantidade']").val();

      $.ajax({
         url: "https://ifbookst.herokuapp.com/TCCheroku/Pages/FormLivro/bookRegister.php",
         type: "post",
         data: {
              materia,
              ano,
              quantidade
         },
         success: response => {
             if(response == 1){
                 $("#status").html("Livro cadastrado com sucesso.");
             }
             else{
                 $("#status").html(response);
             }
         },
         error: () => {
             $("#status").html("Não foi possível conectar ao servidor.");
         }
      });
  });
});