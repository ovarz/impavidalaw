<?php 
  $menu_curr="detail"; 
  $page_url='nadya';
  $page_title="Nadya Helida, S.H., M.H.";
  $page_desc="Nadya is the founding partner of Impavida. Nadya graduated from the Faculty of Law of the University of Padjadjaran, and then pursued her Master of Law at the University of Indonesia. Nadya started her lawyering career as a lawyer at one of the most prestigious litigation law firms in Indonesia, Prof. Dr. OC Kaligis, S.H., M.H.";
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
		<p>Nadya is the Founding Partner of Impavida. Nadya graduated from the Faculty of Law of the University of Padjadjaran, and then pursued her Master of Law at the University of Indonesia. Nadya started her lawyering career as a lawyer at one of the most prestigious litigation law firms in Indonesia, Otto Cornelis Kaligis & Associates founded by an Indonesian senior lawyer Prof. Dr. O.C. Kaligis, S.H., M.H. Nadya has more than 10 (ten) years of experience in handling many notable criminal and civil litigation cases from a wide range of clients in Indonesia, from public to private companies, government institutions and officials, as well as individuals.</p>
		<p>Nadya's expertise and area of focus are on Criminal Litigation, Civil and Commercial Litigation, Family Law, Industrial Relations Disputes, Property and Law, Corporate Law, Bankruptcy and Restructuring, Arbitration and Alternative Disputes Resolution.</p>
		<p></p>
		<h3>Professional Qualification</h3>
		<ul>
		  <li>Indonesian Advocates Association (Peradi)</li>
		</ul>
		<p></p>
		<h3>Representative Matters:</h3>
		<ul>
		  <li>Advising and representing Marubeni Corporation at Central Jakarta District Court involving tort lawsuit against Sugar Group Companies.</li>
		  <li>Representing PT. General Food Industries at Bale Bandung District Court.</li>
		  <li>Advising and representing D.L. Sitorus.</li>
		  <li>Advising and representing Anggodo Widjojo.</li>
		  <li>Advising and representing politician Aries M. Narang, as the Head of DPRD Central Kalimantan Province, for an allegation of corruption case at Palangka Raya District Court.</li>
		  <li>Representing Dr. Drs. Bahasyim Assifie on an allegation of corruption case before the corruption court.</li>
		  <li>Representing PT. Procon Indah at the South Jakarta District Court.</li>
		  <li>Advising and representing a pharmacy company named PT. Servier Indonesia, for an allegation of criminal act before the South Sumatera Regional Police.</li>
		  <li>Advising and representing PT. Ghalia Indonesia Printing on legal dispute with PT. Pos Logistik Indonesia.</li>
		  <li>Representing several public figures Venna Melinda, Luna Maya, Nazriel Irham (Ariel Noah), Marshanda involving civil and/or criminal cases.</li>
		</ul>
	  </main>
	  
      <?php require ($_SERVER['IL'].'module/share-list.php') ?>
	</div>
	
	
	
	<div class="section-detail-small">
	  <div class="sds-container sds-sticky">
	    <?php $profile_title="Founding Partner"; $profile_email="nadyahelida@impavidalaw.com"; require ($_SERVER['IL'].'module/profile-box.php') ?>
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