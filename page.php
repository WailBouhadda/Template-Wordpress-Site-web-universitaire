<?php get_header(); ?>
<div class="page-content">
<div class="contentleft">
  <div class="blog">
  <?php if(  have_posts() ) : while( have_posts() ) : the_post();?>
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