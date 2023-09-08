<nav>
  <?php 
    $kanal_array = array();
    $kanal_array[]=array('kanal_icon'=>'home','kanal_name'=>'The Firm','kanal_link'=>'home.php');
    $kanal_array[]=array('kanal_icon'=>'team','kanal_name'=>'Team','kanal_link'=>'team');
    $kanal_array[]=array('kanal_icon'=>'practice','kanal_name'=>'Areas Of Practice','kanal_link'=>'areas-of-practice');
    //$kanal_array[]=array('kanal_icon'=>'article','kanal_name'=>'Article','kanal_link'=>'article');
    $kanal_array[]=array('kanal_icon'=>'contact','kanal_name'=>'Contact Us','kanal_link'=>'contact-us');
    foreach($kanal_array as $kanal_list){
  ?>
  <a aria-label="<?php echo($kanal_list['kanal_name'])?>" title="<?php echo($kanal_list['kanal_name'])?>" href="<?php echo($kanal_list['kanal_link'])?>"
  class="header-link menu-link <?php if($menu_curr == $kanal_list['kanal_icon']) { ?>menu-curr<?php } ?>">
    <span><?php echo($kanal_list['kanal_name'])?></span>
  </a>
  <?php } ?>
</nav>