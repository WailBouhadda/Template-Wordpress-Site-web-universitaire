<?php get_header(); ?>

<div class="page-content">
  <div class="contentleft">


    <h1 class="page_title"><?php the_title(); ?></h1>

    <div class="content" 
          style="
          margin-top:20px;
          background-color: #fff;
          border-radius: 3px;"
        ><?PHP ?></div>
  </div>
  
  <div class="contentright" style="margin-top:67px;">
    <?php get_sidebar(); ?>
  </div>

<div class="clearfix"></div>
</div>   

<?php get_footer(); ?>
