<?php
    $array['titulo'] = "Listar Livros";
    $array["pageCss"] = ["listBook"];

    include("../templates/header.php");
?>
<main id="main">
    <div class="table">
        <table>
            <thead>
                <th>Matéria</th>
                <th>Ano letivo</th>
                <th>Quantidade despachada</th>
                <th>Quantidade em estoque</th>
                <th>Quantidade Total</th>
            </thead>
            <tbody>
                <?php
                    include_once("../../connection.php");
                    $sql = "SELECT livros.materia, livros.ano, livros.despachado, livros.estoque FROM livros";

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
                            <td>
                                <?php
                                    $totalLivros = $row['estoque'] + $row['despachado'];
                                    echo $totalLivros;
                                ?>
                            </td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <a href="<?php echo 'https://ifbookst.herokuapp.com/Pages/Admin/admin.php'; ?>">
        <img src="<?php echo 'https://ifbookst.herokuapp.com/assets/icons/back.svg'; ?>" alt="Voltar"/>
            Voltar
    </a>
</main>
<?php
    include("../templates/footer.php");
?>