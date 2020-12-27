$(function(){
  let buttonsField;
  let initialState = [];

  $(document).on("click", ".btn-edit", function(){
    const nome = ['prontuario', 'nome', 'ano', 'codigo'];
    const tdEdits = $(this).parent().parent().find("td");
    const tdButtons = $(this).parent();
    let input = '';

    for(let i=0;i<tdEdits.length;i++){
      initialState.push(tdEdits[i].innerHTML.trim());
    }

    buttonsField = $(tdButtons).html();

    $(tdButtons).html("<button class='btn-action btn-confirm'><img src='../../assets/icons/confirmIcon.svg' alt='botão de confirmar'/></button>");
    
    for(let i=0;i<(tdEdits.length-1);i++){
      input = `<input type='text' name='${nome[i]}' value='${tdEdits[i].innerHTML.trim()}'>`;

      $(tdEdits[i]).html(input);
    }
  });

  $(document).on("click", ".btn-confirm", function(){
    const tdEdits = $(this).parent().parent().find("td");
    const tdInputs = $(tdEdits).find("input");
    const tdButtons = $(this).parent();
    const materia = $(tdInputs[0]).val();
    const ano = $(tdInputs[1]).val();
    const quantidadeDespachada = $(tdInputs[2]).val();
    const quantidadeEstoque = $(tdInputs[3]).val();

    if(ano != '1' && ano != '2' && ano != '3' && ano != '4'){
      console.log(ano)
      return $("#status").html("Ano inserido não corresponde a nenhum existente.");
    }

    $.ajax({
      url: "http://localhost/TCC/Pages/ListaLivro/updateLivro.php",
      type: "POST",
      data: {
        materia,
        ano,
        quantidadeDespachada,
        quantidadeEstoque
      },

      success: function(response){
        $(tdButtons).html(buttonsField);

        if(response=="Dados atualizados com sucesso"){
          for(let i=0;i<(tdEdits.length-1);i++){
            $(tdEdits[i]).html(response.dados.i);
          }

          return $("#status").html(response).css("color","green");
        }
        else {
          for(let i=0;i<tdEdits.length;i++){
            tdEdits[i].innerHTML = `${initialState[i]}`;
          }

          return $("#status").html(response).css("color","red");
        }
      },
      error: function(response){
        for(let i=0;i<tdEdits.length;i++){
          tdEdits[i].innerHTML = `${initialState[i]}`;
        }
    
        $(tdButtons).html(buttonsField);

        return $("#status").html(response);
      }
    });
  });
});