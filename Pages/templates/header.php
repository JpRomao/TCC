<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>
            <?php echo $array['titulo']; ?>
        </title>

        <link type="text/css" rel="stylesheet" href="https://ifbookst.herokuapp.com/assets/styles/global.css"/>
        <link type="text/css" rel="stylesheet" href="https://ifbookst.herokuapp.com/assets/styles/logo.css"/>
        <?php
            if(isset($array['pageCss'])){
                foreach($array['pageCss'] as $index => $value){
                    ?>
                    <link type="text/css" rel="stylesheet" href="https://ifbookst.herokuapp.com/assets/styles/<?php echo $value.'.css' ?>"/> 
        <?php
                } //fim foreach
            } //fim if
            ?>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&family=Poppins&display=swap"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
<body>
    <div id='root'>
        <div id='main-div'>
            <div id='main-div-content' class='container'>
                <header id="header">
                    <div class="logo-container">
                        <a href="https://ifbookst.herokuapp.com/">
                            <img src="https://ifbookst.herokuapp.com/assets/img/logo.svg" alt="Logo IF Books"/>
                        </a>

                        <?php
                            if(isset($array['html']) && !empty($array['html'])){
                                echo $array['html'];
                            }
                        ?>
                    </div>
                </header>