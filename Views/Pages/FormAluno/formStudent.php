<main id="main">
    <div id="form">
        <div class="form-info">
            <div class="labels">
                <label for="nome">Nome: </label>
                <label for="sobrenome">Sobrenome: </label>
                <label for="ano">Ano: </label>
                <label for="prontuario">Prontuário: </label>
            </div>
            <div class="campos">
                <input type="text" name="nome" id="nome" required="required"/>
                <input type="text" name="sobrenome" id="sobrenome" required="required"/>
                <select name="ano" id="ano" required="required">
                    <option value="" selected="selected" hidden="hidden">
                        &lt;Ano que está cursando&gt;
                    </option>
                    <?php
                        for($i=1;$i<=4;$i++){
                            echo "<option value='$i'>".$i."° Ano</option>";
                        }
                    ?>
                </select>
                <input type="text" name="prontuario" id="prontuario" required="required"/>
            </div>
        </div>
        <button type="submit" onClick="registraAluno()" class="btn">Registrar</button>
    </div>
    <div id="status"></div>
    <a href="<?php echo INCLUDE_PATH_ROOT; ?>">
        <img src="<?php echo INCLUDE_PATH_VIEWS.'assets/icons/back.svg'; ?>" alt="Voltar"/>
            Voltar
    </a>
</main>
<script src="<?php echo INCLUDE_PATH_VIEWS.'assets/js/formStudent.js'; ?>"></script>