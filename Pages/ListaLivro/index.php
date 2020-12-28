<?php
    session_start();

    $array['titulo'] = "Listar Livros";
    $array["pageCss"] = ["listBook", "table"];

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
        <div id="status">
            <strong></strong>
        </div>
        <table>
            <thead>
                <th>Matéria</th>
                <th>Ano letivo</th>
                <th>Quantidade despachada</th>
                <th>Quantidade em estoque</th>
                <?php
                    if(isset($_SESSION['admin']) && $_SESSION["admin"]){
                        echo 
                        "
                            <th>Ação</th>
                        ";   
                    }
                ?>
            </thead>
            <tbody>
                <?php
                    include_once("../../connection.php");
                    $sql = "SELECT
                                livros.materia,
                                livros.ano,
                                livros.despachado,
                                livros.estoque
                                FROM livros LIMIT $inicio, 5;
                            ";

                    foreach($pdo->query($sql) as $row){
                ?>
                        <tr>
                            <td>
                                <?php
                                    echo $row['materia'];   
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $row['ano'];   
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $row['despachado']; 
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $row['estoque']; 
                                ?>
                            </td>
                            <?php
                                if(isset($_SESSION['admin']) && $_SESSION["admin"]){
                                    echo
                                        "<td>
                                            <button class='btn-action btn-edit'>
                                                <img
                                                    src='../../assets/icons/editIcon.svg'
                                                    alt='Ícone botão de editar'
                                                />
                                            </button>
                                                <strong>|</strong>
                                            <button class='btn-action btn-remove'>
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
            href="https://ifbookstcc.000webhostapp.com/Pages/ListaLivro?page=<?php
                    $page--;
                    echo $page;
                ?>"
        >
            Previous
        </a>
        <a
            class="btn next-btn"
            href="https://ifbookstcc.000webhostapp.com/Pages/ListaLivro?page=<?php
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
    <a href="https://ifbookstcc.000webhostapp.com/" class="link-btn">
        <img src="https://ifbookstcc.000webhostapp.com/assets/icons/back.svg" alt="Voltar"/>
            Voltar
    </a>
</main>
<script src="../../assets/js/listBook.js"></script>
<?php
    include("../templates/footer.php");
?>