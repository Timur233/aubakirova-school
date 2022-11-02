<?php $security = get_field('about_security'); ?>

<section id="security" class="section section__security security">
    <div class="container">
        <div class="section-title">
            <h2 class="section-title__h2">
                <?= $security['security_title'] ?>
            </h2>
        </div>

        <div class="flex security__desc">
            <div class="flex__7">
                <p>
                    <?= $security['security_desc'] ?>
                </p>
            </div>
        </div>
        
        <div class="security__grid">
            <?php 
                for ($i = 1; $i <= 12; $i++) {
                    $text = $security['security_item_' . $i];
                    
                    if (!$text): continue; endif;

                    echo <<< SECURITY
                        <div class="security__item">
                            <img 
                                src="{$security['security_icon']}" 
                                alt="{}" 
                                class="security__icon">
                            <p>{$text}</p>
                        </div>
                    SECURITY;
                }
            ?>
        </div>
    </div>
</section>
