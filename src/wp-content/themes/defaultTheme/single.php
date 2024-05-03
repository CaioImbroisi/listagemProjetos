<?php
/* 
Template Name: Detalhes Projeto 
Template Post Type: projeto
*/
include __DIR__ . '/../components/main/header.php';
$banner = get_field('banner');
$description = get_field('breve_descricao');
$conteudo = get_the_content();
?>
<div>
<h1><?= get_the_title() ?></h1>
<h3><?= $description ?></h3>
<p><?= $conteudo ?></p>
</div>
<?php
include __DIR__ . '/../components/main/footer.php';
?>

