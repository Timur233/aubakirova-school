<?php
/*
    Template Name: О школе
    Template Post Type: post, page, product
*/

get_header();

include('widgets/about-page/slider.php');

include('widgets/about-page/content.php');

include('widgets/about-page/mission.php');

include('widgets/about-page/values.php');

$news_color_class = 'section--gray';

include('widgets/main-page/news.php');

include('widgets/about-page/team.php');

include('widgets/about-page/food.php');

include('widgets/about-page/security.php');

include('widgets/about-page/presentation.php');

include('widgets/callback_form.php');

get_footer();

?>