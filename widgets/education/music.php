<?php $music = get_field('education_music'); ?>

<section id="music" class="section section-music section--gray music">
    <div class="container">
        <div class="flex music__flex">
            <div class="flex__8 music__content">
                <h2 class="music__title">
                    <?= $music['music_title'] ?>
                </h2>
                    <?= $music['music_desc'] ?>
            </div>
            <div class="flex__4">
                <img src="<?= $music['music_img'] ?>" alt="<?= $music['music_title'] ?>">
            </div>
        </div>
    </div>
</section>