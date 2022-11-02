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
        </div>
    </section>

<?php
    endif;
?>