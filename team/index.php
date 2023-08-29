<?php $menu_curr="team"; require ('../inc/base.php')?>
<?php require ($_SERVER['IL'].'inc/meta.php')?>
<?php require ($_SERVER['IL'].'inc/data.php')?>
<?php require ($_SERVER['IL'].'inc/header.php')?>
<div class="rancak-container">



<section aria-label="Cover" class="section-cover">
  <div class="section-cover-frame flex_ori thumb-loading">
    <img alt="Impavida Cover" class="lazyload" data-original="img/about-bg-small.jpg"
      data-srcset="img/about-bg-small.jpg 567w,
      img/about-bg-medium.jpg 1023w,
      img/about-bg-large.jpg 1920w"
    />
  </div>
</section>



<?php $visi_bg="no"; require ($_SERVER['IL'].'module/visi-misi.php')?>
<?php require ($_SERVER['IL'].'module/our-team.php')?>



<section aria-label="Choose Us" class="section-container section-prime-page">
  <span class="width-max">
    <div class="spp-head">
      <h2 class="title-secondary">Strengths Inside Us</h2>
      <h3 class="title-primary">Why Better Choose Us</h3>
      <h4 class="title-tertiary">Impavida practiced in the various legal aspects, such as litigation matters, and corporate area, we provide the following legal services:</h3>
	</div>
    <div class="primelist">
      <?php 
        $prime_array = array();
        $prime_array[]=array('prime_icon'=>'reputable','prime_label'=>'Reputable');
        $prime_array[]=array('prime_icon'=>'commited','prime_label'=>'Commited');
        $prime_array[]=array('prime_icon'=>'solving','prime_label'=>'Problem Solving');
        $prime_array[]=array('prime_icon'=>'effective','prime_label'=>'Cost Effective');
        foreach($prime_array as $prime_list){
      ?>
        <div class="primelist-box">
          <div class="primelist-container">
            <?php require ($_SERVER['IL'].'img/icon/prime-'. $prime_list['prime_icon'] .'.svg')?>
            <h2 class="primelist-label"><?php echo($prime_list['prime_label'])?></h2>
          </div>
        </div>
      <?php } ?>
    </div>
  </span>
</section>



</div>
<?php require ($_SERVER['IL'].'inc/footer.php')?>
<?php require ($_SERVER['IL'].'inc/base-bottom.php')?>