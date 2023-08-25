<?php 
  $saop_array = array();
  $saop_array[]=array(
    'saop_id'=>'arbitration',
    'saop_title'=>'Arbitration and Alternative Dispute Resolution',
	'saop_desc'=>'Arbitration offers companies a private, quick way to settle contractual disputes. Impavida has wide experience in complex arbitration both for domestic and international arbitration proceedings. We have advised and represented multinational and domestic companies to assist in arbitration proceedings related to the areas of acquisition, construction and distribution.'
  );
  $saop_array[]=array(
    'saop_id'=>'debt',
    'saop_title'=>'Bankruptcy and Suspension of Debt Payment',
	'saop_desc'=>'Bankruptcy is the general statutory attachment of all debtor’s assets established by a declaration of bankruptcy by the Commercial Court, whereby such assets are placed under the management of a receiver, as supervised by a supervisory judge, for the benefit of the debtor’s creditors. Proceedings are initiated by court registration of a filed petition to the Commercial Court. Impavida has the experience in handling bankruptcy cases throughout the Commercial Courts in Indonesia. In addition to handling Bankruptcy matters, Impavida also has the experience in representing both creditors and debtors with respect to Suspension of Debt Payment Obligations proceedings before the Commercial Courts in Indonesia.'
  );
  $saop_array[]=array(
    'saop_id'=>'criminal',
    'saop_title'=>'Criminal Litigation',
	'saop_desc'=>'Criminal proceedings which are complex and often lengthy procedures are the basic structure of any court trial. This standardized series of events helps ensure fairness and efficiency for all involved, a wrongful conviction is a miscarriage of justice arising from a criminal proceeding. Impavida has wide experience is assisting and representing clients before the police, district attorney and/or the relevant district court for any criminal actions being alleged to clients.'
  );
  $saop_array[]=array(
    'saop_id'=>'monopoly',
    'saop_title'=>'Competition / Anti-Monopoly',
	'saop_desc'=>'Impavida has wide experience in the litigation process relating to alleged violation of competition law case before Business Competition Supervisory Commission (Komisi Pengawas Persaingan Usaha/ “KPPU”). Impavida would provide significant role and develop appropriate strategies towards client’s interest with respect to the anti-monopoly dispute with the objective to minimize client’s risks in all level of investigations at KPPU.'
  );
  $saop_array[]=array(
    'saop_id'=>'constitutional',
    'saop_title'=>'Constitutional Litigation',
	'saop_desc'=>'A constitutional complaint can be filed by an individual or legal entity who claims that a decision by a public authority that has entered into legal effect caused damage to the claimant’s fundamental constitutional rights. Impavida has the experience in assisting client in defending its fundamental rights before the Constitutional Court.'
  );
  $saop_array[]=array(
    'saop_id'=>'commercial',
    'saop_title'=>'General Commercial Litigation',
	'saop_desc'=>'Impavida has wide experience with assisting clients related to commercial litigation within the scope of civil proceedings that delineate private rights and remedies, and govern disputes between individuals and/or entities in areas such as contracts, property and land dispute, family law, inheritance, marital, divorce. Impavida shall assist and represent the client in any court within the jurisdictions of Indonesia to settle any civil proceedings involving the client and to resolve any issues by emphasizing the client’s interest.'
  );
  $saop_array[]=array(
    'saop_id'=>'industrial',
    'saop_title'=>'Industrial Relations Dispute',
	'saop_desc'=>'Industrial Relations Dispute is a difference of opinion resulting in a dispute between employers or an association of employers with employees/laborers or trade unions due to a disagreement on rights, conflicting interests, a dispute over termination of employment, or a dispute among trade unions within one company, including dispute over rights, dispute over interest, dispute over termination of employment and dispute among trade unions is dispute between one trade union and another trade union within one company. Impavida shall represent the client, whether from the employers perspective or the employees perspective before the Industrial Court due to any issue related to conflict/ and or dispute arise between employers and employees.'
  );
  $saop_array[]=array(
    'saop_id'=>'intellectual',
    'saop_title'=>'Intellectual Property Dispute',
	'saop_desc'=>'The Commercial Court deals with complex cases arising out of business disputes, both for national and international companies, specifically the Commercial Court is tasked to handle any Intellectual Property Rights dispute. Impavida has the experience in assisting client for any Intellectual Property Rights disputes and to protect our client’s interest from any infringement actions and/ or allegation and any measures related thereof.'
  );
  $saop_array[]=array(
    'saop_id'=>'state',
    'saop_title'=>'State Administrative Litigation',
	'saop_desc'=>'State Administrative Court is a court specializing in administrative law, particularly disputes concerning the exercise of public power. Their role is to ascertain that official acts are consistent with the law. The administrative acts are recognized from the hallmark that they become binding without the consent of the other involved parties. Administrative law is the body of law that governs the activities of administrative agencies of government. Government agency action can include rulemaking, adjudication, or the enforcement of a specific regulatory agenda. Impavida has the experience in handling cases to represent client before the State Administrative Court for any dispute due to the inconsistency of the government in issuing their respective product.'
  );
