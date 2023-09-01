<div class="founderlist">
  <?php 
    $founder_array = array();
    $founder_array[]=array('founder_id'=>'cinta','founder_name'=>'Cinta Indah K. Pratami Trisulo, S.H.','founder_title'=>'Partner');
    $founder_array[]=array('founder_id'=>'nadya','founder_name'=>'','founder_title'=>'Partner');
    $founder_array[]=array('founder_id'=>'dewi','founder_name'=>'','founder_title'=>'Partner');
    $founder_array[]=array('founder_id'=>'vira','founder_name'=>'','founder_title'=>'Associate');
    foreach($founder_array as $founder_list){
  ?>
    <?php if($founder_list['founder_id'] != $show_founder) { ?>
      <a aria-label="<?php echo($founder_list['founder_name'])?>" alt="<?php echo($founder_list['founder_name'])?>" class="founderlist-box" 
      href="<?php echo($founder_list['founder_id'])?>">
        <div class="founderlist-photo flex_ori thumb-loading">
          <img alt="<?php echo($founder_list['founder_name'])?>" class="lazyload" data-original="img/founder-<?php echo($founder_list['founder_id'])?>.jpg"/>
        </div>
        <div class="founderlist-info">
          <h2 class="founderlist-name"><?php echo($founder_list['founder_id'])?></h2>
          <div class="founderlist-title"><?php echo($founder_list['founder_title'])?></div>
        </div>
      </a>
	<?php } ?>
  <?php } ?>
</div>