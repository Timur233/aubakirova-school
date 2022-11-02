<?php $slider = get_field('admission_slider'); ?>

<section class="section slider slider__admission">
    <div class="container">
        <div class="slider__container">
            <div 
                class="slider__el"
                style="
                    width: 600px;
                    height: 600px;
                    top: 10%;
                    left: 6%;
                "
            >
                <object type="image/svg+xml" data="<?php echo get_template_directory_uri() ?>/assets/img/ellipse-anim.svg"></object>
            </div>
            <div 
            class="slider__el"
            style="
                background-image: url(<?= $slider['slider_img_1'] ?>); 
                width: 480px; 
                height: 320px;
                left: 0%;
                top: 2%;
            "
            ></div>
            <div 
            class="slider__el"
            style="
                background-image: url(<?= $slider['slider_img_2'] ?>); 
                width: 265px; 
                height: 210px;
                left: 33%;
                top: 63%;
            "
            ></div>
            <div 
            class="slider__el slider__el--text"
            style="
                color: #333;
                margin-left: auto;
                padding: 0 80px  0;
                text-align: right
            "  
            >
            <?= $slider['slider_title'] ?>
            </div>
        </div>
    </div>
</section>