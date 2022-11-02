<?php $price = get_field('admission_price'); ?>

<section id="price" class="section section--gray section-price price">
  <div class="container">
    <h3 class="price__title">
      <?= $price['price_title'] ?>
    </h3>
  </div>
</section>