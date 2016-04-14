<div class="masonry__image">
    <a href="<?= $case->get_link(); ?>" class="masonry__link">
        <?= $case->get_image('square_big'); ?>
        <div class="grid__item one-half">
            <div class="masonry__item masonry__item--square"></div>
        </div><!--
        --><div class="grid__item one-half">
            <div class="masonry__item masonry__item--square">
                <div class="masonry__tile masonry__tile--white">
                    <div class="masonry__tile-border"></div>
                    <div class="masonry__tile-info">
                        <p class="masonry__tile-category">Case studies: <span><?= $case->get_category(); ?></span></p>
                        <h3 class="masonry__tile-title"><?= $case->get_title() ?></h3>
                        <p class="masonry__tile-desc masonry__tile-desc--small"><?= $case->get_excerpt(); ?></p>
                    </div>
                </div>
            </div>
        </div><!--
        --><div class="grid__item">
            <div class="masonry__item masonry__item--rectangular"></div>
        </div>
    </a>
</div>
