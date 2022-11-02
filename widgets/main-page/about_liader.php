<?php $leader = get_field('school_leader'); ?>

<section class="section section-leader section--gray leader">
    <div class="container">
        <div class="leader__flex flex">
			
			<div class="flex__9 leader__content">
            <h2 class="leader__title">
                <?= $leader['leader_name'] ?>
            </h2>
            <img 
                src="<?= $leader['leader_photo'] ?>" 
                alt="<?= $leader['leader_name'] ?>" 
                class="leader__photo leader__photo--mobile"
            >
            <?= $leader['leader_desc'] ?>
          </div>
            <div class="flex__3">
                <img 
                    src="<?= $leader['leader_photo'] ?>" 
                    alt="<?= $leader['leader_name'] ?>" 
                    class="author__photo"
                >
            </div>
        </div>
    </div>
</section>