<section id="callback" class="section section-callback callback">
  <div class="container">
    <div class="section-title">
      <h2 class="section-title__h2 section-title__h2--bold">
        <?= pll__('Cвязаться с нами') ?>
      </h2>
    </div>
    <p>
      <?= pll__('Оставьте заявку, мы с Вами свяжемся в ближайшее время!') ?>
    </p>
    <div 
      class="callback__form flex"
      data-action="<?= get_site_url() ?>/wp-json/callback/v1/form"
      data-succes-msg="<?= pll__('Ваша заявка успешно отправлена!') ?>" 
      data-error-msg="<?= pll__('Произошла ошибка. Попробуйте снова') ?>"
    >
      <div class="flex__5 input-group">
        <input type="text" name="user_name" class="input-group__input" placeholder="<?= pll__('Ваше имя') ?>">
      </div>
      <div class="flex__5 input-group">
        <input type="text" name="user_phone" class="input-group__input" placeholder="<?= pll__('Ваш телефон') ?>">
      </div>
      <div class="flex__2">
        <button class="btn btn--outline callback__button">
          <?= pll__('Отправить') ?>
        </button>
      </div>
    </div>
  </div>
</section>