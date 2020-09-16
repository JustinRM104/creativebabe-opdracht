<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mike Yang, Arjan van Batenburg, Cecile Enzler, Justin Rodriguez Montoya">

    <script src="https://kit.fontawesome.com/7023acb312.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo site_url('/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('/css/nav.css') ?>">
    <?php echo $this->section('stylesheets'); ?>

    <title> <?php echo $this->section('title'); ?> • CreativeBabe</title>
</head>
<body>
    <nav>
        <img id="websiteLogo" src="<?php echo site_url('/img/logo.svg') ?>" alt="logo">
        <ul class="desktop">
            <li><a href="<?php echo url('home') . "#over"; ?>">Over ons</a></li>
            <li><a href="<?php echo url('home') . "#procedure"; ?>">Procedure</a></li>
            <li><a href="<?php echo url('home') . "#portfolio"; ?>">Portfolio</a></li>
        </ul>

        <div class="mobile">
            <button id="menuButton">Test <span class="fas fa-caret-down dropdown-open"></span></button>
            <a class="hamburgerButton" href="<?php echo url('home') . "#over"; ?>">Over ons</a>
            <a class="hamburgerButton" href="<?php echo url('home') . "#over"; ?>">Over ons</a>
            <a class="hamburgerButton" href="<?php echo url('home') . "#over"; ?>">Over ons</a>
        </div>

        <script src="<?php echo site_url('/js/navhandler.js') ?>"></script>
    </nav>

    <?php echo $this->section('cont'); ?>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html