<main id="main">
    <div class="content">
        <div id="form">
            <div class="form-info">
                <div class="labels">
                    <label for="nome">Nome: </label>
                    <label for="sobrenome">Sobrenome: </label>
                    <label for="turma">Turma: </label>
                    <label for="ano">Ano: </label>
                    <label for="prontuario">Prontuário: </label>
                </div>
                <div class="campos">
                    <input type="text" name="nome" id="nome" required="required"/>
                    <input type="text" name="sobrenome" id="sobrenome" required="required"/>
                    <select name="turma" id="turma" required="required">
                        <option value="" selected="selected" hidden="hidden">
                            &lt;Turmo do aluno&gt;
                        </option>
                        <option value="Informática">Informática</option>
                        <option value="Mecânica">Mecânica</option>
                    </select>
                    <select name="ano" id="ano" required="required">
                        <option value="" selected="selected" hidden="hidden">
                            &lt;Ano que o aluno está cursando&gt;
                        </option>
                        <?php
                            for($i=1;$i<=4;$i++){
                                echo "<option value='$i'>".$i."° Ano</option>";
                            }
                        ?>
                    </select>
                    <input type="number" name="prontuario" id="prontuario" required="required"/>
                </div>
            </div>
            <button type="submit" id="action" class="btn">Registrar</button>
        </div>
        <div id="status"></div>
    </div>
    <a href="<?php echo INCLUDE_PATH_ROOT; ?>">
        <img src="<?php echo INCLUDE_PATH_VIEWS.'assets/icons/back.svg'; ?>" alt="Voltar"/>
            Voltar
    </a>
</main>
<script src="<?php echo INCLUDE_PATH_VIEWS.'assets/js/formStudent.js'; ?>"></script>