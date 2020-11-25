function registraAluno() {
    const url = "http://localhost/TCC/Views/Pages/FormAluno/studentRegister.php";

    const nome = `${document.getElementById("nome").value} ${document.getElementById("sobrenome").value}`;
    const ano = document.getElementById("ano").value;
    const prontuario = document.getElementById("prontuario").value;

    const statusDiv = document.getElementById("status");

    
    if(nome && ano && prontuario){
        const aluno = new FormData();
        aluno.append('nome', nome);
        aluno.append('ano', ano);
        aluno.append('prontuario', prontuario);

        fetch(url, {
            method: "POST",
            body: aluno
        }).then(
            response => {
                if(response.ok){
                    console.log(response.json());
                }
            }
        );
    }
}