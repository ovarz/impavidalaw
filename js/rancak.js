function ClosePopup(){
  $('.open-sticky').removeClass('show-sticky');
  $('.rancak-popup').fadeOut('fast');
};



function CopyURL(text){
  var inputc = document.body.appendChild(document.createElement("input"));
  inputc.value = window.location.href;
  inputc.focus();
  inputc.select();
  document.execCommand('copy');
  inputc.parentNode.removeChild(inputc);
  $('.popup-copied').slideDown('fast').delay(2000).slideUp('fast');
};



function CopyLink(){
  var copyText = document.getElementById("CopyLinkField");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  $('.popup-share-note').slideDown('fast');
}



function all_scroll(){
  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();

    if(scroll_position >= 1){
      $('#btt').css("display","flex");	
    }

    else{
      $('#btt').hide();
    }
  });  
}



function open_sticky(){
  $('.open-sticky').click(function(){
    var get_id = $(this).attr('title');
	$('.open-sticky[title=' + get_id +']').toggleClass('show-sticky');
	$('.open-sticky').not('.open-sticky[title=' + get_id +']').removeClass('show-sticky');
    $('#popup-' + get_id).fadeToggle('fast');
    $('.rancak-popup').not('#popup-' + get_id).fadeOut('fast');
	if($('#popup-' + get_id).hasClass("popup-alert-temporary")){
      setTimeout(function() {
        ClosePopup();
      },2000);
	}
	return false;
  });	
}



function toggle_menu(){
  $('.menu-toggle').click(function(){
    $(this).toggleClass('menu-toggle-open');
	$('nav').slideToggle('fast').toggleClass('show-nav');
	
  });	
}



function close_menu(){
  $("#popup-MainMenu").click(function(){
    ClosePopup();
  });
}



function close_share(){
  $('.popup-share-overlay, .popup-share-close').click(function(){
	ClosePopup();
	return false;
  });
}



$(document).ready(function(){
  "use strict";
  all_scroll();
  open_sticky();
  toggle_menu();
  close_menu();
  close_share();
});