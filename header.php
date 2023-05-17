<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Metas -->
    <meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="<?= esc_attr( get_bloginfo( 'description' ) ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Preload -->
    <link 
      rel="preload" as="font" type="font/woff2" crossorigin
      href="<?= get_template_directory_uri() ?>/assets/dist/akzidenzgroteskpro-bold.woff2">
    <link 
      rel="preload" as="font" type="font/woff2" crossorigin
      href="<?= get_template_directory_uri() ?>/assets/dist/akzidenzgroteskpro-light.woff2">
    <link 
      rel="preload" as="font" type="font/woff2" crossorigin
      href="<?= get_template_directory_uri() ?>/assets/dist/akzidenzgroteskpro-md.woff2">
    <link 
      rel="preload" as="font" type="font/woff2" crossorigin
      href="<?= get_template_directory_uri() ?>/assets/dist/akzidenzgroteskpro-regular.woff2">
    <link 
      rel="preload" as="font" type="font/woff2" crossorigin
      href="<?= get_template_directory_uri() ?>/assets/dist/akzidenzgroteskpro-lightit.woff2">
    <link 
      rel="preload" as="font" type="font/woff2" crossorigin
      href="<?= get_template_directory_uri() ?>/assets/dist/fa-solid-900.woff2">

    <?php wp_head(); ?>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/dist/main.bandle.css?v=10">

</head>

<body <?php body_class(); ?>>

    <header class="main-header <?= $args['header_color_class']; ?>">
        <div class="container">
          <div class="main-header__top head-contacts">
            <div class="head-contacts__addres">
              <a href="tel:<?= get_theme_mod('phone_one')?>" class="head-contacts__links">
                <i class="fa-solid fa-phone"></i> 
                <?= get_theme_mod('phone_one')?>
              </a>
              <a href="#" class="head-contacts__links">
                <i class="fa-solid fa-location-dot"></i> 
                <?php 
                    if (get_locale() === 'ru_RU'):
                        echo get_theme_mod('adres_one');
                    else:
                        echo get_theme_mod('adres_two');
                    endif; 
                ?>
              </a>
              <?php $translations = pll_the_languages( array( 'dropdown' => 0, 'hide_current' => 1, 'raw' => 1 ) ); ?>
              <?php foreach ($translations as $key => $array) {
                echo <<< LANG
                  <a href="{$array['url']}" class="head-contacts__links head-contacts__lang">
                    {$array['name']}
                  </a>
                LANG;
              } ?>
            </div>
          </div>
          <div id="main-header__bottom" class="main-header__bottom navigation">
            <div class="navigation__logo-block">
              <?php the_custom_logo() ?>
              <span class="navigation__label">
                <?= get_locale() === 'ru_RU' ? 
                    get_theme_mod('site_description') :
                    get_theme_mod('site_description_kk')    
                ?>
              </span>
            </div>
            <?php
              wp_nav_menu( array(
                'menu'            => 'main_menu',
                'container'       => 'div',
                'container_class' => 'navigation__menu main-menu',
                'container_id'    => '',
                'menu_class'      => 'main-menu__nav',
                'menu_id'         => '',     
                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                'walker' => new wp_bootstrap_navwalker()  
                ) 
              );
            ?>
            <div class="menu-toggle navigation__toggle">
              <span class="menu-toggle__line"></span>
              <span class="menu-toggle__line"></span>
              <span class="menu-toggle__line"></span>
           </div>
          </div>
        </div>
    </header>

<div class="mobile-menu mobile-menu__wrapper">
  <div class="container">
    <button class="mobile-menu__btn-close">
        <svg role="presentation" class="modal__icon-close" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> 
            <g stroke="none" stroke-width="1" fill="#000000" fill-rule="evenodd"> 
                <rect transform="
                        translate(11.313708, 11.313708) 
                        rotate(-45.000000) 
                        translate(-11.313708, -11.313708) 
                    " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> 
                <rect transform="
                        translate(11.313708, 11.313708) 
                        rotate(-315.000000) 
                        translate(-11.313708, -11.313708) 
                    " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> 
            </g> 
        </svg>
    </button>
    <div class="mobile-menu__content">
      <?php
        wp_nav_menu( array(
          'menu'            => 'main_menu',
          'container'       => false,
          'container_id'    => '',
          'menu_class'      => 'main-menu__nav',
          'menu_id'         => '',     
          'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
          'walker' => new wp_bootstrap_navwalker()  
          ) 
        );
      ?>
      <div class="mobile-menu__contacts">
        <?php $translations = pll_the_languages( array( 'dropdown' => 0, 'hide_current' => 1, 'raw' => 1 ) ); ?>
        <?php foreach ($translations as $key => $array) {
          echo <<< LANG
            <a href="{$array['url']}" class="mobile-menu__lang">
              <i class="fa-solid fa-earth-africa"></i>
              {$array['name']}
            </a>
          LANG;
        } ?>
        <a href="tel:<?= get_theme_mod('phone_one')?>" class="mobile-menu__phone">
          <i class="fa-solid fa-phone"></i> 
          <?= get_theme_mod('phone_one')?>
        </a>
        <a href="#" class="mobile-menu__adres">
          <i class="fa-solid fa-location-dot"></i> 
          <?php 
              if (get_locale() === 'ru_RU'):
                  echo get_theme_mod('adres_one');
              else:
                  echo get_theme_mod('adres_two');
              endif; 
          ?>
        </a>
      </div>
    </div>
  </div>
</div>