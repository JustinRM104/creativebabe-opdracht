<?php $this->layout('default'); ?>

<?php $this->start('title'); echo "Home"; $this->stop(); ?>


<?php $this->start('stylesheets'); ?>
<link rel="stylesheet" href="<?php echo site_url('/css/home.css') ?>">
<?php $this->stop(); ?>


<?php $this->start('cont'); ?>
<!-- INTRO BACKGROUND VIDEO -->
<div class="WrapperVideoBG" id="home">
    <video id="VideoBG" preload="auto" autoplay="true" loop muted="muted" volume="0">
        <source src="<?php echo site_url('/videos/promo.mp4') ?>" type="video/mp4">
    </video>
</div>

<div class="about">
  <img src="https://www.vorkaccountants.nl/wp-content/uploads/2018/01/placeholder-1024x1024.png" alt="foto">
  <div class="intro-txt">
        <h2>Random Titel</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
  </div>
</div>

<div class="cta" id="cta">
    <h2>Contact</h2>
    <p>Wilt u een innovatieve en persoonlijke samenwerking? <br>Neem dan gauw contact met ons op!</p>
    <a href="#" class="cta-btn">Neem nu contact op!</a>
</div>

<div class="workFeed">
  <div>
    <h3>Temp</h3>
    <img src="https://images.unsplash.com/photo-1530878955558-a6c31b9c97db?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
  </div>
  <div>
    <h3>Temp</h3>
    <img src="https://images.unsplash.com/photo-1530878955558-a6c31b9c97db?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
  </div>
  <div>
    <h3>Temp</h3>
    <img src="https://images.unsplash.com/photo-1530878955558-a6c31b9c97db?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
  </div>
  <div>
    <h3>Temp</h3>
    <img src="https://images.unsplash.com/photo-1530878955558-a6c31b9c97db?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
  </div>
  <div>
    <h3>Temp</h3>
    <img src="https://images.unsplash.com/photo-1530878955558-a6c31b9c97db?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
  </div>
  <div>
    <h3>Temp</h3>
    <img src="https://images.unsplash.com/photo-1530878955558-a6c31b9c97db?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
  </div>
</div>

<div class="howWork">
  <h2>Hoe werken wij</h2>
  <div class="howWorkWrapper">
    <div class="howWorkIcon">
      <img class="howWorkIcons" src="<?php echo site_url('/img/innovatief.svg') ?>" alt="">
      <h3>Innovatief</h3>
    </div>
    <div class="howWorkIcon">
      <img class="howWorkIcons" src="<?php echo site_url('/img/persoonlijk.svg') ?>" alt="">
      <h3>Persoonlijk</h3>
     </div>
     <div class="howWorkIcon">
      <img class="howWorkIcons" src="<?php echo site_url('/img/communicatief.svg') ?>" alt="">
      <h3>Communicerend</h3>
    </div>
    <div class="howWorkIcon">
      <img class="howWorkIcons" src="<?php echo site_url('/img/kwaliteit.svg') ?>" alt="">
      <h3>Kwaliteit</h3>
     </div>
  </div>
</div>

<?php $this->stop(); ?>