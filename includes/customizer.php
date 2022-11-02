<?php

//////////////////////////////Параметры сайта//////////////////////////////

add_action('customize_register', function($customizer){
    $customizer->add_section(
        'options_section',
        array(
            'title' => 'Параметры сайта',
            'description' => 'Логотип, курс доллара и дополнительные параметры сайта',
            'priority' => 11,
        )
    );

    $customizer->add_setting('site_logo');///site_logo
    $customizer->add_control(
        new WP_Customize_Image_Control(
            $customizer,
            'site_logo',
            array(
                'type'        => 'upload',
                'label' => 'Логотип сайта',
                'section' => 'options_section',
                'settings' => 'site_logo'
            )
        )
    );

    $customizer->add_setting(//Лозунг сайта
        'site_description',
        array('default' => 'Логзунг')
    );
    $customizer->add_control(
        'site_description',
        array(
            'label' => 'Лозунг сайта',
            'section' => 'options_section',
            'type' => 'textarea',
        )
    );

    $customizer->add_setting(//Лозунг сайта
        'site_description_kk',
        array('default' => 'Логзунг на Казахском')
    );
    $customizer->add_control(
        'site_description_kk',
        array(
            'label' => 'Логзунг на Казахском',
            'section' => 'options_section',
            'type' => 'textarea',
        )
    );


});

//////////////////////////////Контактная информация//////////////////////////////

add_action('customize_register', function($customizer){
    $customizer->add_section(
        'contacts_section',
        array(
            'title' => 'Контактная информация',
            'priority' => 12,
        )
    );

    ///ALMATY///

    $customizer->add_setting(
        'phone_one',
        array('default' => '+7 705 565 18 20')
    );
    $customizer->add_control(
        'phone_one',
        array(
            'label' => 'Первый телефон',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );

    $customizer->add_setting(
        'phone_two',
        array('default' => '+7 727 293 24 99')
    );
    $customizer->add_control(
        'phone_two',
        array(
            'label' => 'Второй телефон',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );

    $customizer->add_setting(
        'phone_three',
        array('default' => '+7 707 123-35-67')
    );
    $customizer->add_control(
        'phone_three',
        array(
            'label' => 'Городской телефон без кода (345 67 44)',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );

    $customizer->add_setting(
        'wpp',
        array('default' => '7071233567')
    );
    $customizer->add_control(
        'wpp',
        array(
            'label' => 'Номер для Whatsapp (Без +, 8, - и пробелов)',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );

    $customizer->add_setting(
        'mail',
        array('default' => 'school@aubakirova.kz')
    );
    $customizer->add_control(
        'mail',
        array(
            'label' => 'Email',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );

    $customizer->add_setting(
        'adres_one',
        array('default' => 'г. Алматы, Наурызбайский район, Таугуль 3, ул. Жандосова 2 уг Яссауи. (с 10:00 до 19:00 без выходных)')
    );
    $customizer->add_control(
        'adres_one',
        array(
            'label' => 'Адрес (первая строка)',
            'section' => 'contacts_section',
            'type' => 'textarea',
        )
    );

    $customizer->add_setting(
        'adres_two',
        array('default' => '(Внимание, уг. улицы Яссауи. В Алматы имеется несколько адресов «Жандосова 2» )')
    );
    $customizer->add_control(
        'adres_two',
        array(
            'label' => 'Адрес (вторая строка)',
            'section' => 'contacts_section',
            'type' => 'textarea',
        )
    );

    ///СОЦ СЕТИ///

    $customizer->add_setting(
        'insta_link',
        array('default' => 'http://')
    );
    $customizer->add_control(
        'insta_link',
        array(
            'description' => 'Instagram',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );

    $customizer->add_setting(
        'face_link',
        array('default' => 'http://')
    );
    $customizer->add_control(
        'face_link',
        array(
            'description' => 'Facebook',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );


});

//////////////////////////////////////////////Стили кустомайзера//////////////////////////////////

function my_customizer_styles() { ?>
    <style>
        li#accordion-section-options_section h3{padding-left:40px}li#accordion-section-options_section h3:before{content:"\f111";position:absolute;left:10px;top:11px;line-height:1;font-family:dashicons;font-size:20px}li#accordion-section-contacts_section h3{padding-left:40px}li#accordion-section-contacts_section h3:before{content:"\f473";position:absolute;left:10px;top:11px;line-height:1;font-family:dashicons;font-size:20px}li#accordion-section-manadger_section h3{padding-left:40px}li#accordion-section-manadger_section h3:before{content:"\f110";position:absolute;left:10px;top:11px;line-height:1;font-family:dashicons;font-size:20px}li#accordion-section-banners_section h3{padding-left:40px}li#accordion-section-banners_section h3:before{content:"\f161";position:absolute;left:10px;top:11px;line-height:1;font-family:dashicons;font-size:20px}.customize-control input{padding:8px 10px;border-radius:3px}li#customize-control-manager_phone_1,li#customize-control-manager_phone_2{padding-bottom:20px;border-bottom:1px solid rgba(0,0,0,.09)}#customize-control-banner_link_1,#customize-control-banner_link_10,#customize-control-banner_link_2,#customize-control-banner_link_3,#customize-control-banner_link_4,#customize-control-banner_link_5,#customize-control-banner_link_6,#customize-control-banner_link_7,#customize-control-banner_link_8,#customize-control-banner_link_9{padding-bottom:20px;border-bottom:1px solid rgba(0,0,0,.09)}.attachment-media-view .placeholder{background:#e4e4e4}
    </style>
    <?php

}
add_action( 'customize_controls_print_styles', 'my_customizer_styles', 999 );

?>