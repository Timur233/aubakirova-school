<?php
/*
    Template Name: Главная страница
    Template Post Type: post, page, product
*/

get_header(null, array(
    'header_color_class' => 'main-header--white'
));

include('widgets/main-page/slider.php');

include('widgets/main-page/about_author.php');

include('widgets/main-page/about_liader.php');

include('widgets/main-page/news.php');

include('widgets/main-page/sections.php');

include('widgets/main-page/faq_admission.php');

get_footer();

?>