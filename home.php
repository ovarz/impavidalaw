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
	<div class="shi-image">
	  <div class="shi-image-container flex_ori thumb-loading">
	    <img alt="Impavida Founder" class="lazyload" data-original="img/intro-trio-small.png"
		  data-srcset="img/intro-trio-small.png 567w,
		  img/intro-trio-medium.png 1023w,
		  img/intro-trio-large.png 1920w"
		/>
	  </div>
	  <div class="shi-prime">
		<?php 
		  $prime_array = array();
		  $prime_array[]=array('prime_icon'=>'reputable','prime_label'=>'Reputable');
		  $prime_array[]=array('prime_icon'=>'commited','prime_label'=>'Commited');
		  $prime_array[]=array('prime_icon'=>'solving','prime_label'=>'Problem Solving');
		  $prime_array[]=array('prime_icon'=>'effective','prime_label'=>'Cost Effective');
		  foreach($prime_array as $prime_list){
		?>
		  <div class="shi-prime-box">
			<div class="shi-prime-container">
			  <?php require ($_SERVER['IL'].'img/icon/prime-'. $prime_list['prime_icon'] .'.svg')?>
			  <h3 class="shi-prime-label"><?php echo($prime_list['prime_label'])?></h3>
			</div>
		  </div>
		<?php } ?>
	  </div>
	</div>
  </span>
</section>



<section aria-label="Prime" class="section-container section-home-about">
  <span class="width-max">
    tes
  </span>
</section>



</div>
<?php require ($_SERVER['IL'].'inc/footer.php')?>
<?php require ($_SERVER['IL'].'inc/base-bottom.php')?>