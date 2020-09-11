<?php $this->layout('default'); ?>

<?php $this->start('title'); echo "Home"; $this->stop(); ?>

<?php $this->start('stylesheets'); ?>

<!-- Laad hier de stylesheets in. -->
<!--      <link rel="stylesheet" href="<?php echo site_url('/css/nav.css') ?>">         -->
<!-- copy paste dit hierboven gwn en verander naar naar goede bestand. -->


<?php $this->stop(); ?>

<?php $this->start('cont'); ?>


<!-- Begin hier met werken aan de home pagina -->
<source src="<?php echo site_url('/videos/promo.mp4') ?>" type="video/mp4">



<?php $this->stop(); ?>