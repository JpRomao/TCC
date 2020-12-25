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

        $.ajax({
           url: "http://localhost/TCC/Pages/FormAluno/studentRegister.php",
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
                   return $("#status").html("Aluno cadastrado com sucesso.");
               }
               else{
                   return $("#status").html(response);
               }
           },
           error: () => {
               return $("#status").html("Não foi possível conectar ao servidor.");
           }
        });
    });
});