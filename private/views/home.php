<?php $this->layout('default'); ?>

<?php $this->start('title'); echo "Home"; $this->stop(); ?>


<?php $this->start('stylesheets'); ?>
<link rel="stylesheet" href="<?php echo site_url('/css/home.css') ?>">
<?php $this->stop(); ?>


<?php $this->start('cont'); ?>
<!-- INTRO BACKGROUND VIDEO -->
<div class="WrapperVideoBG">
    <video id="VideoBG" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="<?php echo site_url('/videos/promo.mp4') ?>" type="video/mp4">
    </video>
</div>

<div class="about">
    <div class="wrapper-about">
      <div class="intro-image">
        <img src="https://www.vorkaccountants.nl/wp-content/uploads/2018/01/placeholder-1024x1024.png" alt="Profielfoto">
      </div>
      <div class="intro-txt">
        <h2>Random Titel</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

      </div>
    </div>
  </div>

  <div class="cta" id="cta">
    <div class="container">
      <h2>Random Titel</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br> when an unknown printer took a galley of type and scrambled it to make a type specimen book..</p>
      <a href="#" class="cta-btn">Mail now!</a>
    </div>

  </div>



<?php $this->stop(); ?>