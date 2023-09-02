<?php 
  $menu_curr="detail"; 
  $page_url='cinta';
  $page_title="Cinta Indah K. Pratami Trisulo, S.H.";
  $page_desc="Cinta is the founding partner of Impavida. After graduating from the Faculty of Law of University Pelita Harapan, Cinta started her lawyering career as a lawyer in a law firm that is ranked as a top-tier firm in many practice areas by Legal 500, Chambers Asia, IFLR, and AsiaLaw.";
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
		<p>Cinta is the founding partner of Impavida. After graduating from the Faculty of Law of University Pelita Harapan, Cinta started her lawyering career as a lawyer in a law firm that is ranked as a top-tier firm in many practice areas by Legal 500, Chambers Asia, IFLR, and AsiaLaw. Subsequently, she continued her career as a Defense Attorney for more than 10 (ten) years at one of the most prestigious litigation law firms in Indonesia founded by an Indonesian senior lawyer, Prof. Dr. OC Kaligis, S.H., M.H, where she handled many notable criminal and civil litigation cases from wide range of clients in Indonesia, from public to private companies, government institutions and officials, as well as individuals.</p>
		<p>Cinta’s expertise and area of focus are on criminal litigation, civil and commercial litigation, industrial relation disputes, property and land law, corporate law, bankruptcy and restructuring, arbitration and alternative disputes resolution.</p>
		<p></p>
		<h3>Professional Qualification</h3>
		<ul>
		  <li>Indonesian Advocates Association (Peradi)</li>
		  <li>Receiver and Administrator for Bankruptcy</li>
		</ul>
		<p></p>
		<h3>Representative Matters:</h3>
		<ul>
		  <li>Representing Marubeni Corporation with respect to a tort lawsuit against the Sugar Group Companies.</li>
		  <li>Advising and representing PT Bangun Tjipta Sarana against PT Jasa Marga with respect to a breach of contract lawsuit before the Central Jakarta District Court.</li>
		  <li>Representing Putra Nevo A. Prayugo, as the Director of PT Masaro Radiokom with respect to corruption allegations before corruption court.</li>
		  <li>Representing Former Regent of Riau, Tengku Azmun Jaafar before the corruption court, on corruption allegations.</li>
		  <li>Advising and defending Millenium Dinamika Investama Cooperation before the Police Headquarters, on fraud and embezzlement allegations.</li>
		  <li>Advising and defending Prita Mulya Sari on a landmark criminal case on the allegations of defamation against Omni Hospital.</li>
		  <li>Representing several companies on labour disputes.</li>
		  <li>Represented PT Procon Indah on criminal case allegations of fraud and embezzlement before the South Jakarta District Court.</li>
		  <li>Representing several companies on arbitration cases before the Indonesian National Board of Arbitration (BANI).</li>
		  <li>Representing multinational companies as creditors on various bankruptcy/suspension debt of payment cases before the Commercial Courts.</li>
		</ul>
	  </main>
	  
      <?php require ($_SERVER['IL'].'module/share-list.php') ?>
	</div>
	
	
	
	<div class="section-detail-small">
	  <div class="sds-container sds-sticky">
	    <?php $profile_title="Founding Partner"; require ($_SERVER['IL'].'module/profile-box.php') ?>
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