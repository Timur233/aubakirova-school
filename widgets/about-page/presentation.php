<?php $presentation = get_field('about_presentation'); ?>

<?php if ($presentation['presentation_active']): ?>
    <section id="presentation" class="section section-presentation presentation section--gray">
      <div class="container">
        <div class="section-title">
          <h2 class="section-title__h2">
            <?= $presentation['presentation_title'] ?>
          </h2>
        </div>

        <iframe src="<?= $presentation['presentation_file'] ?>" width="100%" height="600"></iframe>
        
        <a href="<?= $presentation['presentation_file'] ?>" target="_blank" class="btn presentation__btn">
          <?= pll__('Презентация о школе') ?>
        </a>
      </div>
    </section>
<?php endif; ?>
