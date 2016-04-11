<?php
    use Roots\Sage\MagazinePost;

    $page_id = $post->ID;
    $page_fields = CFS() -> get(false, $page_id);

    $spotlight_posts = $page_fields['spotlight_posts'];

    foreach ($spotlight_posts as $index => $id) {
        $spotlight{$index} = new MagazinePost\MagazinePost($id);
    }
?>

<div class="grid grid--full container--mobile-full">
    <div class="grid__item tablet--one-third">
        <a href="#" class="masonry__link">
            <div class="masonry__item masonry__item--square">
                <div class="masonry__tile masonry__tile-link masonry__tile-link--gradient">
                    <span>
                        <p class="masonry__tile-category"><span>New Features</span></p>
                        Spotlight
                    </span>
                </div>
            </div>
        </a>
    </div><!--
    --><div class="grid__item tablet--two-thirds masonry__image">
        <?php
            if(array_key_exists(0, $spotlight_posts)):
                $post = $spotlight{0};
        ?>
            <a href="<?= $post->get_link(); ?>" class="masonry__link">
                <?= $post->get_image('square_big'); ?>
                <div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square"></div>
                </div><!--
                --><div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square">
                        <div class="masonry__tile masonry__tile--white">
                            <div class="masonry__tile-border"></div>
                            <div class="masonry__tile-info">
                                <p class="masonry__tile-category"><span><?= $post->get_category(); ?></span></p>
                                <h3 class="masonry__tile-title masonry__tile-title--bigger"><?= $post->get_title(); ?></h3>
                            </div>
                        </div>
                    </div>
                </div><!--
                --><div class="grid__item">
                    <div class="masonry__item masonry__item--rectangular"></div>
                </div>
            </a>
        <?php endif; ?>
    </div><!--
    --><div class="grid__item tablet--one-third">
        <a href="/?s=" class="masonry__link">
            <div class="masonry__item masonry__item--square">
                <div class="masonry__tile masonry__tile-link masonry__tile-link--brown">
                    <span>What's your property worth?</span>
                </div>
            </div>
        </a>
    </div><!--
    --><div class="grid__item tablet--two-thirds">
        <?php
            if(array_key_exists(1, $spotlight_posts)):
                $post = $spotlight{1};
        ?>
            <a href="<?= $post->get_link(); ?>" class="masonry__link">
                <div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square masonry__image">
                        <?= $post->get_image('square_small'); ?>
                    </div>
                </div><!--
                --><div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square">
                        <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                            <div class="masonry__tile-border"></div>
                            <div class="masonry__tile-info">
                                <p class="masonry__tile-category"><span><?= $post->get_category(); ?></span></p>
                                <h3 class="masonry__tile-title masonry__tile-title--bigger"><?= $post->get_title(); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        <?php endif; ?>
    </div><!--
    --><div class="grid__item tablet--two-thirds">
        <?php
            if(array_key_exists(2, $spotlight_posts)):
                $post = $spotlight{2};
        ?>
            <a href="<?= $post->get_link(); ?>" class="masonry__link">
                <div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square masonry__image">
                        <?= $post->get_image('square_small'); ?>
                    </div>
                </div><!--
                --><div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square">
                        <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                            <div class="masonry__tile-border"></div>
                            <div class="masonry__tile-info">
                                <p class="masonry__tile-category"><span><?= $post->get_category(); ?></span></p>
                                <h3 class="masonry__tile-title masonry__tile-title--bigger"><?= $post->get_title(); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        <?php endif; ?>
    </div><!--
    --><div class="grid__item tablet--one-third phone--hide tablet--show"></div><!--
    --><div class="grid__item tablet--one-third">
        <a href="#" class="masonry__link">
            <div class="masonry__item masonry__item--square">
                <div class="masonry__tile masonry__tile-link masonry__tile-link--gradient">
                    <span>
                        Architecture
                        <button class="btn masonry__tile-link-btn">Read more</button>
                     </span>
                </div>
            </div>
        </a>
    </div><!--
    --><div class="grid__item tablet--two-thirds masonry__image">
        <a href="#" class="masonry__link">
            <img src="<?= get_template_directory_uri() ?>/dist/images/masonry_big_placeholder.jpg" alt="" class="masonry__background-image">
            <div class="grid__item one-half">
                <div class="masonry__item masonry__item--square"></div>
            </div><!--
            --><div class="grid__item one-half">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile--white">
                        <div class="masonry__tile-border"></div>
                        <div class="masonry__tile-info">
                            <p class="masonry__tile-category">Residental: <span>Sale</span></p>
                            <h3 class="masonry__tile-title masonry__tile-title--bigger">Camden road, e7</h3>
                        </div>
                    </div>
                </div>
            </div><!--
            --><div class="grid__item">
                <div class="masonry__item masonry__item--rectangular"></div>
            </div>
        </a>
    </div><!--
    --><div class="grid__item tablet--two-thirds">
        <a href="#" class="masonry__link">
            <div class="grid__item one-half">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                        <div class="masonry__tile-border"></div>
                        <div class="masonry__tile-info">
                            <p class="masonry__tile-category">Commercial: <span>Rent</span></p>
                            <h3 class="masonry__tile-title masonry__tile-title--bigger">Stratford High Street, e15</h3>
                        </div>
                    </div>
                </div>
            </div><!--
            --><div class="grid__item one-half">
                <div class="masonry__item masonry__item--square masonry__image">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/design_small.jpg" alt="">
                </div>
            </div>
        </a>
    </div><!--
    --><div class="grid__item tablet--one-third">
        <a href="#" class="masonry__link js-newsletter-jump">
            <div class="masonry__item masonry__item--square">
                <div class="masonry__tile masonry__tile-link masonry__tile-link--purple">
                    <span>Sign up to our newsletter</span>
                </div>
            </div>
        </a>
    </div><!--
    --><div class="grid__item tablet--one-third">
        <a href="#" class="masonry__link">
            <div class="masonry__item masonry__item--square">
                <div class="masonry__tile masonry__tile-link masonry__tile-link--gradient">
                    <span>
                        Design
                        <button class="btn masonry__tile-link-btn">Read more</button>
                    </span>
                </div>
            </div>
        </a>
    </div><!--
    --><div class="grid__item tablet--two-thirds">
        <a href="#" class="masonry__link">
            <div class="grid__item one-half">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                        <div class="masonry__tile-border"></div>
                        <div class="masonry__tile-info">
                            <p class="masonry__tile-category">Sale: <span>Rent</span></p>
                            <h3 class="masonry__tile-title masonry__tile-title--bigger">Stratford High Street, e15</h3>
                        </div>
                    </div>
                </div>
            </div><!--
            --><div class="grid__item one-half">
                <div class="masonry__item masonry__item--square masonry__image">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/design_small.jpg" alt="">
                </div>
            </div>
        </a>
    </div><!--
    --><div class="grid__item tablet--one-third phone--hide tablet--show"></div><!--
    --><div class="grid__item tablet--two-thirds masonry__image">
        <a href="#" class="masonry__link">
            <img src="<?= get_template_directory_uri() ?>/dist/images/masonry_big_placeholder.jpg" alt="" class="masonry__background-image">
            <div class="grid__item one-half">
                <div class="masonry__item masonry__item--square"></div>
            </div><!--
            --><div class="grid__item one-half">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile--white">
                        <div class="masonry__tile-border"></div>
                        <div class="masonry__tile-info">
                            <p class="masonry__tile-category">Residental: <span>Sale</span></p>
                            <h3 class="masonry__tile-title masonry__tile-title--bigger">Camden road, e7</h3>
                        </div>
                    </div>
                </div>
            </div><!--
            --><div class="grid__item">
                <div class="masonry__item masonry__item--rectangular"></div>
            </div>
        </a>
    </div><!--
    --><div class="grid__item tablet--one-third">
        <a href="#" class="masonry__link">
            <div class="masonry__item masonry__item--square">
                <div class="masonry__tile masonry__tile-link masonry__tile-link--gradient">
                    <span>
                        art
                        <button class="btn masonry__tile-link-btn">Read more</button>
                    </span>
                </div>
            </div>
        </a>
    </div><!--
    --><div class="grid__item tablet--two-thirds masonry__image">
        <a href="#" class="masonry__link">
            <img src="<?= get_template_directory_uri() ?>/dist/images/masonry_big_placeholder.jpg" alt="" class="masonry__background-image">
            <div class="grid__item one-half">
                <div class="masonry__item masonry__item--square"></div>
            </div><!--
            --><div class="grid__item one-half">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile--white">
                        <div class="masonry__tile-border"></div>
                        <div class="masonry__tile-info">
                            <p class="masonry__tile-category">Residental: <span>Sale</span></p>
                            <h3 class="masonry__tile-title masonry__tile-title--bigger">Camden road, e7</h3>
                        </div>
                    </div>
                </div>
            </div><!--
            --><div class="grid__item">
                <div class="masonry__item masonry__item--rectangular"></div>
            </div>
        </a>
    </div>
    <div class="grid__item tablet--two-thirds">
        <a href="#" class="masonry__link">
            <div class="grid__item one-half">
                <div class="masonry__item masonry__item--square masonry__image">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/design_small.jpg" alt="">
                </div>
            </div><!--
            --><div class="grid__item one-half">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                        <div class="masonry__tile-border"></div>
                        <div class="masonry__tile-info">
                            <p class="masonry__tile-category">Commercial: <span>Rent</span></p>
                            <h3 class="masonry__tile-title masonry__tile-title--bigger">Stratford High Street, e15</h3>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div><!--
    --><div class="grid__item tablet--one-third phone--hide tablet--show"></div>
    <div class="grid__item tablet--one-third">
        <a href="#" class="masonry__link">
            <div class="masonry__item masonry__item--square">
                <div class="masonry__tile masonry__tile-link masonry__tile-link--gradient">
                    <span>
                        lifestyle
                        <button class="btn masonry__tile-link-btn">Read more</button>
                    </span>
                </div>
            </div>
        </a>
    </div><!--
    --><div class="grid__item tablet--two-thirds">
        <a href="#" class="masonry__link">
            <div class="grid__item one-half">
                <div class="masonry__item masonry__item--square masonry__image">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/design_small.jpg" alt="">
                </div>
            </div><!--
            --><div class="grid__item one-half">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                        <div class="masonry__tile-border"></div>
                        <div class="masonry__tile-info">
                            <p class="masonry__tile-category">Commercial: <span>Rent</span></p>
                            <h3 class="masonry__tile-title masonry__tile-title--bigger">Stratford High Street, e15</h3>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="grid__item tablet--two-thirds masonry__image">
        <a href="#" class="masonry__link">
            <img src="<?= get_template_directory_uri() ?>/dist/images/masonry_big_placeholder.jpg" alt="" class="masonry__background-image">
            <div class="grid__item one-half">
                <div class="masonry__item masonry__item--square"></div>
            </div><!--
            --><div class="grid__item one-half">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile--white">
                        <div class="masonry__tile-border"></div>
                        <div class="masonry__tile-info">
                            <p class="masonry__tile-category">Residental: <span>Sale</span></p>
                            <h3 class="masonry__tile-title masonry__tile-title--bigger">Camden road, e7</h3>
                        </div>
                    </div>
                </div>
            </div><!--
            --><div class="grid__item">
                <div class="masonry__item masonry__item--rectangular"></div>
            </div>
        </a>
    </div><!--
    --><div class="grid__item tablet--one-third phone--hide tablet--show">
        <div class="grid__item">
            <div class="masonry__item masonry__item--square"></div>
        </div><!--
        --><div class="grid__item">
            <a href="#" class="masonry__link js-newsletter-jump">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile-link masonry__tile-link--purple">
                        <span>Sign up to our newsletter</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="grid__item tablet--one-third">
        <a href="#" class="masonry__link">
            <div class="masonry__item masonry__item--square">
                <div class="masonry__tile masonry__tile-link masonry__tile-link--gradient">
                    <span>
                        property
                        <button class="btn masonry__tile-link-btn">Read more</button>
                    </span>
                </div>
            </div>
        </a>
    </div><!--
    --><div class="grid__item tablet--two-thirds masonry__image">
        <a href="#" class="masonry__link">
            <img src="<?= get_template_directory_uri() ?>/dist/images/masonry_big_placeholder.jpg" alt="" class="masonry__background-image">
            <div class="grid__item one-half">
                <div class="masonry__item masonry__item--square"></div>
            </div><!--
            --><div class="grid__item one-half">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile--white">
                        <div class="masonry__tile-border"></div>
                        <div class="masonry__tile-info">
                            <p class="masonry__tile-category">Residental: <span>Sale</span></p>
                            <h3 class="masonry__tile-title masonry__tile-title--bigger">Camden road, e7</h3>
                        </div>
                    </div>
                </div>
            </div><!--
            --><div class="grid__item">
                <div class="masonry__item masonry__item--rectangular"></div>
            </div>
        </a>
    </div>
    <div class="grid__item tablet--two-thirds">
        <a href="#" class="masonry__link">
            <div class="grid__item one-half">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                        <div class="masonry__tile-border"></div>
                        <div class="masonry__tile-info">
                            <p class="masonry__tile-category">Commercial: <span>Rent</span></p>
                            <h3 class="masonry__tile-title masonry__tile-title--bigger">Morcheeba</h3>
                        </div>
                    </div>
                </div>
            </div><!--
            --><div class="grid__item one-half">
                <div class="masonry__item masonry__item--square masonry__image">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/design_small.jpg" alt="">
                </div>
            </div>
        </a>
    </div><!--
    --><div class="grid__item tablet--one-third phone--hide tablet--show"></div>
    <div class="grid__item tablet--one-third phone--hide tablet--show"></div><!--
    --><div class="grid__item tablet--two-thirds">
        <a href="#" class="masonry__link">
            <div class="grid__item one-half">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                        <div class="masonry__tile-border"></div>
                        <div class="masonry__tile-info">
                            <p class="masonry__tile-category">Commercial: <span>Rent</span></p>
                            <h3 class="masonry__tile-title masonry__tile-title--bigger">Animal instinct</h3>
                        </div>
                    </div>
                </div>
            </div><!--
            --><div class="grid__item one-half">
                <div class="masonry__item masonry__item--square masonry__image">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/design_small.jpg" alt="">
                </div>
            </div>
        </a>
    </div>
</div>
