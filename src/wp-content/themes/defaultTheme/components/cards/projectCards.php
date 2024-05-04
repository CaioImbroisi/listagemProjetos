<?php 
/* Template Name: projectCards */ 
$banner = get_field('banner');
$description = get_field('breve_descricao');
$post_categories = get_the_category();
$category_name = !empty($post_categories) ? esc_html($post_categories[0]->name) : 'Sem categoria';
?>
<div class="cardBox">
    <div class="cards">
        <a href="<?php the_permalink(); ?>">
        <div class="mainContent">
            <div class="wrapper">
                <div> 
                    <img class="card-image" src="<?= $banner?>">
                </div>
                <h1><?= get_the_title() ?></h1>
                <span>(<?=$category_name?>)</span>
                <p><?= $description?></p>
            </div>
        </div>
        </a>
    </div>
</div>
