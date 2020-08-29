<main id="main">
    <div id="menu" class="buttons-container ">
        <div class="dropdown-alunos">
            <a class="alunos">
                Alunos
                <img src="<?php echo INCLUDE_PATH_VIEWS.'assets/icons/alunosIcon.png'; ?>" alt="Alunos ícone"/>
            </a>
            <div class="dropdown-content-alunos">
                <a href="<?php echo INCLUDE_PATH_ROOT.'formAluno'; ?>">Cadastrar Alunos</a>
                <a href="<?php echo INCLUDE_PATH_ROOT.'listaAluno'; ?>">Listagem Alunos</a>
            </div>
        </div>
        <div class="dropdown-livros">
            <a class="livros">
                Livros 
                <img src="<?php echo INCLUDE_PATH_VIEWS.'assets/icons/livrosIcon.png'; ?>" alt="Livros ícone"/>
            </a>
            <div class="dropdown-content-livros">
                <a href="<?php echo INCLUDE_PATH_ROOT.'formLivro'; ?>">Cadastrar Livros</a>
                <a href="<?php echo INCLUDE_PATH_ROOT.'listaLivro'; ?>">Listagem Livros</a>
            </div>
        </div>
    </div>
</main>