<?php get_header(); ?>    

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="article-first">
    <div class="article-first__content">
      <div class="article-first__category">
         <?php get_template_part('modules/atoms/category-link'); ?>
      </div>
      <h1 class="article-first__title">
        <?php the_title(); ?>
      </h1>
    </div>
    <div class="article-first__thumbnail">
      <picture class="hero__thumb picture">
        <source media="(max-width: 768px)" srcset="<?php the_post_thumbnail_url( 'thumbnail-medium' );?>">
        <source media="(max-width: 1024px)" srcset="<?php the_post_thumbnail_url( 'thumbnail-xxlarge' );?>">
        <img data-object-fit="cover" class="picture__img" alt="text" src="<?php the_post_thumbnail_url( 'thumbnail-xxlarge' );?>"/>
      </picture>
    </div>
    </div>
    <div class="article-first__content article-first__single-sidebar">
      <div class="article-first__post main">
       <?php the_content("Sigue leyendo"); ?>
      </div>
    </div>    
  <?php endwhile; else: ?>
  <?php include (TEMPLATEPATH . '/404.php'); ?>
<?php endif; ?>
</article>

<?php get_footer(); ?>