<?php 

    $circles = get_terms([
        'taxonomy' => 'circles',
        'hide_empty' => true,
    ]); 

    foreach ($circles as $index => $circle) {
        $bg_color = ($index + 1) % 2 ? 'section--gray' : '';
        $news_instance = new WP_Query;

        $teachers = $news_instance->query(
            array(
                'post_type' => 'team',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'circles',
                        'field'    => 'slug',
                        'terms'    => $circle->slug
                    )
                )
            )       
        );

        foreach ($teachers as $item) {
            $title = get_the_title($item->ID);
            $image_src = get_the_post_thumbnail_url($item->ID, 'medium');
            $image = !empty($image_src) ? get_the_post_thumbnail_url($item->ID, 'medium') : 
                get_template_directory_uri() . '/assets/img/placeholder.jpg';
            $image_full = !empty($image_src) ? get_the_post_thumbnail_url($item->ID, 'full') : 
                get_template_directory_uri() . '/assets/img/placeholder.jpg';
            $options = [
                'teach_position'   => get_field('teach_position', $item->ID),
                'teach_education'  => get_field('teach_education', $item->ID),
                'teach_experience' => get_field('teach_experience', $item->ID),
                'teach_hobby'      => get_field('teach_hobby', $item->ID),
            ];
            $translations = [
                'team_about'     => pll__('О себе'),
                'team_education' => pll__('Образование'),
                'team_experience' => pll__('Опыт работы'),
                'team_hobby'     => pll__('Хобби и увлечения'),
            ];

            $teachers_html .= <<< TEACHER
                <div class="team-grid__item">
                    <img 
                        src="{$image}" 
                        class="team-grid__img"
                    >
                    <h4 class="team-grid__title">{$title}</h4>
                    <span class="team-grid__pos">{$options['teach_position']}</span>
                    <div class="team-grid__content team-grid__content--hidden about-me__content">
                        <div class="flex">
                            <div class="flex__4 about-me__photo">
                                <img src="{$image_full}" alt="{$title}">
                            </div>
                            <div class="flex__8 about-me__info">
                                <h4 class="about-me__title">{$title}</h4>
                                <dl class="about-me__params">
                                    <dt>{$translations['team_education']}:</dt>
                                    <dd>{$options['teach_education']}</dd>

                                    <dt>{$translations['team_experience']}:</dt>
                                    <dd>{$options['teach_experience']}</dd>

                                    <dt>{$translations['team_hobby']}:</dt>
                                    <dd>{$options['teach_hobby']}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <button class="team-grid__btn btn btn--outline">{$translations['team_about']}</button>
                </div>
            TEACHER;
        }

        echo <<< CIRCLE
            <section class="section section-circle section-circle--{$circle->term_id} {$bg_color}">
                <div class="container">
                    <div class="section-title">
                        <h2 class="section-title__h2">
                            {$circle->name}
                        </h2>
                    </div>
                    <div class="circle__team-grid team-grid">
                        {$teachers_html}
                    </div>
                </div>
            </section>
        CIRCLE;

        $teachers_html = '';
    }

?>