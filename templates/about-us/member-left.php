<div class="masonry__link">
    <div class="grid__item one-half">
        <div class="masonry__item masonry__item--square">
            <div class="masonry__item masonry__item--square masonry__image">
                <?= $member->get_image('square_small'); ?>
            </div>
        </div>
    </div><!--
    --><div class="grid__item one-half">
        <div class="masonry__item masonry__item--square">
            <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                <div class="masonry__tile-border"></div>
                <div class="masonry__tile-info">
                    <h3 class="masonry__tile-title"><?= $member->get_title() ?></h3>
                    <p class="masonry__tile-desc masonry__tile-desc--small"><?= $member->get_excerpt(80); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
