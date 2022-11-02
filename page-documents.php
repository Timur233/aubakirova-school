<?php
/*
    Template Name: Документы
    Template Post Type: post, page, product
*/


get_header(null, array(
    'header_color_class' => 'main-header--white'
));

include('widgets/breadcrumbs.php');

$documents = '';

for ($i=1; $i <= 10; $i++) { 
    $title = get_field('name_'.$i);
    $link = get_field('file_'.$i);

    if (empty($link) || empty($title)): continue; endif;

    $documents .= <<< DOC
        <div class="documents__item">
            <a href="{$link}" target="_blank">
                <i class="fa-regular fa-file-lines documents__icon"></i>
                <span> {$title} </span>
            </a>
        </div>
    DOC;
}

echo <<< RESULT
    <section class="section section-documents documents">
        <div class="container-article">
            <div class="documents__list">
                {$documents}
            </div>
        </div>
    </section>
RESULT;

get_footer();

?>