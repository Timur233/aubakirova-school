<section class="section section-faq faq">
    <div class="container">
        <div class="faq__accordion">
            <?php 
                $faq_instance = new WP_Query;

                $faq = $faq_instance->query(array(
                    'post_type'      => 'faq',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field'    => 'slug',
                            'terms'    => ['admission', 'admission-kz']
                        )
                    )
                ));

                foreach($faq as $item){
                    $title = get_the_title($item->ID);
                    $content = $item->post_content;
                    $themplate_dir = get_template_directory_uri();

                    echo <<< QUESTON
                        <div class="faq__item">
                            <h3 class="faq__title">
                                {$title}
                                <button class="faq__icon">
                                    <img src="{$themplate_dir}/assets/img/icons/arrow.9b0bb23e.svg" alt="">
                                </button>
                            </h3>
                            <div class="faq__body">
                                <div class="faq__content">
                                    {$content}
                                </div>
                            </div>
                        </div>
                        QUESTON;
                }
            ?>
        </div>
    </div>
</section>