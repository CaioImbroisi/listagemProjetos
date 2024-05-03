<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    <title><?php wp_title();?></title>
</head>
<body>
<header>
<?php
wp_nav_menu(array(
    'theme_location' => 'primary',
    'container'      => 'nav',
    'container_class'=> 'navbar',
    'menu_class'     => 'navbar-menu',
));
?>
</header>
