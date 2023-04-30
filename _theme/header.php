<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon256.png" sizes="256x256">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon128.png" sizes="128x128">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon64.png" sizes="64x64">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon16.png" sizes="16x16">
    <link rel="icon" type="image/svg" href="<?php echo get_template_directory_uri();?>/img/favicons/fav.svg" sizes="any">

    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    <title><?php echo wp_get_document_title(); ?></title>

    <?php wp_head();?>
</head>

<?
    global $all_categories;
    $all_categories = get_categories( [
	    'taxonomy'     => 'category',
	    'type'         => 'post',
        'exclude' => 1,
    ]);
?>

    <body>


        <?php get_template_part('template-parts/modal-win');?>
        <?php get_template_part('template-parts/city-select');?>
         
        <?php get_template_part('template-parts/mobile-menu');?>

        <?php get_template_part('template-parts/head');?>