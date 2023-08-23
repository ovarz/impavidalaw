<?php require ('inc/base.php')?>
<?php require ($_SERVER['IL'].'inc/meta.php')?>
<?php require ($_SERVER['IL'].'inc/sample.php')?>
<?php $menu_curr="home"; require ($_SERVER['IL'].'inc/header.php')?>
<style><?php require ($_SERVER['IL'].'css/home.css')?></style>
<div class="rancak-container">



<section aria-label="Intro" class="section-container section-dark section-home-intro">
  <div class="section-bg flex_ori thumb-loading">
    <img alt="Impavida Background" class="lazyload" data-original="img/intro-bg-small.jpg"
      data-srcset="img/intro-bg-small.jpg 567w,
      img/intro-bg-medium.jpg 1023w,
      img/intro-bg-large.jpg 1920w"
    />
  </div>
  <span class="width-max">
    <h1 class="shi-title">Impavida</h1>
    <h2 class="shi-subtitle">We are ready to help with <span>Extraordinary</span> options for your <span>legal solutions</span></h2>
	<div class="shi-image content_center">
	  <div class="shi-image-container flex_ori thumb-loading">
	    <img alt="Impavida Founder" class="lazyload" data-original="img/intro-trio-small.png"
		  data-srcset="img/intro-trio-small.png 567w,
		  img/intro-trio-medium.png 1023w,
		  img/intro-trio-large.png 1920w"
		/>
	  </div>
	</div>
  </span>
</section>



</div>
<?php require ($_SERVER['IL'].'inc/footer.php')?>
<?php require ($_SERVER['IL'].'inc/base-bottom.php')?>