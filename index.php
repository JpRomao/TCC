<?php
    $array['titulo'] = "Home";
    $array['pageCss'] = ["home", "menu"];
    $array['html'] = "<h2>Entrega e Devolução de Livros</h2>";

    include("./Pages/templates/header.php");
?>
<main id="main">
    <div id="menu" class="buttons-container ">
        <div class="dropdown-alunos">
            <a class="alunos">
                Alunos
                <img src="<?php echo 'https://ifbookstcc.000webhostapp.com/assets/icons/alunosIcon.svg'; ?>" alt="Alunos ícone"/>
            </a>
            <div class="dropdown-content-alunos">
                <a href="<?php echo 'https://ifbookstcc.000webhostapp.com/Pages/FormAluno/'; ?>">Cadastrar Alunos</a>
                <a href="<?php echo 'https://ifbookstcc.000webhostapp.com/Pages/ListaAluno/'; ?>">Listagem Alunos</a>
            </div>
        </div>
    </div>
</main>
<?php
    include("./Pages/templates/footer.php");
?>