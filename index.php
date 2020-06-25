<?php get_header(); ?>

<div class="page-content">

  
  <div class="contentleft">

    <h1 class="post_title">Actualité</h1>
    <div class="blog">
      <?php if(  have_posts() ) : while( have_posts() ) : the_post();?>
      <h3 class="title"><?php the_title();?></h3>
      <div class="athor">Poster par <strong><em><?php the_author() ?></em></strong> le <?php the_time('dS, F, Y');?></div>
        <h9><?php the_content();?></h9>
        <?php endwhile; else: ?>
        No posts found.
        <?php endif;?>
      </div>
      
    </div>

  <div class="contentright">
    <?php get_sidebar(); ?>
  </div>
  <div class="clearfix"></div>

</div>

<?php get_footer(); ?>

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
</body>
</html>

