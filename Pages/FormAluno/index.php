<?php
    $array["pageCss"] = ["formStudent"];
    $array["titulo"] = "Formulário aluno";

    include("../templates/header.php");
?>
<main id="main">
    <div class="content">
        <div id="form">
            <div class="form-info">
                <div class="campos">
                    <div class="input-block">
                        <label for="nome">
                            Nome:
                        </label>
                            <input type="text" name="nome" id="nome" required="required"/>
                    </div>
                    <div class="input-block">
                        <label for="sobrenome">
                            Sobrenome:
                        </label>
                            <input type="text" name="sobrenome" id="sobrenome" required="required"/>
                    </div>
                    <div class="input-block">
                        <label for="turma">Turma: </label>
                            <select name="turma" id="turma" required="required">
                                <option value="" selected="selected" hidden="hidden">
                                    &lt;Turmo do aluno&gt;
                                </option>
                                <option value="Informática">Informática</option>
                                <option value="Mecânica">Mecânica</option>
                            </select>
                    </div>
                    <div class="input-block">
                        <label for="ano">Ano: </label>
                            <select name="ano" id="ano" required="required">
                                <option value="" selected="selected" hidden="hidden">
                                    &lt;Ano do aluno&gt;
                                </option>
                                <?php
                                    for($i=1;$i<=4;$i++){
                                        echo "<option value='$i'>".$i."° Ano</option>";
                                    }
                                ?>
                            </select>
                    </div>
                    <div class="input-block">
                        <label for="prontuario">Prontuário: </label>
                            <input type="number" name="prontuario" id="prontuario" required="required"/>
                    </div>
                </div>
            </div>
            <button type="submit" id="action" class="btn">Registrar</button>
        </div>
        <div id="status"></div>
    </div>
    <a href="<?php echo "/TCCheroku"; ?>">
        <img src="<?php echo '/TCCheroku/assets/icons/back.svg'; ?>" alt="Voltar"/>
            Voltar
    </a>
</main>
<script src="<?php echo '/TCCheroku/assets/js/formStudent.js'; ?>"></script>
<?php
    include("../templates/footer.php");
?>