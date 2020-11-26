$(function(){
    $(document).on("click", "#action", function(){
        const nome = $("input[name='nome']").val();
        const sobrenome = $("input[name='sobrenome']").val();
        const ano = $("select[name='ano']").val();
        const prontuario = $("input[name='prontuario']").val();

        $.ajax({
           url: "http://localhost/TCC/Views/Pages/FormAluno/studentRegister.php",
           type: "post",
           data: {
                nome,
                sobrenome,
                ano,
                prontuario
           },
           success: response => {
               if(response === 1){
                   $("#status").html("Aluno cadastrado com sucesso.");
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