<?php $content = get_field('about_content'); ?>

<section id="about" class="section about">
    <div class="container">
        <div class="flex about__block">
            <div class="flex__6 about__item about-item">
                <h3 class="about-item__title"><?= $content['content_left_title'] ?></h3>
                <div class="about-item__content">
                    <?= $content['content_left_desc'] ?>
                </div>
            </div>
            <div class="flex__6 about__item about-item">
                <h3 class="about-item__title"><?= $content['content_right_title'] ?></h3>
                <div class="about-item__content">
                    <?= $content['content_right_desc'] ?>
                </div>
            </div>
        </div>
    </div>
</section>