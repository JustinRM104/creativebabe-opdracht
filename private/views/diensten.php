<?php $this->layout('default'); ?>

<?php $this->start('title'); echo "Home"; $this->stop(); ?>


<?php $this->start('stylesheets'); ?>
<link rel="stylesheet" href="<?php echo site_url('/css/home.css') ?>">
<?php $this->stop(); ?>


<?php $this->start('cont'); ?>
<!-- INTRO BACKGROUND VIDEO -->

<div class="about" style="margin-top: 70px;">
  <div class="intro-txt">
        <h2>Diensten</h2>
        <p>
        Wij zijn een ontwerpers bureau dat bedrijven helpt bij het ontwikkelen
        van hun uitstraling en andere media uitingen. Ook zijn wij gespecialiseerd
        op het online bedied en kunnen wij u ondersteunen met gepersonaliseerde materialen.

        <br><br>

        Kijk verder voor meer informatie!
        </p>
  </div>
  <img src="<?php echo site_url('/img/Cecile_enzler_MV4A_drukwerk.jpg') ?>" alt="foto">
</div>

<div class="cta" id="cta">
    <h2 style="font-size: 30px; padding-top: 60px; padding-bottom: 60px; margin-bottom: 4em;">Er staat een gespecialiseerd team voor u klaar! <br> Laten we vandaag nog beginnen aan uw eigen website!</h2>
</div>

<h2 class="dienst__title">ONLINE DESIGN</h2>
<h2 class="dienst__title">DRUKWERK</h2>
<h2 class="dienst__title">GRAVERINGEN</h2>
<h2 class="dienst__title">FOTOGRAFIE</h2>
<h2 class="dienst__title">FOTO EDITING</h2>
<h2 class="dienst__title">DEVELOPMENT</h2>

<?php $this->stop(); ?>