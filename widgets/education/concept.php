<?php $concept = get_field('education_concept'); ?>

<section id="concept" class="section section-concept concept">
    <div class="container">
        <div class="section-title">
            <h2 class="section-title__h2">
                <?= $concept['concept_title'] ?>
            </h2>
        </div>

        <div class="concept__grid">
            <?php 
                for ($i = 1; $i <= 6; $i++) {
                    $title = $concept['concept_title_' . $i];
                    $text = $concept['concept_desc_' . $i];
                    
                    if (!($text && $title)): continue; endif;

                    echo <<< SECURITY
                        <div class="concept__item concept__item--left">
                            <span class="concept__number">
                                <i class="fa-solid fa-{$i}"></i>
                            </span>
                            <div class="concept__text">
                                <h4>{$title}</h4>
                                <p>
                                    {$text}
                                </p>
                            </div>
                        </div>
                    SECURITY;
                }
            ?>
        </div>
    </div>
</section>