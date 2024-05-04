<?php
/* Template Name: Projetos */
include __DIR__ . '/../components/main/header.php';
?>
<div class="projectsContainer">
<div class="filter">
<form id="category-filter">
<span>Filtrar por categorias: </span>
    <select name="category">
        <option value="">Todas as categorias</option>
        <?php
        $categories = get_terms(array(
            'taxonomy' => 'category',
            'hide_empty' => false,
        ));
        foreach ($categories as $category) {
            echo '<option value="' . $category->term_id . '">' . $category->name . '</option>';
  }?>
    </select>
    <input type="submit" value="Filtrar">
</form>
</div>
<main class="container">
<?php
$args = array(
  'post_type' => 'projeto',
  'posts_per_page' => 6,
  'orderby' => 'date',
  'order' => 'DESC',
);
$category_id = isset($_GET['category']) ? $_GET['category'] : '';
if (!empty($category_id)) {
    $args['category__in'] = array($category_id);
}
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
  else:
      echo '<p>Não foram encontrados posts.</p>';
  endif;
?>
</main>
</div>
<?php
include __DIR__ . '/../components/main/footer.php';
?>
<script>
    (function($) {
        $('#category-filter').on('change', function() {
            var categoryID = $(this).val();
            if (categoryID) {
                window.location.href = '<?php echo esc_url(home_url('/')); ?>?cat=' + categoryID;
            } else {
                window.location.href = '<?php echo esc_url(home_url('/')); ?>';
            }
        });
    })(jQuery);
</script>