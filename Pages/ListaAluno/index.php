<?php
    session_start();

    $array['titulo'] = "Listar aluno";
    $array['pageCss'] = ["listStudent", "table"];

    $page = 1;

    if(isset($_GET["page"]) && $_GET["page"] > 0){
        $page = $_GET["page"];
    }

    $inicio = $page - 1;
    $inicio = $inicio * $page;

    include("../templates/header.php");
?>
<main id="main">
    <div class="table">
        <table>
            <thead>
                <th>Prontuário</th>
                <th>Nome</th>
                <th>Ano</th>
                <th>Código</th>
                <?php
                    if(isset($_SESSION['admin']) && $_SESSION["admin"]){
                        echo "<th colspan='2'>Ação</th>";
                    }
                ?>
            </thead>
            <tbody>
                <?php
                    include_once("../../connection.php");

                    $sql = "SELECT
                                alunos.prontuario,
                                alunos.nome,
                                alunos.ano,
                                alunos.codigo
                                FROM alunos LIMIT $inicio, 5;
                            ";

                    foreach($pdo->query($sql) as $row){
                ?>
                        <tr>
                            <td>
                                <?php
                                    echo $row['prontuario'];
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $row['nome'];
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $row['ano'];
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $row['codigo'];
                                ?>
                            </td>
                            <?php
                                if(isset($_SESSION['admin']) && $_SESSION["admin"]){
                                    echo
                                        "<td>
                                            <button class='btn-action'>
                                                <img
                                                    src='../../assets/icons/editIcon.svg'
                                                    alt='Ícone botão de excluir'
                                                />
                                            </button>
                                        </td>
                                        <td>
                                            <button class='btn-action'>
                                                <img
                                                    src='../../assets/icons/removeIcon.svg'
                                                    alt='Ícone botão de excluir'
                                                />
                                            </button>
                                        </td>
                                    ";
                                }
                            ?>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <a
            class="btn previous-btn"
            href="http://localhost/TCC/Pages/ListaAluno<?php
                    if($page>1){
                        $page--;
                        echo "?page=$page";
                    }
                ?>"
        >
            Previous
        </a>
        <a
            class="btn next-btn"
            href="http://localhost/TCC/Pages/ListaAluno?page=<?php
                    if(isset($_GET["page"])){
                        $page = $_GET["page"]; 
                    }
                    else{
                        $page=1;
                    }
                    $page++;
                    echo $page;
                ?>"
        >
            Next
        </a>
    </div>
    <a class="link-btn" href="http://localhost/TCC/">
        <img src="http://localhost/TCC/assets/icons/back.svg" alt="Voltar"/>
            Voltar
    </a>
</main>

<?php
    include("../templates/footer.php");
?>