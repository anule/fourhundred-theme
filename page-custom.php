<?php get_header(); ?>
<div class="row">
  <div class="col-sm-12">
  <?php
  $args = array(
    'post_type' => 'staff',
    'orderby' => 'menu_order',
    'order' => 'ASC',
  );
  $custom_query = new WP_Query($args);
  while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

  <div>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
  </div>
<?php endwhile; ?>
  </div>
</div>
<?php get_footer(); ?>
