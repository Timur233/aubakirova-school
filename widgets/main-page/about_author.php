<?php $author = get_field('about_author'); ?>

<section class="section section-author author">
    <div class="container">
        <div class="flex author__flex">
            <div class="flex__3">
                <img 
                    src="<?= $author['author_photo'] ?>" 
                    alt="<?= $author['author_name'] ?>" 
                    class="author__photo"
                >
            </div>
			<div class="flex__9 author__content">
				<div class="author__first-block">
					<img 
						src="<?= $author['author_photo'] ?>" 
						alt="<?= $author['author_name'] ?>" 
						class="author__mobile-photo"
					>
				  <div class="author__about-author">
                <h2 class="author__title">
                    <?= $author['author_name'] ?>
                </h2>
					<?= $author['author_desc'] ?>
					<a 
						href="
							<?= 
								get_locale() === 'ru_RU' ? 
								get_permalink(732) : 
								get_permalink(833) 
							?>
						" 
						class="btn btn--outline"
					>
						<?= pll__('Об авторе'); ?>
					</a>
				  </div>
				</div>

				<div class="author__quote author-quote">
				  <img src="<?= content_url() ?>/uploads/2022/08/author__apostroff.svg" class="author-quote__apostroff">
                    <?= $author['author_quote'] ?>
				</div>
			  </div>
        </div>
    </div>
</section>