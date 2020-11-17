<?php
    session_start();

    if(!isset($_SESSION['admin'])){
        die();
    }
?>
<main>
    <div id="menu">
        <nav>

        </nav>
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