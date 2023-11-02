<?php
/*
    Template Name: Самооценка, страница для служб
    Template Post Type: post, page, product
*/

get_header(null, array(
    'header_color_class' => 'main-header--white'
));

include('widgets/breadcrumbs.php');

?>

<?php
if (post_password_required()) {
    // Страница защищена паролем
    echo 'Эта страница защищена паролем. Введите пароль для доступа.';
    echo get_the_password_form(); // Выводим форму ввода пароля
} else {
    // Ваш код для отображения содержания страницы
    while (have_posts()) : the_post();
        the_title('<h1>', '</h1>');
        the_content();
    endwhile;
}
?>

<?

get_footer();

?>