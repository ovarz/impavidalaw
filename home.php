<?php $menu_curr="home"; require ('inc/base.php')?>
<?php require ($_SERVER['IL'].'inc/meta.php')?>
<?php require ($_SERVER['IL'].'inc/data.php')?>
<?php require ($_SERVER['IL'].'inc/header.php')?>
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
	</div>
  </span>
</section>



<section aria-label="About Us" class="section-container section-home-about">
  <span class="width-max">
    <div class="sha-left">
	  <div class="sha-image flex_ori thumb-loading">
	    <img alt="About Us" class="lazyload" data-original="img/about-home.png"/>
	  </div>
	</div>
	<div class="sha-right">
	  <h2 class="title-secondary sha-label">About Us</h2>
	  <h3 class="title-primary sha-title">Best Advisory Right Into You</h3>
	  <h4 class="sha-desc">Impavida Advocates & Legal Consultants (“Impavida”) is a dynamic and modern law firm established by legal practitioners which have strong litigation and dispute resolution expertise. The founding partners are groomed and trained by one of the most notable litigation law firms in Indonesia and have combined experience of over 15 years. Offering practical legal advice, with accuracy is the motto that drives the firm to skilfully make inroads into the rapidly changing legal landscape. A distinguishing attribute of the firm is its dedication to provide value adding, solution-oriented service to its clients.</h4>
	  <div class="sha-action">
	    <a aria-label="Consult Now" alt="Consult Now" class="btn btn-red sha-button" href="https://api.whatsapp.com/send?phone=62800000000000" target="_blank">
		  <?php require ($_SERVER['IL'].'img/icon/whatsapp-outline.svg')?>
		  <span class="sha-button-label">Consult Now</span>
		</a>
	    <a aria-label="More About Us" alt="More About Us" class="btn btn-blue sha-button" href="team/">
		  <span class="sha-button-label">More About Us</span>
		</a>
	  </div>
	</div>
  </span>
</section>



<?php $visi_bg="yes"; require ($_SERVER['IL'].'module/visi-misi.php')?>
<?php require ($_SERVER['IL'].'module/areas-of-practice.php')?>



<section aria-label="Our Team" class="section-container section-home-team">
  <div class="section-bg flex_ori thumb-loading">
    <img alt="Impavida Background" class="lazyload" data-original="img/team-bg-small.jpg"
      data-srcset="img/team-bg-small.jpg 567w,
      img/team-bg-medium.jpg 1023w,
      img/team-bg-large.jpg 1920w"
    />
  </div>
  <span class="width-max">
    <div class="sht-head">
      <h2 class="title-secondary">Know More Our Team</h2>
      <h3 class="title-primary">Meet Our Attorneys</h3>
      <h4 class="title-tertiary">Impavida practiced in the various legal aspects, such as litigation matters, and corporate area, we provide the following legal services:</h3>
	</div>
	<?php $show_founder="all"; require ($_SERVER['IL'].'module/founder-list.php')?>
  </span>
</section>



<section aria-label="Our Team" class="section-container section-home-client">
  <span class="width-max">
    <div class="shc-head">
      <h2 class="title-secondary">Everything Start With Trust</h2>
      <h3 class="title-primary">Our Amazing Client</h3>
      <h4 class="title-tertiary">Impavida practiced in the various legal aspects, such as litigation matters, and corporate area, we provide the following legal services:</h3>
	</div>
	<div class="shc-list">
      <?php 
        $client_array = array();
        $client_array[]=array('client_id'=>'pertamina','client_name'=>'Pertamina PHE WMO');
        $client_array[]=array('client_id'=>'mandiri','client_name'=>'Mandiri');
        $client_array[]=array('client_id'=>'bomba','client_name'=>'Bomba Grup');
        $client_array[]=array('client_id'=>'hanabank','client_name'=>'Hana Bank');
        $client_array[]=array('client_id'=>'kresnasecurities','client_name'=>'Krena Securities');
        $client_array[]=array('client_id'=>'kresnainsurance','client_name'=>'Kresna Life Insurance');
        $client_array[]=array('client_id'=>'wanaarthalife','client_name'=>'Wanaartha Life');
        foreach($client_array as $client_list){
      ?>
        <div class="shc-box flex_ori thumb-loading">
          <img alt="<?php echo($client_list['client_name'])?>" class="lazyload" data-original="img/client-<?php echo($client_list['client_id'])?>.png"/>
        </div>
	  <?php } ?>
	</div>
  </span>
</section>



<section aria-label="Latest News" class="section-container section-article">
  <span class="width-max">
    <div class="shc-head">
      <h2 class="title-secondary">We Share Knowledge</h2>
      <h3 class="title-primary">Lates Article Post</h3>
      <h4 class="title-tertiary">Impavida practiced in the various legal aspects, such as litigation matters, and corporate area, we provide the following legal services:</h3>
	</div>
	<div class="articlelist">
      <?php foreach($hotarticle_array as $article_list){ ?>
	    <?php require ($_SERVER['IL'].'module/article-list.php')?>
      <?php } ?>
	  <!--
      <php foreach($article_array as $article_list){ ?>
	    <php require ($_SERVER['IL'].'module/article-list.php')?>
      <php } ?>
	  -->
	</div>
	<div class="section-gateway content_center">
      <a aria-label="More Article" alt="More Article" class="btn" href="article/">
        More Article
      </a>
	</div>
  </span>
</section>



</div>
<?php require ($_SERVER['IL'].'inc/footer.php')?>
<?php require ($_SERVER['IL'].'inc/base-bottom.php')?>