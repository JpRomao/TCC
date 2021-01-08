$(function(){
    $(document).on("click", "#action", function(){
        const nome = $("input[name='nome']").val();
        const sobrenome = $("input[name='sobrenome']").val();
        const ano = $("select[name='ano']").val();
        const prontuario = `${$("input[name='prontuario']").val()}`;
        const turma = $("select[name='turma']").val();
        const continuar = `${$("input[name='continuar']").prop('checked')}`;

        if(prontuario.length !== 7){
            return $("#status").html("Verifique seu prontuário.");
        }

        if(ano != '1' && ano != '2' && ano != '3' && ano != '4'){
            return $("#status").html("Ano inserido não corresponde a nenhum existente.");
        }

        $.ajax({
           url: "https://ifbookst.herokuapp.com/Pages/FormAluno/studentRegister.php",
           type: "post",
           data: {
                nome,
                sobrenome,
                ano,
                prontuario,
                turma,
                continuar
           },
           success: response => {
               if(response === 1){
                   return $("#status strong").html(response);
               }
               else{
                   return $("#status strong").html(response);
               }
           },
           error: (response) => {
               console.log(response);
               return $("#status strong").html("Não foi possível conectar ao servidor.");
           }
        });
    });
});