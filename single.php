<?php  get_header();  ?>

<div class="page-content">

    <main  class="contentleft">
        <?php    while (have_posts()) : the_post(); ?>

        <h2 class="post_title"><?php the_title(); ?></h2>
    
        <div class="image">
          <?php the_post_thumbnail('small-thumbnail'); ?>
        </div>
        
        <h9><?php the_content();?></h9>
        

        <?php  endwhile;  ?>
    </main>

    <div class="contentright">
        <?php get_sidebar(); ?>
    </div>

</div>

<?php  get_footer();  ?>

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

//Menu On Hover
  
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