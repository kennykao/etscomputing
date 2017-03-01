
$(document).ready(function(){/* activate sidebar */

  $(".promo-links").click(function(){
    var panel_id = "#" + $(this).attr("id") + "-panel"
    console.log(panel_id)
    $(".promo-content").addClass("invisible")
    $(panel_id).removeClass("invisible")
  });   

var img = document.getElementById('banner'); 
var width = img.clientWidth;
var height = img.clientHeight;

$('#sidebar').affix({
  offset: {
    top: height + 24
  }
});

/* activate scrollspy menu */
var $body   = $(document.body);
var navHeight = $('.navbar').outerHeight(true) + 10;

// $body.scrollspy({
// 	target: '#leftCol',
// 	offset: navHeight
// });

  /* smooth scrolling sections */
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 50
        }, 1000);
        return false;
      }
    }
  });
});