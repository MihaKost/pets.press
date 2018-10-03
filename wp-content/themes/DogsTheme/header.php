<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
<!--    <title>Dog Club</title>-->
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Caveat|Gloria+Hallelujah" rel="stylesheet">
</head>

<body>
<div class="top-gradient"></div>
<div class="container">
    <div class="logo">
        <a href="/" alt="Кёрн Терьер" class="logo-text">Cairn Terrier</a>
    </div>

    <nav id="top-menu">
        <?php wp_nav_menu([
            'theme_location' => 'top',
        ]);
        ?>
    </nav>

    <div class="content">