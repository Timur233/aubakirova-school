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

    <section class="section section-news section--gray files-page">
        <div class="container">
        <?php
        if (post_password_required()) {
            echo '<div class="section-title" style="margin-bottom: 22px">
                    <h2 class="section-title__h2 section-title__h2--bold">Вход</h2>
                </div>
                <p>Эта страница защищена паролем. <br> Введите пароль для доступа.</p>
                <form class="flex" style="gap: 12px" action="' . esc_url(site_url('wp-login.php?action=postpass', 'login_post')) . '" method="post">
                <div class="flex__3 input-group">
                    <input name="post_password" id="password" type="password" placeholder="Пароль" class="input-group__input">
                </div>
                <div class="flex__2 input-group">
                    <button type="submit" class="btn btn--outline callback__button" name="Submit">Войти</button>
                </div>
                </form>';
        } else {
            // Ваш код для отображения содержания страницы
            while (have_posts()) : the_post();
                the_title('<h1>', '</h1>');
                the_content();
            endwhile;
        }
        ?>
        </div>
    </section>



<?

get_footer();

?>