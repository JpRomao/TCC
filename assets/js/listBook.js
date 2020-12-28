$(function(){
  let buttonsField;
  let materiaAntiga;
  let anoAntigo;

  $(document).on("click", ".btn-edit", function(){
    const nome = ['prontuario', 'nome', 'ano', 'codigo'];
    const tdEdits = $(this).parent().parent().find("td");
    const tdButtons = $(this).parent();
    materiaAntiga = tdEdits[0].innerHTML.trim();
    anoAntigo = tdEdits[1].innerHTML.trim();
    let input = '';

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
    const despachado = $(tdInputs[2]).val()
    const estoque =  $(tdInputs[3]).val();
    const materiasDisponiveis = [
      "Artes",
      "Física",
      "Química",
      "Matemática",
      "Português",
      "Inglês",
      "Espanhol",
      "Sociologia",
      "Biologia",
      "História",
      "Geografia",
      "Filosofia"
    ];

    let i = 0;

    if(ano != '1' && ano != '2' && ano != '3' && ano != '4'){
      return $("#status strong").html("Você inseriu o ano errado.").css("color","red");
    }

    materiasDisponiveis.map((materias) => {
      if(materia == materias){
        i++;
      }
    });

    if(i!=1){
      return $("#status strong").html("Selecione uma matéria válida.").css("color","red");
    }

    $.ajax({
      url: "http://localhost/TCC/Pages/ListaLivro/updateBook.php",
      type: "POST",
      data: {
        materia,
        ano,
        despachado,
        estoque,
        materiaAntiga,
        anoAntigo,
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

  $(document).on("click", ".btn-remove", function(){
    const tdEdits = $(this).parent().parent().find("td");
    const materia = tdEdits[0].innerHTML.trim();
    const ano = tdEdits[1].innerHTML.trim();

    $.ajax({
      url: "http://localhost/TCC/Pages/ListaLivro/deleteBook.php",
      type: "POST",
      data: {
        materia,
        ano
      },
      success: function(response){
        tdEdits.parent().remove();

        return $("#status strong").html(response);
      },
      error: function(){
        return $("#status strong").html("Servidor está fora do ar. Tente novamente mais tarde.");
      }
    });
  });
});