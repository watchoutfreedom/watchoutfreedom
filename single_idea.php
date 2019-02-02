<?php get_header(); ?>    

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="idea">
    <div class="idea__content">
      <h1 class="idea__title">
        <?php the_title(); ?>
      </h1>
      <p class="idea__description">
        El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal.
      </p>
    </div>
    <div class="idea__content">
      <div class="idea__thumb">
        <picture class="hero__thumb picture">
          <source media="(max-width: 768px)" srcset="<?php the_post_thumbnail_url( 'thumbnail-medium' );?>">
          <source media="(max-width: 1024px)" srcset="<?php the_post_thumbnail_url( 'thumbnail-xxlarge' );?>">
          <img data-object-fit="cover" class="picture__img" alt="text" src="<?php the_post_thumbnail_url( 'thumbnail-xxlarge' );?>"/>
        </picture>
      </div>
    </div>
    <div class="idea__content idea__content--more main">
      <?php the_content("Sigue leyendo"); ?>
    </div>
  </article>
  <?php endwhile; else: ?>
  <?php include (TEMPLATEPATH . '/404.php'); ?>
<?php endif; ?>
</article>

<?php get_footer(); ?>
