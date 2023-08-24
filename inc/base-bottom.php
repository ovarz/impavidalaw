<button title="Back to Top" id="btt" class="content_center hide">
  <?php require ($_SERVER['IL'].'img/icon/back-to-top.svg')?>
</button>



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
</body>
</html>