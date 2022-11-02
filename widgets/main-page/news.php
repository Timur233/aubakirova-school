<?php 
    if (!$news_color_class): $news_color_class = ''; endif; 

    $news_instance = new WP_Query;
    $news = $news_instance->query(array(
        'post_type' => 'news',
        'posts_per_page' => 12,
    ));

    if (count($news) > 0):
?>

    <section class="section section-news news <?= $news_color_class ?>">
        <div class="container">
            <div class="section-title">
                <h2 class="section-title__h2">
                    <?= pll__('Новости') ?>
                </h2>
            </div>
            <div class="news__swiper-block">
                <div class="news-swiper news__swiper swiper">
                    <div class="swiper-wrapper">
                        <?php 
                            foreach($news as $item){
                                $title = get_the_title($item->ID);
                                $link = get_permalink($item->ID);
                                $image = get_the_post_thumbnail_url($item->ID, 'middle');

                                echo <<< NEWS
                                    <div class="swiper-slide news-swiper__slide">
                                        <a href="{$link}" class="news-swiper__link">
                                            <img 
                                                class="news-swiper__img"
                                                src="{$image}"
                                                alt="{$title}"
                                            >
                                            <h3 class="news-swiper__title">
                                                {$title}
                                            </h3>
                                        </a>
                                    </div>
                                NEWS;
                            }
                        ?>
                    </div>
                </div>
                <div class="swiper-button-next news-swiper__button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.08 73.87">
                        <g data-name="Слой 2">
                            <path 
                                fill="none" 
                                stroke="#292929" 
                                stroke-miterlimit="22.93" 
                                stroke-width="3.03" 
                                d="M1.07 1.07l35.86 35.86L1.07 72.79" 
                                data-name="Слой 1"
                            />
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </section>
<?php
    endif;
?>