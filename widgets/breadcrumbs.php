<?php
    $title = get_the_title();

    if (is_archive()):
        $title = get_the_archive_title();
    endif;

    if ($title === 'Наша команда'):
        $title = pll__('Наша команда');
    elseif ($title === 'Новости'): 
        $title = pll__('Новости');
    endif;
?>

<section class="section-breadcrumbs breadcrumbs">
    <div class="container">
        <h1 class="breadcrumbs__title">
            <?= $title ?>
        </h1>
        <div class="breadcrumbs__list breadcrumbs-list">
            <?php get_breadcrumb(); ?>
        </div>
    </div>
</section>