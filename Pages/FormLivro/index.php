<?php
    session_start();

    if(!isset($_SESSION['admin'])){
        die();
    }

    $array["titulo"] = "Cadastro Livro";
    $array["pageCss"] = ["formBook"];

    include("../templates/header.php");
?>

<main id="main">
    <div id="form">
        <div class="form-info">
            <div class="labels">
                <label for="materia">Matéria: </label>
                <label for="ano">Ano: </label>
                <label for="quantidade">Quantidade: </label>
            </div>
            <div class="campos">
                <select name="materia" id="materia">
                    <option value="" selected="selected" hidden="hidden">&lt;Selecione a matéria do livro&gt;</option>
                    <option value="Artes">Artes</option>
                    <option value="Educação Física">Educação Física</option>
                    <option value="Física">Física</option>
                    <option value="Química">Química</option>
                    <option value="Matemática">Matemática</option>
                    <option value="Português">Português</option>
                    <option value="Inglês">Inglês</option>
                    <option value="Espanhol">Espanhol</option>
                    <option value="Sociologia">Sociologia</option>
                    <option value="Biologia">Biologia</option>
                    <option value="História">História</option>
                    <option value="Geografia">Geografia</option>
                    <option value="Filosofia">Filosofia</option>
                </select>
                <select name="ano" id="ano">
                    <option value="" selected="selected" hidden="hidden">&lt;Selecione o ano do livro&gt;</option>
                    <?php
                        for($i=1;$i<=4;$i++){
                            echo "<option value=".$i.">".$i."° ano</option>";
                        }
                    ?>
                </select>
                <input type="number" id="quantidade" name="quantidade" placeholder="Quantidade de livros..."/>
            </div>
        </div>
        <button type="submit" id="action" class="btn">Registrar</button>
    </div>
    <div id="status"></div>
    <a href="<?php echo "http://localhost/TCC/"; ?>">
        <img src="<?php echo 'http://localhost/TCC/assets/icons/back.svg'; ?>" alt="Voltar"/>
            Voltar
    </a>
</main>
<script src="<?php echo 'http://localhost/TCC/assets/js/formBook.js'; ?>"></script>
<?php
    include("../templates/footer.php");
?>