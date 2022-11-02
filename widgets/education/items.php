<?php $items = get_field('education_items'); ?>

<section id="more" class="section section-more more">
    <div class="container">
        <h2 class="more__title">
            <?= $items['items_title'] ?>
        </h2>
        <div class="more__grid">
            <?php 
                for ($i = 1; $i <= 6; $i++) {
                    $icon = $items['items_icon_' . $i];
                    $text = $items['items_text_' . $i];
                    
                    if (!($text && $icon)): continue; endif;

                    echo <<< SECURITY
                        <div class="more__item">
                            <img src="{$icon}" alt="" class="more__icon">
                            <div class="more__contetn">
                                {$text}
                            </div>
                        </div>
                    SECURITY;
                }
            ?>
        </div>
    </div>
</section>

