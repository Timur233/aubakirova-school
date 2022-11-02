<?php $values = get_field('about_values'); ?>

<section class="section section-values values">
    <div class="container">
        <div class="section-title">
            <h2 class="section-title__h2">
                <?= $values['values_title'] ?>
            </h2>
        </div>
        <div class="values__content">
            <p>
                <?= $values['values_desc'] ?>
            </p>

            <div class="values__grid">
            <div class="values__item values__item--left">
                <span class="values__number">
                    <i class="fa-solid fa-1"></i>
                </span>
                <p>
                    <?= $values['values_text_1'] ?>
                </p>
            </div>

            <div class="values__item values__item--center">
                <span class="values__number">
                    <i class="fa-solid fa-2"></i>
                </span>
                <p>
                    <?= $values['values_text_2'] ?>
                </p>
            </div>

            <div class="values__item values__item--right">
                <span class="values__number">
                    <i class="fa-solid fa-3"></i>
                </span>
                <p>
                    <?= $values['values_text_3'] ?>
                </p>
            </div>
        </div>
    </div>
    </div>
</section>