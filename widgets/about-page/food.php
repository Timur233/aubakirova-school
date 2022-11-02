<?php $food = get_field('about_food'); ?>

<section id="food" class="section section-food section--gray food">
    <div class="container">
        <div class="section-title">
            <h2 class="section-title__h2">
                <?= $food['food_title'] ?>
            </h2>
        </div>

        <div class="flex food__flex">
            <div class="flex__8">

            <?= $food['food_desc'] ?>

            <a href="<?= $food['food_file'] ?>" target="_blank">
                <?= pll__('Посмотреть меню') ?>
            </a>
            </div>
            <div class="flex__4">
            <img src="<?= $food['food_image'] ?>" alt="<?= $food['food_title'] ?>">
            </div>
        </div>
    </div>
</section>