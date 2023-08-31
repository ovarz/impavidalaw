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
  $('.rancak-popup-note').slideDown('fast');
}



function all_scroll(){
  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();

    if(scroll_position >= 1){
      $('header').addClass('header-sticky');
	  $('#btt').css("display","flex");		
    }

    else{
      $('header').removeClass('header-sticky');	
	  $('#btt').hide();
    }
  });  
}



function back_to_top(){
  $('#btt').click(function(){
	$('body,html').scrollTop(0);
    return false;
  });	
}



function open_sticky(){
  $('.open-sticky').click(function(){
    var get_id = $(this).attr('aria-target');
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
  $('.rancak-popup-overlay, .rancak-popup-close').click(function(){
	ClosePopup();
	return false;
  });
}



function toggle_saop_tab(){
  $('.saop-tab-button').click(function(){
    var get_tab = $(this).attr('title');
    $(this).addClass('saop-tab-curr');
	$('.saop-tab-button').not(this).removeClass('saop-tab-curr');
    $('#' + get_tab).slideDown('fast');
    $('.saop-content').not('#' + get_tab).slideUp('fast');
  });
}



function sticky_maincolumn_right(){
  "use strict";
  var $window = $(window);
  function checkWidth(){
    var windowsize = $window.width();
    if (windowsize > 1000){
      $window.scroll(function(){
		var sc = $window.scrollTop();
        var right_container_height = $('.sds-sticky').outerHeight();
		if(sc >= 0){
          $('.sds-sticky').css({
			'top':'calc(100% - ' + right_container_height + 'px)' //--section-space-normal
          });
		}
      });
    }
  }
  checkWidth();
  //$(window).resize(checkWidth);
}



$(document).ready(function(){
  "use strict";
  all_scroll();
  back_to_top();
  open_sticky();
  toggle_menu();
  close_menu();
  close_share();
  toggle_saop_tab();
  sticky_maincolumn_right();
});