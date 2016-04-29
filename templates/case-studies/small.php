<div class="u--relative">
    <a href="<?= $case->get_link(); ?>" class="masonry__link">
        <div class="grid__item one-half">
            <div class="masonry__item masonry__item--square">
                <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                    <div class="masonry__tile-border"></div>
                    <div class="masonry__tile-info">
                        <p class="masonry__tile-category">Case studies: <span><?= $case->get_category(); ?></span></p>
                        <h3 class="masonry__tile-title"><?= $case->get_title() ?></h3>
                        <p class="masonry__tile-desc masonry__tile-desc--small"><?= $case->get_excerpt(80); ?></p>
                    </div>
                </div>
            </div>
        </div><!--
        --><div class="grid__item one-half">
            <div class="masonry__item masonry__item--square masonry__image">
                <?= $case->get_image('square_small'); ?>
            </div>
        </div>
    </a>
    <?php if($case->has_video()) : ?>
        <a href="<?= $case->get_link(); ?>#play" class="btn btn--play btn--play-inside">play</a>
    <?php endif; ?>
</div>
