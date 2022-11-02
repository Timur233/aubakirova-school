<?php 
    $slider = get_field('slider'); 
    $slider_per_view = get_field('sliderPerView');
    $slides = [];
    $enable = false;

    for ($i=1; $i < 20; $i++) { 
        if ($slider['img_' . $i]): 
            array_push($slides, $slider['img_' . $i]);
            
            $enable = true;
        endif;
    }

    if (!$enable): return; endif;
?>
    <div class="single-news-swiper__block">
        <div 
            class="single-news-swiper news-article__swiper swiper" 
            data-slides-per-view="<?= $slider_per_view ?>"
        >
            <div class="swiper-wrapper">
                <?php 
                    $title = get_the_title();
                    
                    foreach($slides as $image){
                        echo <<< NEWS
                            <div class="swiper-slide single-news-swiper__slide">
                                <a href="{$image}" class="single-news-swiper__link"
                                data-fslightbox="first-lightbox">
                                    <img 
                                        class="single-news-swiper__img"
                                        src="{$image}"
                                        alt="{$title}"
                                    >
                                </a>
                            </div>
                        NEWS;
                    }
                ?>
            </div>
        </div>
        <div class="swiper-button-next single-news-swiper__button-next">
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