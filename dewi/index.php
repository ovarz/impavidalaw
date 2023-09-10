<?php 
  $menu_curr="detail"; 
  $page_url='dewi';
  $page_title="Dewi Ekuwi Vina, S.H.";
  $page_desc="Dewi is the founding partner of Impavida. Dewi graduated from Faculty of Law at Pelita Harapan University, and started her career as an advocate in 2008 at one of the most prestigious litigation law firms in Indonesia founded by an Indonesian senior lawyer, Prof. Dr. OC Kaligis, S.H., M.H.";
  require ('../inc/base.php')
?>
<?php require ($_SERVER['IL'].'inc/meta.php')?>
<?php require ($_SERVER['IL'].'inc/data.php')?>
<?php require ($_SERVER['IL'].'inc/header.php')?>
<div class="rancak-container">



<section aria-label="Cinta" class="section-container section-detail section-detail-profile">
  <span class="width-max">
    <div class="section-detail-big">
	  <main class="detail-content">
	    <h2 class="detail-content-title">Biography</h2>
		<p>Dewi Ekuwi Vina, S.H. is the founding partner of Impavida. Dewi graduated from Faculty of Law at Pelita Harapan University, and started her career as an advocate in 2008 at one of the most prestigious litigation law firms in Indonesia founded by an Indonesian senior lawyer, Prof. Dr. OC Kaligis, S.H., M.H. In her career as a litigator of more than a decade, she has integrity in providing legal services to her clients. Dewi has vast experiences in handling several prominent cases in Indonesia for both individual and multinational companies, whether before or outside of the court.</p>
		<p></p>
		<h3>Professional Qualification</h3>
		<ul>
		  <li>Indonesian Advocates Association (Peradi)</li>
		</ul>
		<p></p>
		<h3>Representative Matters:</h3>
		<ul>
		  <li>Advising and representing PT. Bank KEB Hana Indonesia for criminal case allegation at the Indonesian National Police.</li>
		  <li>Advising and representing PT. Bank Mandiri (Persero) Tbk for criminal case allegation at the Indonesian National Police.</li>
		  <li>Advising and representing Bank QNB Indonesia for criminal case allegation at the Indonesian National Police.</li>
		  <li>Advising and representing Kresna Group company for criminal case allegation at the Indonesian National Police.</li>
		  <li>Legal Counsel for Bomba Group Indonesia.</li>
		  <li>Legal Counsel for insurance company WanaArtha Life.</li>
		  <li>Advising and representing PT. Pertamina Hulu Energi West Madura Offshore (PHE WMO) for criminal case allegation at Indonesian National Police.</li>
		  <li>Legal Advisor to Mrs. Karlina Djaja Atmadja Wirahadikusumah (wife of the 4th Vice President, Mr. Umar Wirahadikusumah).</li>
		  <li>Legal Counsel to the Founders of PT. Source of Swarna Pratama for criminal case allegation at the Indonesian National Police.</li>
		  <li>Representing Victims of Criminal Cases at the Jakarta International School (JIS).</li>
		  <li>Team of Lawyers in submitting an Application to the Constitutional Court, on the Judicial Review of Article 16 Paragraph (1) Letter (b) of Law no. 6 of 2011 concerning Immigration.</li>
		</ul>
	  </main>
	  
      <?php require ($_SERVER['IL'].'module/share-list.php') ?>
	</div>
	
	
	
	<div class="section-detail-small">
	  <div class="sds-container sds-sticky">
	    <?php $profile_title="Founding Partner"; $profile_email=""; require ($_SERVER['IL'].'module/profile-box.php') ?>
	  </div>
	</div>
  </span>
</section>



<section aria-label="Related Biography" class="section-container section-other-profile">
  <span class="width-max">
    <div class="sop-title">Related Biography May You Like</div>
	<?php $show_founder=$page_url; require ($_SERVER['IL'].'module/founder-list.php')?>
  </span>
</section>



</div>
<?php require ($_SERVER['IL'].'inc/footer.php')?>
<?php require ($_SERVER['IL'].'inc/base-bottom.php')?>