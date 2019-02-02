<?php get_header(); ?>    

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="video">
    <div class="video__thumb">
      <picture class="hero__thumb picture">
        <source media="(max-width: 768px)" srcset="<?php the_post_thumbnail_url( 'square' );?>">
        <source media="(max-width: 1024px)" srcset="<?php the_post_thumbnail_url( 'square' );?>">
        <img data-object-fit="cover" class="picture__img" alt="text" src="<?php the_post_thumbnail_url( 'square' );?>"/>
      </picture>
    </div>
    <div class="video__content">
      <div class="video__head">
        <h1 class="video__title">
          <?php the_title(); ?>
        </h1>
        <div class="video__author">
          Por <span>NombreAutor</span>
        </div>
      </div>
      <div class="video__info main">
        <?php the_content("Sigue leyendo"); ?>
      </div>
    </div>
  </article>
    
  <?php endwhile; else: ?>
  <?php include (TEMPLATEPATH . '/404.php'); ?>
<?php endif; ?>
</article>

<?php get_footer(); ?>
