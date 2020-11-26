<?php
    session_start();

    if(!isset($_SESSION['admin'])){
        die();
    }
?>
<main>
    <div id="menu" class="buttons-container">
        <div class="dropdown-livros">
            <a class="livros">
                Livros 
                <img src="<?php echo INCLUDE_PATH_VIEWS.'assets/icons/livrosIcon.svg'; ?>" alt="Livros ícone"/>
            </a>
            <div class="dropdown-content-livros">
                <a href="<?php echo INCLUDE_PATH_ROOT.'formBook'; ?>">Cadastrar Livros</a>
                <a href="<?php echo INCLUDE_PATH_ROOT.'listBook'; ?>">Listagem Livros</a>
            </div>
        </div>
    </div>
    <div id="alunos">
        <table>
            <thead>
                <th>Id</th>
                <th>Nome</th>
            </thead>
        </table>
    </div>
    <div id="livros">
        <table>
            <thead>
                <th>Id</th>
                <th>Matéria</th>
                <th>Ano</th>
            </thead>
        </table>
    </div>
</main>