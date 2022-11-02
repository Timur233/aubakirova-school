<?php $price = get_field('admission_about_price'); ?>

<section class="section section-in-price in-price">
  <div class="container">
    <div class="section-title">
      <h2 class="section-title__h2">
        <?= $price['about_price_title'] ?>
      </h2>
    </div>
    <div class="flex in-price__flex">
      <?php 
        for ($i = 1; $i <= 4; $i++) {
            $icon = $price['about_price_icon_' . $i];
            $desc = $price['about_price_desc_' . $i];

            echo <<< PRICE
                <div class="flex__6 in-price__item price-item">
                <img src="{$icon}" alt="" class="price-item__icon">
                <p>{$desc}</p>
                </div>
            PRICE;
        }
      ?>
    </div>
    <div class="in-price__anotation">
      <img src="<?= get_template_directory_uri() ?>/assets/img/icons/anotation-star.svg">
      <?= $price['about_price_ps'] ?>
    </div>
  </div>
</section>