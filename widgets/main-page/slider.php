<?php $slider = get_field('slider'); ?>

<section class="section slider slider--dark slider__main">
    <div class="container">
    <div class="slider__container slider__container--flow">
        <div class="slider__icons">
        <div class="slider__icon">
            <img src="<?= content_url() ?>/uploads/2022/08/slider__1.svg" alt="">
        </div>
        <div class="slider__icon">
            <img src="<?= content_url() ?>/uploads/2022/08/slider__2.svg" alt="">
        </div>
        <div class="slider__icon">
            <img src="<?= content_url() ?>/uploads/2022/08/slider__3.svg" alt="">
        </div>
        <div class="slider__icon">
            <img src="<?= content_url() ?>/uploads/2022/08/slider__4.svg" alt="">
        </div>
        <div class="slider__icon">
            <img src="<?= content_url() ?>/uploads/2022/08/slider__5.svg" alt="">
        </div>
        <div class="slider__icon">
            <img src="<?= content_url() ?>/uploads/2022/08/slider__6.svg" alt="">
        </div>
        <div class="slider__icon">
            <img src="<?= content_url() ?>/uploads/2022/08/slider__7.svg" alt="">
        </div>
        </div>
        <div class="slider__main-title">
            <?= $slider['zagolok'] ?>
        </div>
        <a href="<?= $slider['video'] ?>" data-fslightbox="first-lightbox" class="slider__video">
            <span class="icon">
                <img 
                    src="<?= content_url() ?>/uploads/2022/08/play.svg" 
                    alt="<?= pll__('Смотреть ролик о школе') ?>"
                >
            </span>
            <span class="text"><?= pll__('Смотреть ролик о школе') ?></span>
        </a>
    </div>
    </div>
</section>