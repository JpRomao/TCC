$(function(){
  let buttonsField;
  let prontuarioAntigo;

  $(document).on("click", ".btn-edit", function(){
    const nome = ['prontuario', 'nome', 'ano', 'codigo'];
    const tdEdits = $(this).parent().parent().find("td");
    const tdButtons = $(this).parent();
    prontuarioAntigo = tdEdits[0].innerHTML.trim();
    let input = '';

    buttonsField = $(tdButtons).html();

    $(tdButtons).html("<button class='btn-action btn-confirm'><img src='../../assets/icons/confirmIcon.svg' alt='botão de confirmar'/></button>");
    
    for(let i=0;i<(tdEdits.length-2);i++){
      input = `<input type='text' name='${nome[i]}' value='${tdEdits[i].innerHTML.trim()}'>`;

      $(tdEdits[i]).html(input);
    }
  });

  $(document).on("click", ".btn-confirm", function(){
    const tdEdits = $(this).parent().parent().find("td");
    const tdInputs = $(tdEdits).find("input");
    const tdButtons = $(this).parent();
    const prontuario = $(tdInputs[0]).val();
    const nome = $(tdInputs[1]).val();
    const ano = $(tdInputs[2]).val();

    if(ano != '1' && ano != '2' && ano != '3' && ano != '4'){
      console.log(ano)
      return $("#status strong").html("Você inseriu o ano errado.").css("color","red");
    }

    if(prontuario.length != 7){
      return $("#status strong").html("Verifique o prontuário.").css("color","red");
    }

    $.ajax({
      url: "http://localhost/TCC/Pages/ListaAluno/updateStudent.php",
      type: "POST",
      data: {
        prontuario,
        prontuarioAntigo,
        nome,
        ano,
      },

      success: function(response){
        $(tdButtons).html(buttonsField);

        if(response.message=="Dados atualizados com sucesso!"){
          response.dados.map((dado,index) => {
            console.log(dado);
            if(index<4){
              $(tdEdits[index]).html(dado);
            }
          });
          return $("#status strong").html(response.message).css("color","green");
        }
        else {
          response.dados.map((dado,index) => {
            if(index<4){
              $(tdEdits[index]).html(dado);
            }
          });

          return $("#status strong").html(response.message).css("color","red");
        }
      },
      error: function(){
        $(tdButtons).html(buttonsField);

        return (
          $("#status strong")
            .html(`Erro no servidor. Tente novamente mais tarde.`)
            .css("color","red")
        );
      }
    });
  });
});