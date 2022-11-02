<?php

get_header(null, array(
'header_color_class' => 'main-header--white'
));

include('widgets/breadcrumbs.php');

?>

    <section class="section section-news section--gray news-article">
        <div class="container-article">
            <div class="news-article__date">
                <i class="fa-solid fa-clock"></i> <?= get_the_date() ?>
            </div>

            <?php include("widgets/news_slider.php"); ?>
            
            <?= the_content() ?>

            <div class="news-article__share">
                <span>Поделиться:</span>
                <div 
                    class="ya-share2" 
                    data-curtain 
                    data-limit="3" 
                    data-services="vkontakte,telegram,twitter,whatsapp"
                ></div>
            </div>

        </div>
    </section>

<?php

get_footer(null, array(
    'has_share_links' => true
));

?>