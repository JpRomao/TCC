<?php
    $array['titulo'] = "Listar aluno";
    $array['pageCss'] = ["listStudent"];

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
            </thead>
            <tbody>
                <?php
                    include_once("../../connection.php");
                    $sql = "SELECT alunos.prontuario, alunos.nome, alunos.ano, alunos.codigo FROM alunos";

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
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <a href="<?php echo "https://ifbookstcc.000webhostapp.com/"; ?>">
        <img src="<?php echo 'https://ifbookstcc.000webhostapp.com/assets/icons/back.svg'; ?>" alt="Voltar"/>
            Voltar
    </a>
</main>
<?php
    include("../templates/footer.php");
?>