<div class="profile-box">
  <div class="profile-photo flex_ori thumb-loading">
    <img alt="<?php echo $page_title; ?>" class="lazyload" data-original="img/photo-<?php echo $page_url; ?>.jpg"/>
  </div>
  <h2 class="profile-name"><?php echo $page_title; ?></h2>
  <h3 class="profile-title"><?php echo $profile_title; ?></h3>
  <a aria-label="Email <?php echo $page_title; ?>" alt="Email <?php echo $page_title; ?>" class="btn profile-email" href="mailto:<?php echo $profile_email; ?>">
    <?php require ($_SERVER['IL'].'img/icon/footer-mail.svg')?>
	<span class="profile-email-label">Contact Me</span>
  </a>
</div>