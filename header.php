<?php
/**
* Created by PhpStorm.
* User: George Tassiano
* Date: 06/07/2016
* Time: 00:44
*/
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title><?php print $title_name ?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="<?php print "css/"+$folha_estilo ?>">
        <meta name="description" content="Página oficial da Semana Acadêmica da Faculdade de Computação da Universidade Federal do Pará">
        <meta name="keywords" content="semana acadêmica, UFPA, universidade federal do pará, ciências da computação, sistemas de informação">
        <meta name="author" content="George Tassiano Melo Pereira">
        <base href="imagens/" target="_blank">
    </head>
    <body>
        <header>
            <h1>Semana Acadêmica da Faculdade de Computação</h1>
            <img src="capa-seafc.jpg" alt="imagem da capa da semana acadêmica">
        </header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="sobre/sobre.php">Sobre</a></li>
                <li><a href="historico/historico.php">Histórico</a></li>
                <li><a href="contato/contato.php">Contato</a></li>
            </ul>
        </nav>
