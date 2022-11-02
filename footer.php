<footer class="main-footer">
    <div class="container">
        <h2 class="main-footer__title">
            <?= bloginfo( 'name' ) ?>
        </h2>
        <div class="flex main-footer_flex">
            <div class="flex__7 footer-contacts">
                <?= pll__('Контакты:') ?>
                <?php if (get_theme_mod('adres_one')):?>
                    <span class="footer-contacts__item">
                        <?= pll__('Адрес:') ?>
                        <?php 
                            if (get_locale() === 'ru_RU'):
                                echo get_theme_mod('adres_one');
                            else:
                                echo get_theme_mod('adres_two');
                            endif; 
                        ?>
                    </span>
                <?php endif; ?>
                <?php if (get_theme_mod('phone_one')):?>
                    <a href="tel:<?= get_theme_mod('phone_one')?>" class="footer-contacts__item">
                        <?= get_theme_mod('phone_one')?> 
                    </a>
                <?php endif; ?>
                <?php if (get_theme_mod('phone_two')):?>    
                    <a href="tel:<?= get_theme_mod('phone_two')?>" class="footer-contacts__item">
                        <?= get_theme_mod('phone_two')?>
                    </a>
                <?php endif; ?>
                <?php if (get_theme_mod('phone_three')):?>    
                    <a href="tel:+7727<?= get_theme_mod('phone_three')?>" class="footer-contacts__item">
                        <?= get_locale() === 'ru_RU' ? 'городской' : 'телефон:' ?> <?= get_theme_mod('phone_three')?>
                    </a>
                <?php endif; ?>
                </div>

            <div class="flex__5 footer-social">
            <?php if (get_theme_mod('insta_link')):?>
                <a href="https://www.instagram.com/<?= get_theme_mod('insta_link')?>" target="_blank" class="footer-social__item">
                    <span class="footer-social__icon">
                    <img src="<?= get_site_url() ?>/wp-content/uploads/2022/08/insta-i.svg">
                    </span>
                    <?= get_theme_mod('insta_link')?> 
                </a>
            <?php endif; ?>
            <?php if (get_theme_mod('face_link')):?>
                <a href="https://www.facebook.com/<?= get_theme_mod('face_link')?>" target="_blank" class="footer-social__item">
                    <span class="footer-social__icon">
                    <img src="<?= get_site_url() ?>/wp-content/uploads/2022/08/face-i.svg">
                    </span>
                    <?= get_theme_mod('face_link')?>
                </a>
            <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script src="<?= get_template_directory_uri() ?>/assets/dist/js/app.bandle.js?v=6"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/fslightbox.js"></script>

<?php 
    if ($args['has_share_links']): 
        echo '<script src="https://yastatic.net/share2/share.js"></script>';
    endif;
?>

</body>
</html>