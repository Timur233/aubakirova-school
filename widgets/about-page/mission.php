<?php $mission = get_field('about_mission'); ?>

<section id="mission" class="section section--gray mission">
      <div class="container">
        <div class="section-title">
          <h2 class="section-title__h2">
            <?= pll__('Наша миссия') ?> 
          </h2>
        </div>
        <div class="mission-content">
          <h2 class="mission-content__title">
            <?= $mission['mission_title'] ?>
          </h2>
          <div class="mission-content__text">
            <?= $mission['mission_desc'] ?>
          </div>
        </div>
        <div class="flex mission__flex">
          <div class="flex__5 mission__content mission-content">
            <h2 class="mission-content__title">
              <?= $mission['mission_title_1'] ?>
            </h2>
            <div class="mission-content__text">
              <?= $mission['mission_text_1'] ?>
            </div>
            <h2 class="mission-content__title">
              <?= $mission['mission_title_2'] ?>
            </h2>
            <div class="mission-content__text">
              <?= $mission['mission_text_2'] ?>
            </div>
            <h2 class="mission-content__title">
              <?= $mission['mission_title_3'] ?> 
            </h2>
            <div class="mission-content__text">
              <?= $mission['mission_text_3'] ?>
            </div>
            <h2 class="mission-content__title">
              <?= $mission['mission_title_4'] ?>
            </h2>
            <div class="mission-content__text">
              <?= $mission['mission_text_4'] ?>
            </div>
            <div class="mission-content__text">
                <?= $mission['mission_ps'] ?>
            </div>
          </div>
          <div class="flex__4 mission__images">
            <div class="mission__line"></div>
            <img src="<?= $mission['mission_img_1'] ?>" alt="<?= $mission['mission_title_1'] ?>">
            <img src="<?= $mission['mission_img_2'] ?>" alt="<?= $mission['mission_title_2'] ?>">
            <img src="<?= $mission['mission_img_3'] ?>" alt="<?= $mission['mission_title_3'] ?>">
            <img src="<?= $mission['mission_img_4'] ?>" alt="<?= $mission['mission_title_4'] ?>">
          </div>
        </div>
      </div>
    </section>