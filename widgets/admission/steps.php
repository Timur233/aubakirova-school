<?php $steps = get_field('admission_steps'); ?>

<section id="steps" class="section section--gray section-steps steps">
    <div class="container">
        <div class="section-title">
            <h2 class="section-title__h2">
                <?= $steps['steps_title'] ?>
            </h2>
        </div>

        <div class="steps__grid">
            <?php 
                for ($i = 1; $i <= 3; $i++) {
                    $icon = $steps['steps_icon_' . $i];
                    $title = $steps['steps_title_' . $i];
                    $text = $steps['steps_desc_' . $i];
                    
                    if (!($text && $icon && $title)): continue; endif;

                    echo <<< SECURITY
                        <div class="steps__item">
                            <img src="{$icon}" alt="" class="steps__icon">
                            <h3 class="steps__title">
                                {$title}
                            </h3>
                            <div class="steps__content">
                                <p>
                                    {$text}
                                </p>
                            </div>
                        </div>
                    SECURITY;
                }
            ?>
        </div>
    </div>
</section>