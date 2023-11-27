<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
        wp_head();
    ?> 

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_theme_root_uri(); ?>/danki/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Danki Code - Tema</title>
</head>


<body>
    <section class="topo">
        <div class="center">
            <header>
                <div class="logo"><img src="<?php echo get_theme_root_uri(); ?>/danki/images/logo.png" /></div>
            </header>
            <ul class="menu-desktop">
                <li><a href="">Home</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Contato</a></li>
            </ul>
            <div class="menu-mobile">
            <span class="material-symbols-outlined"> format_align_right </span>
            <ul>
            <li><a href="">Home</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Contato</a></li>
            </ul>
            </div>