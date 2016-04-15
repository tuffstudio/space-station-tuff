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
            <?php if($case->has_video()) : ?>
                <button class="btn btn--play">play</button>
            <?php endif; ?>
        </div>
    </div>
</a>
