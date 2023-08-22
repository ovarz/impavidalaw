<?php require ('inc/base.php')?>
<?php require ($_SERVER['IL'].'inc/meta.php')?>
<?php require ($_SERVER['IL'].'inc/sample.php')?>



<style>
  .cover-bg{position:fixed; z-index:1; width:100vw; height:100vh;}
  .cover-bg:before{position:absolute; z-index:1000; top:0; left:0; width:100%; height:100%; background-color:rgb(255 255 255 / 70%);}
  .cover-bg img{filter:saturate(0) grayscale(1) brightness(1.3) contrast(1.3);}
  
  .coming-soon{position:relative; z-index:2000; height:100vh; padding:var(--size-5);}
  .coming-soon *{text-align:center; line-height:140%; color:var(--color-default-2);}
  .coming-soon svg{width:100%; max-width:233px; height:auto;}
  .cs-title{display:flex; flex-wrap:wrap; justify-content:center; margin-top:var(--size-4);}
  .cs-title span{margin:0 3px;}
  .cs-info{font-family:'Poppins',sans-serif; font-weight:bold; text-transform:uppercase; font-size:42px;}
  
  @media screen and (min-width:0px) and (max-width:410px){
    .coming-soon svg{max-width:144px;}
    .cs-title{font-size:11px;}
	.cs-info{font-size:34px;}
  }
</style>

<div class="cover-bg flex_ori thumb-loading">
  <img alt="Cover" class="lazyload" data-original="img/bg.jpg" />
</div>

<div class="coming-soon content_center">
  <span>
    <div class="cs-image content_center">
      <?php require ($_SERVER['IL'].'img/logo.svg')?>
    </div>
    <h1 class="cs-title"><span>Impavida |</span><span>Advocates & Legal Consultants</span></h1>
    <h2 class="cs-info">coming soon</h2>
	<h3 class="cs-desc hide">Impavida Advocates & Legal Consultants (Impavida) is a new breed of law firm that is established by three empowered women that are groomed and trained by the most notable litigation firm in Indonesia, and have combined experience of over 15 years.</h3>
  </span>
</div>



<?php require ($_SERVER['IL'].'inc/base-bottom.php')?>