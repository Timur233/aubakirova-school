<footer class="main-footer">
    <div class="container">
        <div class="flex main-footer_flex">
            <div class="flex__7 footer-contacts">
                <div class="footer-contacts__logo">
                    <?php the_custom_logo() ?>
                </div>
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

<script src="<?= get_template_directory_uri() ?>/assets/dist/js/app.bandle.js?v=9"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/fslightbox.js"></script>

<?php 
    if ($args['has_share_links']): 
        echo '<script src="https://yastatic.net/share2/share.js"></script>';
    endif;
?>

</body>
</html>