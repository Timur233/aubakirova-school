<?php
/*
    Template Name: Summer Cump (Лагерь)
    Template Post Type: post, page, product
*/

get_header(null, array(
    'header_color_class' => 'main-header--white'
));

include('widgets/breadcrumbs.php');

?>

<?php $description = get_field('decription'); ?>

<section id="summer-cump" class="section summer-cump">
    <div class="container">
        <div class="flex summer-cump__block" style="align-items: center">
            <div class="flex__6 summer-cump__item summer-cump__item--left cump-item">
                <h3 class="cump-page__title"><?= $description['cump_title'] ?></h3>
                <div class="cump-item__content"><?= $description['cump_description'] ?></div>
            </div>
            <div class="flex__6 summer-cump__item summer-cump__item--right">
                <iframe class="summer-cump__video" src="<?= $description['cump_video'] ?>"
                    title="YouTube video player" frameborder="0" allow="
                        accelerometer; 
                        autoplay; 
                        clipboard-write; 
                        encrypted-media; 
                        gyroscope; 
                        picture-in-picture; 
                        web-share
                    " allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</section>

<?php $summary = get_field('cump_summary'); ?>

<section id="included" class="section section-included section--gray included">
    <div class="container">
        <div class="flex included__flex">
            <div class="flex__12 included__content" style="text-align: center">
                <h2 class="cump-page__title"><?= $summary['title'] ?></h2>
                <br>
                <div class="flex">
                    <?php for ($i = 1; $i <= 8; $i++) { 
                        $item = $summary['summary_item_' . $i];

                        if ($item['summary_image'] <> '') {
                            echo <<< SUMMARY
                                <div class="flex__3 included-benefit">
                                    <img src="{$item['summary_image']}" alt="{$item['summary_title']}">
                                    <span class="included-benefit__title">{$item['summary_title']}</span>
                                </div>
                            SUMMARY;
                        }
                    } ?>
                </div>
                <button class="btn amo-form__buttom"><?= pll__('Оставить заявку') ?></button>
            </div>
        </div>
    </div>
</section>

<?php $gallery = get_field('cump_gallery'); ?>

<section id="gallery-cump" class="section gallery-cump">
    <div class="container">
        <h2 class="cump-page__title"><?= $gallery['title'] ?></h2>
        <br>
        <div class="cump-gallery__block">
            <div class="cump-gallery swiper">
                <div class="swiper-wrapper">
                    <?php 
                        $list = $gallery['gallery'];

                        for ($i = 1; $i <= 20; $i++) {
                            if ($list['gallery_' . $i] <> '') {
                                echo <<< GALLERY
                                    <div class="swiper-slide">
                                        <img 
                                            class="cump-gallery__img" 
                                            src="{$list['gallery_' . $i]}"
                                        >
                                    </div>
                                GALLERY;
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="cump-gallery__button cump-gallery__button--prev">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.08 73.87">
                    <g data-name="Слой 2">
                        <path fill="none" stroke="#333" stroke-miterlimit="22.93" stroke-width="4"
                            d="M1.07 1.07l35.86 35.86L1.07 72.79" />
                    </g>
                </svg>
            </div>
            <div class="cump-gallery__button cump-gallery__button--next">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.08 73.87">
                    <g data-name="Слой 2">
                        <path fill="none" stroke="#333" stroke-miterlimit="22.93" stroke-width="4"
                            d="M1.07 1.07l35.86 35.86L1.07 72.79" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="cump-gallery__desc"><?= $gallery['desc'] ?></div>
</section>

<?php $team = get_field('cump_team'); ?>

<section id="cump-team" class="section section-cump-team section--gray cump-team">
    <div class="container">
        <h2 class="cump-page__title"><?= $team['title'] ?></h2>
        <br>
        <div class="flex cump-team__flex">
            <?php 
                for ($i = 1; $i <= 8; $i++) { 
                    $employ = $team['employ_' . $i];

                    if ($employ['photo'] <> '') {
                        echo <<< EMPLOY
                            <div class="flex__3 cump-team__counselor counselor">
                                <img class="counselor__img" src="{$employ['photo']}" alt="{$employ['name']}">
                                <span class="counselor__title">{$employ['name']}</span>
                                <div class="counselor__desc">{$employ['info']}</div>
                            </div>
                        EMPLOY;
                    }
                }
            ?>
        </div>
    </div>
</section>

<?php $programm = get_field('cump_programm'); ?>

<section id="cump-programm" class="section section-cump-programm cump-programm">
    <div class="container">
        <h2 class="cump-page__title"><?= $programm['title'] ?></h2>
        <br>
        <div class="flex">
            <?php
                for ($i = 1; $i <= 10; $i++) { 
                    $item = $programm['item_' . $i];

                    echo <<< ITEM
                        <div class="flex__4 cump-programm__item cump-programm-item">
                            <img 
                                class="cump-programm-item__img" 
                                src="{$item['icon']}" 
                                alt="{$item['title']}"
                            >
                            <span class="cump-programm-item__title">{$item['title']}</span>
                        </div>
                    ITEM;
                }
            ?>
        </div>
    </div>
</section>

<?php $total = get_field('cump_total'); ?>

<section id="cump-price" class="section section-cump-price section--gray cump-price">
    <div class="container">
        <h2 class="cump-page__title cump-price__title"><?= $total['title'] ?></h2>
        <div class="cump-price__content">
            <?= $total['desc'] ?>
            <p class="cump-price__price" ><?= $total['price'] ?></p>
            <div class="cump-price__callback">
                <button class="btn cump-price__callback-button amo-form__buttom"><?= pll__('Оставить заявку') ?></button>
                <?php if ($total['info'] <> '') { ?>
                        <a class="cump-price__docs-link" href="{$total['info']}">Юридическая информация</a> 
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</section>

<div class="amo-modal" style="">
    <div class="amo-modal__content">
        <script>!function(a,m,o,c,r,m){a[o+c]=a[o+c]||{setMeta:function(p){this.params=(this.params||[]).concat([p])}},a[o+r]=a[o+r]||function(f){a[o+r].f=(a[o+r].f||[]).concat([f])},a[o+r]({id:"1139614",hash:"2a7b326221c0624a8e03ca9f8b9d3f4b",locale:"ru"}),a[o+m]=a[o+m]||function(f,k){a[o+m].f=(a[o+m].f||[]).concat([[f,k]])}}(window,0,"amo_forms_","params","load","loaded");</script>
        <script id="amoforms_script_1139614" async="async" charset="utf-8" src="https://forms.amocrm.ru/forms/assets/js/amoforms.js?1684750187"></script>
    
        <button class="modal__btn-close amo-modal__btn-close">
            <svg role="presentation" class="modal__icon-close" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> 
                <g stroke="none" stroke-width="1" fill="#000000" fill-rule="evenodd"> 
                    <rect transform="
                            translate(11.313708, 11.313708) 
                            rotate(-45.000000) 
                            translate(-11.313708, -11.313708) 
                        " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> 
                    <rect transform="
                            translate(11.313708, 11.313708) 
                            rotate(-315.000000) 
                            translate(-11.313708, -11.313708) 
                        " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> 
                </g> 
            </svg>
        </button>
    </div>
</div>

<?

get_footer();

?>