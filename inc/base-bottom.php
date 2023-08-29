<button title="Back to Top" id="btt" class="content_center hide">
  <?php require ($_SERVER['IL'].'img/icon/back-to-top.svg')?>
</button>



<div id="popup-Success" class="rancak-popup popup-success hide">
  <div class="rancak-popup-overlay"></div>
  <div class="rancak-popup-container content_center">
    <div class="rancak-popup-box">
      <div class="rancak-popup-content">
        <h2 class="title-secondary">Submit Success</h2>
        <h3 class="title-primary">Thank You</h3>
        <h4 class="title-tertiary"><?php echo $random_desc[array_rand($random_desc)] ?></h4>
      </div>
    </div>
    <div class="rancak-popup-bottom content_center">
      <button title="Close Popup" class="btn rancak-popup-close">Tutup Popup</button>
    </div>
  </div>
</div>



<noscript id="deferred-styles">
  <link rel="stylesheet" type="text/css" href="css/hold.css?<?php echo $anticache; ?>" media="print" onload="this.media='all'"/>
  <?php if($menu_curr == 'home') { ?>
    <link rel="stylesheet" type="text/css" href="css/home-hold.css?<?php echo $anticache; ?>" media="print" onload="this.media='all'"/>
  <?php } ?>
</noscript>
<script defer>
  var loadDeferredStyles = function() {
	var addStylesNode = document.getElementById("deferred-styles");
	var replacement = document.createElement("div");
	replacement.innerHTML = addStylesNode.textContent;
	document.body.appendChild(replacement)
	addStylesNode.parentElement.removeChild(addStylesNode);
  };
  var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
  window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  if (raf) raf(function(){window.setTimeout(loadDeferredStyles,0);});
  else window.addEventListener('load', loadDeferredStyles);
</script>
<script defer src="js/lazysizes.min.js"></script>
<script defer rancak-hold="js/rancak.js?<?php echo $anticache; ?>"></script>
<script defer>
  let url = window.location.href;
  if(url.includes('contact-us/?success')){
    $('.popup-success').css('display','block');
  }else{}
</script>
</body>
</html>