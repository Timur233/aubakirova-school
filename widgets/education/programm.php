<?php $about = get_field('education_about'); ?>

<section id="programm" class="section section-programm programm">
    <div class="container">
        <div class="programm__content">
            <h3 class="programm__title">
                <?= $about['about_title'] ?>
            </h3>
            <div class="flex programm__first-block">
                <div class="flex__5">
                    <?= $about['about_desc_1'] ?>
                </div>
                <div class="flex__7">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/programm__1.svg" class="programm__ball">
                </div>
            </div>
            <div class="flex programm__second-block">
                <div class="flex__6">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/programm__2.svg" class="programm__shool">
                </div>
                <div class="flex__4">
                    <?= $about['about_desc_2'] ?>
                </div>
            </div>
        </div>
    </div>
</section>