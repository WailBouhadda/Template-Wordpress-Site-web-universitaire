<?php  get_header();  ?>

<div class="page-content">

    <main  class="contentleft">
        <?php    while (have_posts()) : the_post(); ?>

        <h2 class="post_title"><?php the_title(); ?></h2>
        
        <div class="content_post" style="background-color:#fff; border-radius:5px">
          <div class="image">
            <?php the_post_thumbnail('banner-image'); ?>
          </div>
          <h7><?php the_content();?></h7>
        </div>
  
        <?php  endwhile;  ?>
    </main>

    <div class="contentright">
        <?php get_sidebar(); ?>
    </div>

</div>

<?php  get_footer();  ?>
