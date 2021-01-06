<?php
    session_start();

    if(!isset($_SESSION['admin']) && $_SESSION["admin"]){
        echo "<h1>Página movida permanentemente";
        die();
    }

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
        <div id="status"><strong></strong></div>
    </div>
    <a href="https://ifbookst.herokuapp.com/">
        <img src="https://ifbookst.herokuapp.com/assets/icons/back.svg" alt="Voltar"/>
            Voltar
    </a>
</main>
<script src="https://ifbookst.herokuapp.com/assets/js/formStudent.js"></script>
<?php
    include("../templates/footer.php");
?>