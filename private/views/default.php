<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mike Yang, Arjan van Batenburg, Cecile Enzler, Justin Rodriguez Montoya">

    <script src="https://kit.fontawesome.com/7023acb312.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo site_url('/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('/css/nav.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('/css/bem.css') ?>">
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

    <footer class="footer">
        <div class="footer__text container">
        <div class="footer__section">
                <a href="#" class="footer__social"><img src="<?php echo site_url('/img/Facebook_icon.svg') ?>" alt=""></a>
                <a href="#" class="footer__social"><img src="<?php echo site_url('/img/Insta_icon.svg') ?>" alt=""></a>
                <a href="#" class="footer__social">Creative Bape<br>Let's engrave a smile</a>
                <a href="#" class="footer__social"><img src="<?php echo site_url('/img/mail_gold_icon.svg') ?>" alt=""></a>
                <a href="#" class="footer__social"><img src="<?php echo site_url('/img/telefoon_gold_icon.svg') ?>" alt=""></a>
            </div>

            <hr class="footer__hr">
        </div>
        <div class="footer__sections container">
            <div class="footer__section">
                <span class="footer__title">Diensten</span>
                <a href="#" class="footer__link">Online ontwerp</a>
                <a href="#" class="footer__link">Drukwerk</a>
                <a href="#" class="footer__link">Graveringen</a>
                <a href="#" class="footer__link">Fotografie</a>
            </div>
            <div class="footer__section">
                <span class="footer__title">Materialen</span>
                <a href="#" class="footer__link">Hout</a>
                <a href="#" class="footer__link">Metaal</a>
                <a href="#" class="footer__link">Kunststof</a>
                <a href="#" class="footer__link">Glas</a>
            </div>
            <div class="footer__section">
                <span class="footer__title">Service</span>
                <a href="#" class="footer__link">Algemene voorwaarde</a>
                <a href="#" class="footer__link">Koekiebeleid</a>
                <a href="#" class="footer__link">Privacy Policy</a>
            </div>
            <div class="footer__section">
                <span class="footer__title">Openingstijden</span>
                <a href="#" class="footer__link">Ma: 09:00 - 17:00</a>
                <a href="#" class="footer__link">Di: 09:00 - 17:00</a>
                <a href="#" class="footer__link">Wo: 09:00 - 17:00</a>
                <a href="#" class="footer__link">Do: 09:00 - 17:00</a>
                <a href="#" class="footer__link">Vr: 09:00 - 17:00</a>
            </div>
            <div class="footer__section">
                <span class="footer__title">Locatie</span>
                <a href="#" class="footer__link">
                    <p>
                        Bezoek ons op<br>
                        Contactweg 36<br>
                        1014 AN Amsterdam
                    </p>
                </a>
            </div>
        </div>
    </footer>

</body>
</html