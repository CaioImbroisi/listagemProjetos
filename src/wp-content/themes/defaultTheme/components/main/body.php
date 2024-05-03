<div class="mainContent">
<?php
$args = array(
  'post_type' => 'projeto',
  'posts_per_page' => 5,
  'orderby' => 'date',
  'order' => 'DESC',
);

$projeto_query = new WP_Query($args);
?>

  <?php
  if ($projeto_query->have_posts()) :
    while ($projeto_query->have_posts()) : $projeto_query->the_post(); ?>
      <?php
        get_template_part("components/cards/projectCards");
      ?>
      </div>
  <?php
    endwhile;
    wp_reset_postdata();
  endif;
?>
</div>