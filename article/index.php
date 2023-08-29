<?php $menu_curr="article"; require ('../inc/base.php')?>
<?php require ($_SERVER['IL'].'inc/meta.php')?>
<?php require ($_SERVER['IL'].'inc/data.php')?>
<?php require ($_SERVER['IL'].'inc/header.php')?>
<div class="rancak-container">



<section aria-label="Latest News" class="section-container section-top section-article section-article-page">
  <span class="width-max">
    <div class="shc-head">
      <h2 class="title-primary">Latest Article Post</h2>
	</div>
	<div class="articlelist">
      <?php foreach($hotarticle_array as $article_list){ ?>
	    <?php require ($_SERVER['IL'].'module/article-list.php')?>
      <?php } ?>
      <?php foreach($article_array as $article_list){ ?>
	    <?php require ($_SERVER['IL'].'module/article-list.php')?>
      <?php } ?>
	</div>
  </span>
</section>



</div>
<?php require ($_SERVER['IL'].'inc/footer.php')?>
<?php require ($_SERVER['IL'].'inc/base-bottom.php')?>