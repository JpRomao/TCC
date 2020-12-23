$(function(){
    $(document).on("click", "#action", function(){
        const nome = $("input[name='nome']").val();
        const sobrenome = $("input[name='sobrenome']").val();
        const ano = $("select[name='ano']").val();
        const prontuario = $("input[name='prontuario']").val();
        const turma = $("select[name='turma']").val();

        $.ajax({
           url: "https://ifbookst.herokuapp.com/TCCheroku/Pages/FormAluno/studentRegister.php",
           type: "post",
           data: {
                nome,
                sobrenome,
                ano,
                prontuario,
                turma
           },
           success: response => {
               if(response === 1){
                   $("#status").html("Aluno cadastrado com sucesso.");
               }
               else{
                   $("#status").html(response);
               }
           },
           error: (response) => {
               $("#status").html(response);
           }
        });
    });
});