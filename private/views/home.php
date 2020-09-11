<?php $this->layout('default'); ?>

<?php $this->start('title'); echo "Home"; $this->stop(); ?>

<?php $this->start('cont'); ?>

<source src="<?php echo site_url('/videos/promo.mp4') ?>" type="video/mp4">

<?php $this->stop(); ?>