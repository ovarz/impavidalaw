<?php 
  $menu_curr="detail"; 
  $page_url='vira';
  $page_title="Vira Aprillia, S.H., M.H.";
  $page_desc="Vira Aprillia is a lawyer at the Impavida, she obtained her Masters of Law at the University of Muhammadiyah Jakarta (UMJ). She started her career in 2012 as a Paralegal at the South Tangerang Justice Legal Aid Institute for 1 (one) year.";
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
		<p>Vira Aprillia is a lawyer at the Impavida, she obtained her Masters of Law at the University of Muhammadiyah Jakarta (UMJ). She started her career in 2012 as a Paralegal at the South Tangerang Justice Legal Aid Institute for 1 (one) year. In 2014 she followed her passion as a legal practitioner in becoming a Paralegal and lastly became a Junior Partner at the Law Office of M. Sidik Latuconsina & Partners. With her legal experience of 8 (eight) years at the Law Office of M. Sidik Latuconsina & Partners has provided her with knowledge in handling several civil and criminal cases and especially experience in the ability to create legal drafting, legal analysis and legal documents. Vira joined Impavida to further strength and develop her passion in the field of litigation.</p>
		<p></p>
		<h3>Professional Qualification</h3>
		<ul>
		  <li>Indonesian Advocates Association (Peradi)</li>
		</ul>
		<p></p>
		<h3>Representative Matters:</h3>
		<ul>
		  <li>Advising and representing PT. Adedanmas over a land dispute at the West Jakarta District Court.</li>
		  <li>Advising and representing PT. Shang Hyang Seri Indonesia as a defendant on the allegation of corruption before the Corruption Court.</li>
		  <li>Legal Counsel for PT. Timah (Persero) Tbk and Timah Industry.</li>
		  <li>Advising and representing PT Kereta Api Indonesia (KAI) in a civil case dispute before the West Jakarta District Court.</li>
		  <li>Advising and representing PT Waringin Agro Jaya in a civil case dispute before the the South Jakarta District Court.</li>
		  <li>Advising and representing PT Fostera Indonesiain in a civil case dispute before the South Jakarta District Court.</li>
		  <li>Advising and representing PT Cipta Niaga Gas (CNG) in a civil case dispute before the West Jakarta District Court.</li>
		  <li>Advising and representing Bank QNB Indonesia for criminal case allegation at the Indonesian National Police.</li>
		</ul>
	  </main>
	  
      <?php require ($_SERVER['IL'].'module/share-list.php') ?>
	</div>
	
	
	
	<div class="section-detail-small">
	  <div class="sds-container sds-sticky">
	    <?php $profile_title="Associate"; $profile_email=""; require ($_SERVER['IL'].'module/profile-box.php') ?>
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