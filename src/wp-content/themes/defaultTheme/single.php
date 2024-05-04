<?php
   /* 
   Template Name: Detalhes Projeto 
   Template Post Type: projeto
   */
   include __DIR__ . '/components/main/header.php';
   $banner = get_field('banner');
   $description = get_field('breve_descricao');
   $conteudo = get_the_content();
   $post_date = get_the_date();
   $project_url = get_field('project_url');
   $post_categories = get_the_category();
   $category_name = !empty($post_categories) ? esc_html($post_categories[0]->name) : 'Sem categoria';
   ?>
<div class="singleContainer">
   <div class="wrapper">
      <img class="singleImage" src="<?= $banner?>">
   </div>
   <a target="_blank" href="<?=$project_url?>">
   <button class="viewProjectBtn"> 
   Visualizar Projeto 
   </button>
   </a>
   <div class="content">
      <h1><?=get_the_title() . ' (' . $category_name . ') - ' . $post_date?></h1>
      <h3><?=$description?></h3>
      <?= $conteudo ?>
   </div>
</div>
<h3 class="related"> 
   Veja também: 
</h3>
<div class="container">
   <?php
      $args = array(
        'post_type' => 'projeto',
        'posts_per_page' => 3,
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
   <?php
      endwhile;
      wp_reset_postdata();
      endif;
      ?>
</div>
<?php
   include __DIR__ . '/components/main/footer.php';
?>
