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
      <button title="Close Popup" class="rancak-popup-close"><?php require ($_SERVER['IL'].'img/icon/close.svg')?></button>
    </div>
  </div>
</div>



<div class="rancak-popup popup-announcement">
  <div class="rancak-popup-overlay"></div>
  <div class="rancak-popup-container content_center">
    <div class="rancak-popup-box">
      <div class="rancak-popup-content popup-announcement-content">
        <h2>PENGUMUMAN RESMI</h2>
		<h3>PENIPUAN DAN PEMALSUAN YANG MENGATASNAMAKAN IMPAVIDA ADVOCATES & LEGAL CONSULTANTS</h3>
		<br/>
        <p>Dengan ini kami sampaikan bahwa telah ditemukan adanya oknum yang tidak bertanggung jawab melakukan tindak pidana penipuan dan pemalsuan, penyalahgunaan foto dengan mengatasnamakan Impavida Advocates & Legal Consultants dalam berbagai bentuk komunikasi, termasuk namun tidak terbatas pada penawaran kerja sama, permintaan pembayaran, maupun transaksi lainnya.</p>
		<br/>
        <p>Kami menerima banyak email yang dikirimkan melalui alamat email resmi kami dari pihak-pihak yang menjadi korban penipuan oleh pihak yang mengatasnamakan Impavida Advocates & Legal Consultants serta menggunakan nama salah satu partner kami yaitu Nadya Helida, S.H., M.H. dan menggunakan logo dari Impavida Advocates & Legal Consultants dalam Surat Kuasa. Kami tegaskan bahwa hal-hal yang diuraikan di atas adalah bentuk PENIPUAN dan PEMALSUAN.</p>
		<br/>
        <p>Kami menegaskan bahwa:</p>
        <ol>
          <li>Impavida hanya melakukan komunikasi resmi melalui kanal yang terverifikasi, seperti website resmi <b>www.impavidalaw.com</b>, serta alamat email dengan domain <b>@impavidalaw.com</b></li>
          <li>Kami tidak pernah meminta pembayaran atau informasi sensitif melalui saluran yang tidak resmi.</li>
          <li>Setiap permintaan atau penawaran dari pihak yang mengatasnamakan Impavida Advocates & Legal Consultants tidak melalui nomor kontak yg tertera dalam <b>www.impavidalaw.com</b> BUKAN merupakan tanggung jawab kami.</li>
        </ol>
		<br/>
        <p>Sehubungan dengan hal tersebut, kami mengimbau kepada seluruh klien, mitra, dan masyarakat umum untuk:</p>
        <ul>
          <li>Selalu memverifikasi setiap informasi yang mengatasnamakan Impavida Advocates & Legal Consultants</li>
          <li>Tidak memberikan data pribadi atau melakukan transaksi tanpa konfirmasi melalui kanal resmi kami.</li>
          <li>Melaporkan segala bentuk aktivitas mencurigakan kepada kami melalui email resmi kami <a href="mailto:cs@impavidalaw.com">cs@impavidalaw.com</a></li>
        </ul>
		<br/>
        <p>Impavida Advocates & Legal Consultants tidak bertanggung jawab atas segala bentuk kerugian yang ditimbulkan akibat tindakan penipuan yang dilakukan oleh pihak tidak bertanggung jawab.</p>
        <p>Kami mengucapkan terima kasih atas perhatian dan kerja samanya.</p>
		<br/>
        <p>Hormat kami,</p>
        <p>Impavida Advocates & Legal Consultants</p>
      </div>
    </div>
    <div class="rancak-popup-bottom content_center">
      <button title="Close Popup" class="rancak-popup-close content_center"><?php require ($_SERVER['IL'].'img/icon/close.svg')?></button>
    </div>
  </div>
</div>



<noscript id="deferred-styles">
  <link rel="stylesheet" type="text/css" href="css/hold.css?<?php echo $anticache; ?>" media="print" onload="this.media='all'"/>
  <?php if($menu_curr == 'home') { ?>
    <link rel="stylesheet" type="text/css" href="css/home-hold.css?<?php echo $anticache; ?>" media="print" onload="this.media='all'"/>
  <?php } ?>
  <?php if($menu_curr == 'detail') { ?>
    <link rel="stylesheet" type="text/css" href="css/detail-hold.css?<?php echo $anticache; ?>" media="print" onload="this.media='all'"/>
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