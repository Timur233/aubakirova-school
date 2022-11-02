<?php

get_header(null, array(
    'header_color_class' => 'main-header--white'
));

include('widgets/breadcrumbs.php');

?>

<section class="section section-news section--gray">
    <div class="container">
        <div class="news__grid">
            <?php 
            
                if(have_posts()) : 
                    while(have_posts()) : 
                        the_post();
                        $title = get_the_title();
                        $post_id = get_the_ID();
                        $image_src = get_the_post_thumbnail_url($post_id, 'medium');
                        $image = !empty($image_src) ? get_the_post_thumbnail_url($post_id, 'medium') : 
                            get_template_directory_uri() . '/assets/img/placeholder-news.jpg';
                        $post_link = get_permalink($post_id);
                        
                        echo <<< NEWS
                            <div class="news__item news-item">
                                <a href="{$post_link}" class="news-item__link">
                                    <img src="{$image}" alt="" class="news-item__img">
                                    <h3 class="news-item__title">
                                        {$title}
                                    </h3>
                                </a>
                            </div>
                        NEWS;
                    endwhile;
                endif;

            ?>

        </div>

        <?php if (paginate_links()): ?>
            <div class="pagination news__pagination">
                <?php 

                    $links = paginate_links( array(
                        'mid_size'  => 3,
                        'prev_text' => __( '&laquo; Назад', 'textdomain' ),
                        'next_text' => __( 'Вперед &raquo;', 'textdomain' ),
                    ) );

                    $links = str_replace(
                        'page-numbers', 
                        'pagination__item btn btn--outline', 
                        $links
                    );

                    $links = str_replace(
                        'current', 
                        'btn--active', 
                        $links
                    );

                    echo $links;
                    
                ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php

get_footer();