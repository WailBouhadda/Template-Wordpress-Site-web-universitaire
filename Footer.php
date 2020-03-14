        <div class="Footer">
            <p>Powered with  ❤️ By <a href="https://github.com/WaIl-20">Wail</a> & <a href="https://github.com/AimeneNouri">Aimene</a></p>
            <p>&copy;<script>document.write(new Date().getFullYear());</script>, All rights are reserved for <a href="<?php bloginfo('url'); ?>" target="_blank"><?php bloginfo('name'); ?></a></p>
        </div>       
</body>
<script type="text/javascript">
(function($) { "use strict";

$(function() {
  var header = $(".start-style");
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
  
    if (scroll >= 10) {
      header.removeClass('start-style').addClass("scroll-on");
    } else {
      header.removeClass("scroll-on").addClass('start-style');
    }
  });
});		
  
//Animation

$(document).ready(function() {
  $('body.hero-anime').removeClass('hero-anime');
});

$('body').on('mouseenter mouseleave','.nav-item',function(e){
    if ($(window).width() > 750) {
      var _d=$(e.target).closest('.nav-item');_d.addClass('show');
      setTimeout(function(){
      _d[_d.is(':hover')?'addClass':'removeClass']('show');
      },1);
    }
});	
})(jQuery); 
</script>
</html>