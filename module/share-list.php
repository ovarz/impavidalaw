<div class="detail-share">
  <div class="detail-share-label">Share :</div>
  <div class="detail-share-list">
    <?php 
      $dsl_array[]=array(
        'dsl_icon'=>'whatsapp',
        'dsl_label'=>'Share Whatsapp',
        'dsl_link'=>'https://api.whatsapp.com/send?text='. $page_title .'. '. $page_desc .'. https://www.impavidalaw.com/'. $page_url .'',
      );
      $dsl_array[]=array(
        'dsl_icon'=>'twitter',
        'dsl_label'=>'Share Twitter',
        'dsl_link'=>'https://twitter.com/intent/tweet?text='. $page_title .'. '. $page_desc .'. https://www.impavidalaw.com/'. $page_url .'',
      );
      $dsl_array[]=array(
        'dsl_icon'=>'facebook',
        'dsl_label'=>'Share Facebook',
        'dsl_link'=>'https://www.facebook.com/sharer/sharer.php?u=https://www.impavidalaw.com/'. $page_url .'',
      );
      $dsl_array[]=array(
        'dsl_icon'=>'linkedin',
        'dsl_label'=>'Share Linkedin',
        'dsl_link'=>'https://www.linkedin.com/sharing/share-offsite/?url=https://www.impavidalaw.com/'. $page_url .'',
      );
	  foreach($dsl_array as $dsl_list){ 
	?>
      <a aria-label="<?php echo($dsl_list['dsl_label'])?>" title="<?php echo($dsl_list['dsl_label'])?>" class="dsl-button" target="_blank" 
      href="<?php echo($dsl_list['dsl_link'])?>">
        <?php require ($_SERVER['IL'].'img/icon/socmed-'. $dsl_list['dsl_icon'] .'.svg')?>
      </a>
    <?php } ?>
  </div>
</div>