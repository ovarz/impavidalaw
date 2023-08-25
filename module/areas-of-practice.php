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
        <?php 
          $saop_array = array();
          $saop_array[]=array('saop_id'=>'arbitration','saop_title'=>'Arbitration and Alternative Dispute Resolution');
          $saop_array[]=array('saop_id'=>'debt','saop_title'=>'Bankruptcy and Suspension of Debt Payment');
          $saop_array[]=array('saop_id'=>'criminal','saop_title'=>'Criminal Litigation');
          $saop_array[]=array('saop_id'=>'monopoly','saop_title'=>'Competition / Anti-Monopoly');
          $saop_array[]=array('saop_id'=>'constitutional','saop_title'=>'Constitutional Litigation');
          $saop_array[]=array('saop_id'=>'commercial','saop_title'=>'General Commercial Litigation');
          $saop_array[]=array('saop_id'=>'industrial','saop_title'=>'Industrial Relations Dispute');
          $saop_array[]=array('saop_id'=>'intellectual','saop_title'=>'Intellectual Property Dispute');
          $saop_array[]=array('saop_id'=>'state','saop_title'=>'State Administrative Litigation');
          foreach($saop_array as $saop_list){
        ?>
          <button title="<?php echo($saop_list['saop_title'])?>" aria-target="<?php echo($saop_list['saop_id'])?>" class="saop-box">
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