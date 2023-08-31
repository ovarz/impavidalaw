<div class="detail-share">
  <div class="detail-share-label">Share :</div>
  <div class="detail-share-list">
    <?php foreach($dsl_array as $dsl_list){ ?>
      <a aria-label="<?php echo($dsl_list['dsl_label'])?>" title="<?php echo($dsl_list['dsl_label'])?>" class="dsl-button" target="_blank" 
      href="<?php echo($dsl_list['dsl_link'])?>">
        <?php require ($_SERVER['IL'].'img/icon/socmed-'. $dsl_list['dsl_icon'] .'.svg')?>
      </a>
    <?php } ?>
  </div>
</div>