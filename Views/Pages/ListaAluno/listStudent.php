<main id="main">
    <div class="table">
        <table>
            <thead>
                <th>Prontuário</th>
                <th>Nome</th>
                <th>Ano</th>
            </thead>
            <tbody>
                <?php
                    include_once("./connection.php");
                    $sql = "SELECT alunos.prontuario, alunos.nome, alunos.ano FROM alunos";

                    foreach($pdo->query($sql) as $row){
                ?>
                        <tr>
                            <td>
                                <?php
                                    echo $row['prontuario']      
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $row['nome']      
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $row['ano']      
                                ?>
                            </td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <a href="<?php echo INCLUDE_PATH_ROOT; ?>">
        <img src="<?php echo INCLUDE_PATH_VIEWS.'assets/icons/back.svg'; ?>" alt="Voltar"/>
            Voltar
    </a>
</main>