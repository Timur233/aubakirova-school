<?php $slider = get_field('education_slider'); ?>

<section class="section slider slider__education">
  <div class="container">
    <div class="slider__container">
      <div 
        class="slider__el slider__el--moved"
        data-speed="2"
        style="
          background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/icons/slider-el__3.png); 
          width: 86px; 
          height: 86px;
          left: -2%;
          top: 57%;
        "
      ></div>
      <div 
        class="slider__el"
        style="
          background-image: url(<?= $slider['slider_img_1'] ?>); 
          width: 591px; 
          height: 359px;
          left: 0%;
          top: 2%;
        "
      ></div>
      <div 
        class="slider__el slider__el--moved"
        data-speed="1.5"
        style="
          background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/icons/slider-el__4.png); 
          width: 65px; 
          height: 54px;
          left: 23%;
          top: 64%;
        "
      ></div>
      <div 
        class="slider__el"
        style="
          background-image: url(<?= $slider['slider_img_2'] ?>); 
          width: 351px; 
          height: 262px;
          left: 33%;
          top: 50%;
        "
      ></div>
      <div 
        class="slider__el slider__el--moved"
        data-speed="3"
        style="
          background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/icons/slider-el__5.png); 
          width: 211px; 
          height: 172px;
          left: 80%;
          top: -4%;
        "
      ></div>
      <div 
        class="slider__el slider__el--text"
        style="
          color: #333;
          margin-left: auto;
          padding: 0 80px  0;
          margin-bottom: 80px;
          text-align: right;
          max-width: 605px
        "  
      >
        <?= $slider['slider_title'] ?>
      </div>
    </div>
  </div>
</section>