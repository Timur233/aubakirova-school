<?php 
    $team = get_field('about_team'); 
    $count_teachers = floor((wp_count_posts('team')->publish) / 2);
    $lang = get_locale() !== 'ru_RU' ? '/kk' : '';
?>

<section id="team" class="section section-team team">
    <div class="container">
        <div class="section-title">
            <h2 class="section-title__h2">
                <a href="<?= home_url() . '/team' ?>">
                    <?= pll__('Команда') ?>
                </a>
            </h2>
        </div>

        <div class="team__block team-block">
            <?php 
                for ($i = 1; $i <= 12; $i++) {
                    $employee = $team['team_employee_' . $i];
                    $photo = $employee['photo'];
                    $name = $employee['name'] ? 
                        '<h5 class="team-block__name">' . $employee['name'] . '</h5>' : 
                        '';
                    $position = $employee['position'] ? 
                        '<span class="team-block__pos">' . $employee['position'] . '</span>' : 
                        '';
                    
                    if (!$employee['photo']): continue; endif;

                    echo <<< EMPLOYEE
                        <div class="team-block__item">
                            <img class="team-block__img" src="{$photo}" alt="">
                            <h5 class="team-block__name">{$name}</h5>
                            <span class="team-block__pos">{$position}</span>
                        </div>
                    EMPLOYEE;
                }
            ?>
        </div>

        <div class="team__buttons">
            <a href="<?= get_site_url() . $lang . '/team' ?>" class="btn">
            +<?= $count_teachers ?> <?= pll__('Сотрудника') ?>
            </a>
        </div>

        <style>
            .team__buttons > .btn {
                border-radius: 50%;
                padding: 16px 32px;
                font-weight: 500;
                font-size: 16px;
            }
        </style>
    </div>
</section>
