<?php
    session_start();

    if(!isset($_SESSION['admin'])){
        echo "<h1>Página movida permanentemente</h1>";
        die();
    }

    $array["pageCss"] = ["admin", "table", "menu"];
    $array["titulo"] = "Admin";
    $array["html"] = "<a href='./logout.php' class='btn-logout'>Logout</a>";

    include("../templates/header.php");
?>
    <br/><br/>
<main>
    <div id="menu" class="buttons-container ">
        <div class="dropdown-alunos">
            <a class="alunos">
                Alunos
                <img src="https://ifbookst.herokuapp.com/assets/icons/alunosIcon.svg" alt="Alunos ícone"/>
            </a>
            <div class="dropdown-content-alunos">
                <?php
                    if(isset($_SESSION["admin"]) && $_SESSION["admin"]){
                        echo "<a href='https://ifbookst.herokuapp.com/Pages/FormAluno/'>Cadastrar Alunos</a>";
                    }
                ?>
                <a href="https://ifbookst.herokuapp.com/Pages/ListaAluno/">Listagem Alunos</a>
            </div>
        </div>
        <div class="dropdown-livros">
            <a class="livros">
                Livros 
                <img src="https://ifbookst.herokuapp.com/assets/icons/livrosIcon.svg" alt="Livros ícone"/>
            </a>
            <div class="dropdown-content-livros">
                <?php
                    if(isset($_SESSION["admin"]) && $_SESSION["admin"]){
                        echo "<a href='https://ifbookst.herokuapp.com/Pages/FormLivro'>Cadastrar Livros</a>";
                    }
                ?>  
                <a href="https://ifbookst.herokuapp.com/Pages/ListaLivro">Listagem Livros</a>
            </div>
        </div>
    </div>
</main>
<?php
    include("../templates/footer.php");
?>