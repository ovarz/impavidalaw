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
                'fcd_link'=>'tel:02175930292',
                'fcd_info'=>'(021) 7593 0292',
			  );
			  /*
              $fcd_array[]=array(
                'fcd_icon'=>'fax',
                'fcd_label'=>'Fax Number',
                'fcd_link'=>'fax:02125502555',
                'fcd_info'=>'(021) 2550 2555',
			  );
			  */
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
		  <iframe title="Impavida Map" class="lazyload" data-original="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7950454776897!2d106.78011227567629!3d-6.2906471936983674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f13bf4da5429%3A0xe8c29d298a2fd6db!2sPalma%20Tower!5e0!3m2!1sid!2sid!4v1721097388898!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<a aria-label="Impavida Headquarter" title="Impavida Headquarter" class="footer-address-detail" href="https://www.google.com/maps?ll=-6.22349,106.8098&z=15&t=m&hl=en&gl=ID&mapclient=embed&cid=13742092247031540063" target="_blank">
		  <b class="fad-building">Palma Tower - 18<sup>th</sup> Floor Unit D2<br/> TB Simatupang</b>
		  <div class="fad-info">Jl. RA Kartini II-S Kav. 6<br/> South Jakarta, Indonesia - 12310</div>
		</a>
	  </div>
	</div>
  </div>
  
  
  
  <div class="footer-bottom content_center">
    <span>Impavida &copy;2023 - All Right Reserved</span>
  </div>
</footer>