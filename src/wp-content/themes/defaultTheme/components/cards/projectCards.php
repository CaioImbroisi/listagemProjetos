<?php 
/* Template Name: projectCards */ 
$banner = get_field('banner');
$description = get_field('breve_descricao');
?>
<div class="mainContent">
    <a href="<?php the_permalink(); ?>">
    <div class="cards">
        <div class="container">
            <div class="wrapper">
                <div> 
                    <img class="card-image" src="<?= $banner?>">
                </div>
                <h1><?= get_the_title() ?></h1>
                <p><?= $description?></p>
            </div>
        </div>
    </div>
    </a>
</div>