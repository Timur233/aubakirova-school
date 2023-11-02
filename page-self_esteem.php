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
                $folder = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/uploads/self-esteem';
                $files_html = '';
        
                if (is_dir($folder)) {
                    $files_html = '';
                    $files = scandir($folder);
                    $files = array_diff($files, array('..', '.')); 
        
                    echo '<div class="file-list flex">';

                    foreach ($files as $file) {
                        $fileInfo = pathinfo($file);
                        $fileExtension = $fileInfo['extension'];

                        echo <<<HTML
                        <div class="flex__4">
                            <div class="file-list__item">
                                <span title="$file">$file</span>
                                <a href="https://school.aubakirova.kz/wp-content/uploads/self-esteem/$file" target="_blank">Просмотр</a>
                            </div>
                        </div>
                        HTML;
                    }

                    echo '</div>';
                }
            endwhile;
        }
        ?>
        <style>
            .file-list__item {
                padding: 20px;
                background: #ffe5ae;
                border: 1px solid #fabf40;
                border-radius: 4px;
                display: flex;
                flex-direction: column;
                font-weight: 500;
            }

            .file-list__item > a {
                font-weight: 200;
                color: blue;
                text-decoration: underline;
                margin-top: 4px;
            }

            .file-list__item > span {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .file-list .flex__4 {
                padding-right: 12px;
            }
        </style>
        </div>
    </section>



<?

get_footer();

?>