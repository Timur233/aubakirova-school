<?php $slider = get_field('about_slider'); ?>

<section class="section slider about-page__slider">
    <div class="container">
        <div class="slider__container">
            <div 
            class="slider__el slider__el--circle"
            style="
                background-image: url(<?= $slider['slider_image_1'] ?>); 
                width: 160px; 
                height: 160px;
                left: 0%;
                top: 7%;
            "
            ></div>
            <div 
            class="slider__el slider__el--moved slider__el--circle"
            data-speed="2.5"
            style="
                background-color: #fabf3f; 
                width: 30px; 
                height: 30px;
                left: 18%;
                top: 5%;
            "
            ></div>
            <div 
            class="slider__el slider__el--circle"
            style="
                background-image: url(<?= $slider['slider_image_2'] ?>); 
                width: 470px; 
                height: 470px;
                left: 20%;
                top: 0%;
            "
            ></div>
            <div 
            class="slider__el slider__el--moved slider__el--circle"
            data-speed="3.5"
            style="
                background-color: #4c77db;
                width: 86px; 
                height: 86px;
                left: 63%;
                top: 50%;
            "
            ></div>
            <div 
            class="slider__el slider__el--circle"
            style="
                background-image: url(<?= $slider['slider_image_3'] ?>); 
                width: 130px; 
                height: 130px;
                left: 14%;
                top: 72%;
            "
            ></div>
            <div 
            class="slider__el slider__el--circle"
            style="
                background-image: url(<?= $slider['slider_image_4'] ?>); 
                width: 155px; 
                height: 155px;
                left: 73%;
                top: 10%;
            "
            ></div>
            <div 
            class="slider__el slider__el--moved slider__el--circle"
            data-speed="1.5"
            style="
                background-color: #292929;
                width: 43px; 
                height: 43px;
                left: 92%;
                top: 0px;
            "
            ></div>
            <div 
            class="slider__el slider__el--circle"
            style="
                background-image: url(<?= $slider['slider_image_5'] ?>); 
                width: 107px; 
                height: 107px;
                left: 86%;
                top: 45%;
            "
            ></div>
            <div 
            class="slider__el slider__el--text"
            style="
                color: #333;
                margin-left: auto;
                margin-top: auto;
                padding: 0 80px 80px 0;
            "  
            >
            <?= $slider['slider_title'] ?>
            </div>
        </div>
    </div>
</section>