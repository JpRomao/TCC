<?php
    session_start();

    if(!isset($_SESSION['admin'])){
        echo "<h1>Página movida permanentemente</h1>";

        die();
    }

    $array["pageCss"] = ["admin"];
    $array["titulo"] = "admin";
    $array["html"] = "<a href='./logout.php' class='btn'>Logout</a>";

    include("../templates/header.php");
?>
    <br/><br/>
<main>
    <div id="menu" class="buttons-container">
        <div class="dropdown-livros">
            <a class="livros">
                Livros 
                <img src="<?php echo 'http://localhost/TCC/assets/icons/livrosIcon.svg'; ?>" alt="Livros ícone"/>
            </a>
            <div class="dropdown-content-livros">
                <a href="<?php echo 'http://localhost/TCC/Pages/FormLivro'; ?>">Cadastrar Livros</a>
                <a href="<?php echo 'http://localhost/TCC/Pages/ListaLivro'; ?>">Listagem Livros</a>
            </div>
        </div>
    </div>
    <br/>
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
<?php
    include("../templates/footer.php");
?>