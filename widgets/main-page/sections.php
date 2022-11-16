<?php 
    $sections = get_field('sections'); 

    $sections_instance = new WP_Query;
    $sections_list = $sections_instance->query(array(
        'post_type' => 'sections',
        'posts_per_page' => -1,
    ));

    if (count($sections_list) > 0):
?>

    <section class="section section-lessons section--gray lessons">
        <div class="container">
            <div class="section-title">
                <h2 class="section-title__h2">
                    <?= $sections['sections_title'] ?>
                </h2>
            </div>
            <div class="lessons__content">
                <?= $sections['sections_desc'] ?>
            </div>
            <div class="lessons__swiper-block">
                <div class="lessons__swiper swiper">
                    <div class="swiper-wrapper">
                        <?php 
                            foreach($sections_list as $item){
                                $title = get_the_title($item->ID);
                                $image = get_the_post_thumbnail_url($item->ID, 'middle');

                                echo <<< SECTION
                                    <div class="swiper-slide">
                                        <img 
                                            src="{$image}"
                                            alt="{$title}"
                                            title="{$title}"
                                        >
                                    </div>
                                SECTION;
                            }
                        ?>
                    </div>
                </div>
                <div class="lessons__button lessons__button--prev">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.08 73.87">
                        <g data-name="Слой 2">
                            <path 
                                fill="none" 
                                stroke="#333" 
                                stroke-miterlimit="22.93" 
                                stroke-width="4" 
                                d="M1.07 1.07l35.86 35.86L1.07 72.79"
                            />
                        </g>
                    </svg>
                </div>
                <div class="lessons__button lessons__button--next">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.08 73.87">
                        <g data-name="Слой 2">
                            <path 
                                fill="none" 
                                stroke="#333" 
                                stroke-miterlimit="22.93" 
                                stroke-width="4" 
                                d="M1.07 1.07l35.86 35.86L1.07 72.79"
                            />
                        </g>
                    </svg>
                </div>
                <div class="lessons__scrollbar swiper-scrollbar"></div>
            </div>
        </div>
    </section>

<?php
    endif;
?>