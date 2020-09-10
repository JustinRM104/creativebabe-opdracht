<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Justin Rodriguez Montoya">

    <link rel="stylesheet" href="<?php echo site_url('/css/main.css') ?>">
    <?php echo $this->section('stylesheets'); ?>

    <title> <?php echo $this->section('title'); ?> - jromdesigns</title>
</head>
<body>
    <div id="background">
        <div id="content">
            <?php echo $this->section('cont'); ?>
        </div>
    </div>

    <script src="<?php echo site_url("/js/p5.min.js"); ?>"></script>
    <script src="<?php echo site_url("/js/vanta.min.js"); ?>"></script>
    <script>
    VANTA.FOG({
        el: "#background",
        mouseControls: true,
        touchControls: true,
        minHeight: 0.00,
        minWidth: 0.00,
        highlightColor: 0xffffff,
        midtoneColor: 0xffffff,
        lowlightColor: 0xffffff,
        baseColor: 0xbbbbbb,
        blurFactor: 0.31,
        speed: 0.50,
        zoom: 1.60
    })
    </script>
</body>
</html