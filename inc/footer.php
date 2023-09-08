<footer>
  <div class="footer-top section-container">
    <div class="footer-top-container width-max">
      <div class="footer-logo">
	    <?php require ($_SERVER['IL'].'img/logo.svg')?>
	  </div>
	  
	  
	  
	  <div class="footer-contact content_center">
	    <span>
          <div class="footer-contact-direct">
            <?php 
              $fcd_array = array();
              $fcd_array[]=array(
                'fcd_icon'=>'phone',
                'fcd_label'=>'Phone Number',
                'fcd_link'=>'tel:02125502567',
                'fcd_info'=>'(021) 2550 2567',
			  );
              $fcd_array[]=array(
                'fcd_icon'=>'fax',
                'fcd_label'=>'Fax Number',
                'fcd_link'=>'fax:02125502555',
                'fcd_info'=>'(021) 2550 2555',
			  );
              $fcd_array[]=array(
                'fcd_icon'=>'mail',
                'fcd_label'=>'Email Address',
                'fcd_link'=>'mailto:cs@impavidalaw.com',
                'fcd_info'=>'cs@impavidalaw.com',
			  );
              foreach($fcd_array as $fcd_list){
            ?>
              <a aria-label="<?php echo($fcd_list['fcd_label'])?>" title="<?php echo($fcd_list['fcd_label'])?>" class="fcd-list" href="<?php echo($fcd_list['fcd_link'])?>">
                <div class="fcd-left">
                  <div class="fcd-icon content_center">
				    <?php require ($_SERVER['IL'].'img/icon/footer-'. $fcd_list['fcd_icon'] .'.svg')?>
                  </div>
                </div>
                <div class="fcd-right">
                  <div class="fcd-label"><?php echo($fcd_list['fcd_info'])?></div>
                </div>
              </a>
            <?php } ?>
          </div>
		  
		  <!--
		  <div class="footer-contact-socmed">
		    <div class="fcs-label">Find Us On Social Media</div>
			<div class="fcs-list">
              ?php 
                $fcs_array = array();
                $fcs_array[]=array(
                  'fcs_icon'=>'linkedin',
                  'fcs_label'=>'Linkedin Impavida Law',
                  'fcs_link'=>'',
                );
                $fcs_array[]=array(
                  'fcs_icon'=>'instagram',
                  'fcs_label'=>'Instagram Impavida Law',
                  'fcs_link'=>'',
                );
                $fcs_array[]=array(
                  'fcs_icon'=>'facebook',
                  'fcs_label'=>'Facebook Impavida Law',
                  'fcs_link'=>'',
                );
                $fcs_array[]=array(
                  'fcs_icon'=>'twitter',
                  'fcs_label'=>'Twitter Impavida Law',
                  'fcs_link'=>'',
                );
                foreach($fcs_array as $fcs_list){
              ?>
			    <a aria-label="?php echo($fcs_list['fcs_label'])?>" title="?php echo($fcs_list['fcs_label'])?>" class="fcs-button content_center" target="_blank"
				href="?php echo($fcs_list['fcs_link'])?>">
				  ?php require ($_SERVER['IL'].'img/icon/socmed-'. $fcs_list['fcs_icon'] .'.svg')?>
				</a>
			  ?php } ?>
			</div>
		  </div>
		  -->
		</span>
	  </div>
	  
	  
	  
	  <div class="footer-address">
	    <div class="footer-address-map flex_ori thumb-loading">
		  <iframe title="Impavida Map" class="lazyload" data-original="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.304775388189!2d106.807224775781!3d-6.223484960953751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f161de7ebfab%3A0xbeb5b81706f6e95f!2sImpavida%20Advocates%20%26%20Legal%20Consultants!5e0!3m2!1sen!2sid!4v1693245628219!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<a aria-label="Impavida Headquarter" title="Impavida Headquarter" class="footer-address-detail" href="https://www.google.com/maps?ll=-6.22349,106.8098&z=15&t=m&hl=en&gl=ID&mapclient=embed&cid=13742092247031540063" target="_blank">
		  <b class="fad-building">One Pacific Place 15<sup>th</sup> Floor<br/> Sudirman Center Business District</b>
		  <div class="fad-info">Jalan Jenderal Sudirman Kav. 52-53<br/> Jakarta, Indonesia - 12190</div>
		</a>
	  </div>
	</div>
  </div>
  
  
  
  <div class="footer-bottom content_center">
    <span>Impavida &copy;2023 - All Right Reserved</span>
  </div>
</footer>