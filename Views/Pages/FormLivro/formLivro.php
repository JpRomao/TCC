<main id="main">
    <div id="form">
        <div class="form-info">
            <div class="labels">
                <label for="materia">Matéria: </label>
                <label for="ano">Ano: </label>
            </div>
            <div class="campos">
                <select name="materia" id="materia">
                    <option value="" selected="selected" hidden="hidden">&lt;Selecione a matéria do livro&gt;</option>
                    <?php

                    ?>
                </select>
                <input id="ano" name="ano"/>
            </div>
        </div>
        <button type="submit" class="btn">Registrar</button>
    </div>
    <a href="<?php echo INCLUDE_PATH_ROOT; ?>">
        <img src="<?php echo INCLUDE_PATH_VIEWS.'assets/icons/back.png'; ?>" alt="Voltar"/>
            Voltar
    </a>
</main>