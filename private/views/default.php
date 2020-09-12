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
        <img src="<?php echo site_url('/img/logo.png') ?>" alt="logo">

        <ul class="desktop">
            <li><a href="">Home</a></li>
            <li><a href="">Over ons</a></li>
            <li><a href="">Diensten</a></li>
            <li><a href="">Portfolio</a></li>
            <li><a href="">Contact</a></li>
        </ul>

        <div class="mobile">
            <button>Test <span class="fas fa-caret-down dropdown-open"></span></button>
        </div>
    </nav>

    <?php echo $this->section('cont'); ?>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html