?>



<section aria-label="Areas Of Practice" class="section-container section-areasofpractice">
  <span class="width-max">
    <h2 class="title-secondary saop-label">What We Are Expertise On</h2>
	<h3 class="title-primary saop-title">Our Practice Areas</h3>
	<div class="saop-tab">
	  <button title="Litigation" class="btn saop-tab-button saop-tab-curr">Litigation</button>
	  <button title="NonLitigation" class="btn saop-tab-button">Non Litigation</button>
	</div>
	
	
	
	<div class="saop-content" id="Litigation">
	  <p>Impavida shall assist those interested in resolving any legal matters that must be resolved before the Indonesian courts. We help our clients develop appropriate and practical strategies, claims and defenses in the event of a dispute while seeking reasonable grounds for settlement and compromise.</p>
	  <p>We are of the view that by assisting the client’s overall litigation strategy, Impavida enhances the neccessity of the client, facilitates the preparation and understanding of requisite documents, and minimizes delays, confusion and duplication of efforts. In the scope of litigation, Impavida specialized on the following areas:</p>
	  
	  <div class="saop-list">
        <?php foreach($saop_array as $saop_list){ ?>
          <button title="<?php echo($saop_list['saop_title'])?>" aria-target="<?php echo($saop_list['saop_id'])?>" class="open-sticky saop-box">
		    <div class="saop-top">
			  <?php require ($_SERVER['IL'].'img/icon/saop-'. $saop_list['saop_id'] .'.svg')?>
			  <h2 class="saop-title"><?php echo($saop_list['saop_title'])?></h2>
			</div>
			<div class="saop-bottom">
			  <?php require ($_SERVER['IL'].'img/icon/saop-down.svg')?>
			</div>
          </button>
        <?php } ?>
	  </div>
	</div>
	
	
	
	<div class="saop-content" id="NonLitigation">
	  <p>Impavida shall assist and advise clients in properly observing relevant laws and regulations in Indonesia and provides legal opinions for major business decisions. Impavida participates in major economic activities including but not limited to corporate rights and interests, asset transfer, mergers and acquisitions, joint venture and joint operations or corporate restructuring and engage in non-litigation legal matters.</p>
	  <p>In the scope of non-litigation, Impavida specialized on the following areas:</p>
	</div>
  </span>
</section>



<?php foreach($saop_array as $saop_list){ ?>
  <div id="popup-<?php echo($saop_list['saop_id'])?>" class="rancak-popup popup-saop hide">
    <div class="rancak-popup-overlay"></div>
    <div class="rancak-popup-container content_center">
      <div class="rancak-popup-box">
		<div class="rancak-popup-content">
		  <div class="popup-saop-left">
		    <div class="popup-saop-left-box">
              <?php require ($_SERVER['IL'].'img/icon/saop-'. $saop_list['saop_id'] .'.svg')?>
              <h2 class="saop-title"><?php echo($saop_list['saop_title'])?></h2>
			</div>
		  </div>
		  <div class="popup-saop-right">
		    <div class="popup-saop-right-box">
              <p><?php echo($saop_list['saop_desc'])?></p>
			</div>
		  </div>
		</div>
      </div>
      <div class="rancak-popup-bottom content_center">
        <button title="Close Popup" class="btn rancak-popup-close">Tutup Popup</button>
      </div>
    </div>
  </div>
<?php } ?>