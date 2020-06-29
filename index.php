<?php get_header(); ?>

<div class="page-content">

  
  <div class="contentleft">

    <h1 class="post_title">Actualité</h1>
    <div class="blog">
      <?php if(  have_posts() ) : while( have_posts() ) : the_post();?>
      <div class="image_post">
        <?php the_post_thumbnail('small-thumbnail'); ?>
      </div>
      <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
      <div class="author" style="font-size: 14px;">Poster par <strong><em></a><?php the_author() ?></em></strong> le <?php the_time('dS, F, Y');?></div>
        <h9><?php the_content();?></h9><hr>
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

</body>
</html>

