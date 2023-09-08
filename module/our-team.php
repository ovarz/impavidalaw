<section aria-label="Our Team" class="section-container section-team">
  <div class="section-bg flex_ori thumb-loading">
    <img alt="Impavida Background" class="lazyload" data-original="img/team-bg-small.jpg"
      data-srcset="img/team-bg-small.jpg 567w,
      img/team-bg-medium.jpg 1023w,
      img/team-bg-large.jpg 1920w"
    />
  </div>
  <span class="width-max">
    <div class="section-team-head">
      <h2 class="title-secondary">Know More Our Team</h2>
      <h3 class="title-primary">Meet Our Attorneys</h3>
      <!--<h4 class="title-tertiary">Impavida practiced in the various legal aspects, such as litigation matters, and corporate area, we provide the following legal services:</h4>-->
	</div>
	<?php $show_founder="all"; require ($_SERVER['IL'].'module/founder-list.php')?>
  </span>
</section>