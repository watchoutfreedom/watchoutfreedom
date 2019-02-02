<article class="post-resume <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>">
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-resume__link">
    <?php the_post_thumbnail('large', array( 'class' => 'no-lazy' )); ?>
    <div class="post-resume__content">
      <div class="post-resume__category">
        <?php get_template_part('modules/atoms/category-link'); ?>
      </div>
        <h2 class="post-resume__title">
            <?php the_title(); ?>
        </h2>     
    </div>
  </a>
</article>