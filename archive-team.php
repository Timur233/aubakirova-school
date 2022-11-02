<?php

get_header(null, array(
    'header_color_class' => 'main-header--white'
));

include('widgets/breadcrumbs.php');

?>

    <section class="section section-about-team about-team">
        <div class="container">
            <?= pll__('Описание нашей команды') ?>
        </div>
    </section>

<?php

include('widgets/team_archive_grid.php');

get_footer();