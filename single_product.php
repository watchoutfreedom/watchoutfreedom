<?php get_header(); ?>    

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="product">
    <div class="product__head">
      <div class="product__thumb">
        <picture class="hero__thumb picture">
          <source media="(max-width: 768px)" srcset="<?php the_post_thumbnail_url( 'thumbnail-medium' );?>">
          <source media="(max-width: 1024px)" srcset="<?php the_post_thumbnail_url( 'thumbnail-xxlarge' );?>">
          <img data-object-fit="cover" class="picture__img" alt="text" src="<?php the_post_thumbnail_url( 'thumbnail-xxlarge' );?>"/>
        </picture>
      </div>
      <div class="product__info">
        <h1 class="product__title">
          <?php the_title(); ?>
        </h1>
        <div class="product__price">
          $42,00
        </div>
        <div class="product__description">
          Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.
        </div>
        <a href="" class="product__link">
          Comprar ahora
        </a>
        <div class="product__security">
          Compra segura a través de Paypal
        </div>
      </div>
    </div>
    <div class="product__wrap">

      <div class="product__list-of-boxes">
        <div class="product__box">
          <h2 class="product__subtitle">
            Title info 1
          </h2>
          <div class="product__info-box">
            El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal
          </div>
        </div>
        <div class="product__box">
          <h2 class="product__subtitle">
            Title info 2
          </h2>
          <div class="product__info-box">
            El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal
          </div>
        </div>
        <div class="product__box">
          <h2 class="product__subtitle">
            Title info 3
          </h2>
          <div class="product__info-box">
            El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal
          </div>
        </div>
      </div>
    </div>
    <div class="product__content">
      <?php the_content("Sigue leyendo"); ?>
    </div>
  <?php endwhile; else: ?>
  <?php include (TEMPLATEPATH . '/404.php'); ?>
<?php endif; ?>
</article>

<?php get_footer(); ?>