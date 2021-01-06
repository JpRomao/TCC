<?php
    session_start();

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
                <img src="http://ifbookstcc.atwebpages.com/assets/icons/alunosIcon.svg" alt="Alunos ícone"/>
            </a>
            <div class="dropdown-content-alunos">
                <?php
                    if(isset($_SESSION["admin"]) && $_SESSION["admin"]){
                        echo "<a href='http://ifbookstcc.atwebpages.com/Pages/FormAluno/'>Cadastrar Alunos</a>";
                    }
                ?>
                <a href="http://ifbookstcc.atwebpages.com/Pages/ListaAluno/">Listagem Alunos</a>
            </div>
        </div>
        <div class="dropdown-livros">
            <a class="livros">
                Livros 
                <img src="http://ifbookstcc.atwebpages.com/assets/icons/livrosIcon.svg" alt="Livros ícone"/>
            </a>
            <div class="dropdown-content-livros">
                <?php
                    if(isset($_SESSION["admin"]) && $_SESSION["admin"]){
                        echo "<a href='http://ifbookstcc.atwebpages.com/Pages/FormLivro'>Cadastrar Livros</a>";
                    }
                ?>  
                <a href="http://ifbookstcc.atwebpages.com/Pages/ListaLivro">Listagem Livros</a>
            </div>
        </div>
    </div>
</main>
<?php
    include("./Pages/templates/footer.php");
?>