<?php
    use Roots\Sage\MagazinePost;

    $page_id = $post->ID;
    $page_fields = CFS() -> get(false, $page_id);

    $spotlight_posts = $page_fields['spotlight_posts'];

    foreach ($spotlight_posts as $index => $id) {
        $spotlight{$index} = new MagazinePost\MagazinePost($id);
    }

    $categories = get_categories();

    function category_info($category) {
        $category_id = $category->term_id;
        $category_name = $category->name;
        $category_link = get_category_link($category_id);

        return array(
            'name' => $category_name,
            'link' => $category_link,
            'id' => $category_id
        );
    }

    function two_last_posts($category_id) {
        $args = array(
            'numberposts' => 2,
            'category' => $category_id,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish',
        );

        return wp_get_recent_posts($args, OBJECT);
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
                                <h3 class="masonry__tile-title"><?= $post->get_title(); ?></h3>
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
                                <h3 class="masonry__tile-title"><?= $post->get_title(); ?></h3>
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
                                <h3 class="masonry__tile-title"><?= $post->get_title(); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        <?php endif; ?>
    </div><!--
    --><div class="grid__item tablet--one-third phone--hide tablet--show"></div><!--
    --><div class="grid__item tablet--one-third">
        <?php
            if(array_key_exists(0, $categories)):
                $category = category_info($categories[0]);
                $last_posts = two_last_posts($category['id']);

                $post_one = new MagazinePost\MagazinePost($last_posts[0]->ID);
                $post_two = new MagazinePost\MagazinePost($last_posts[1]->ID);
        ?>

            <a href="<?php echo $category['link']; ?>" class="masonry__link">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile-link masonry__tile-link--gradient">
                        <span>
                            <?php echo $category['name']; ?>
                            <button class="btn masonry__tile-link-btn">Read more</button>
                         </span>
                    </div>
                </div>
            </a>
        </div><!--
        --><div class="grid__item tablet--two-thirds masonry__image">
            <a href="<?php echo $post_one->get_link(); ?>" class="masonry__link">
                <?= $post_one->get_image('square_big'); ?>
                <div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square"></div>
                </div><!--
                --><div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square">
                        <div class="masonry__tile masonry__tile--white">
                            <div class="masonry__tile-border"></div>
                            <div class="masonry__tile-info">
                                <p class="masonry__tile-category"><span><?= $post_one->get_category(); ?></span></p>
                                <h3 class="masonry__tile-title"><?= $post_one->get_title(); ?></h3>
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
            <a href="<?= $post_two->get_link(); ?>" class="masonry__link">
                <div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square">
                        <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                            <div class="masonry__tile-border"></div>
                            <div class="masonry__tile-info">
                                <p class="masonry__tile-category"><span><?= $post_two->get_category(); ?></span></p>
                                <h3 class="masonry__tile-title"><?= $post_two->get_title(); ?></h3>
                            </div>
                        </div>
                    </div>
                </div><!--
                --><div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square masonry__image">
                        <?= $post_two->get_image('square_small'); ?>
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
        <?php endif; ?>
    </div><!--
    --><div class="grid__item tablet--one-third">
        <?php
            if(array_key_exists(1, $categories)):
                $category = category_info($categories[1]);
                $last_posts = two_last_posts($category['id']);

                $post_one = new MagazinePost\MagazinePost($last_posts[0]->ID);
                $post_two = new MagazinePost\MagazinePost($last_posts[1]->ID);
        ?>
            <a href="<?php echo $category['link']; ?>" class="masonry__link">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile-link masonry__tile-link--gradient">
                        <span>
                            <?php echo $category['name']; ?>
                            <button class="btn masonry__tile-link-btn">Read more</button>
                        </span>
                    </div>
                </div>
            </a>
        </div><!--
        --><div class="grid__item tablet--two-thirds">
            <a href="<?= $post_one->get_link(); ?>" class="masonry__link">
                <div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square">
                        <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                            <div class="masonry__tile-border"></div>
                            <div class="masonry__tile-info">
                                <p class="masonry__tile-category"><span><?= $post_one->get_category(); ?></span></p>
                                <h3 class="masonry__tile-title"><?= $post_one->get_title(); ?></h3>
                            </div>
                        </div>
                    </div>
                </div><!--
                --><div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square masonry__image">
                        <?= $post_one->get_image('square_small'); ?>
                    </div>
                </div>
            </a>
        </div><!--
        --><div class="grid__item tablet--one-third phone--hide tablet--show"></div><!--
        --><div class="grid__item tablet--two-thirds masonry__image">
            <a href="<?= $post_two->get_link(); ?>" class="masonry__link">
                <?= $post_two->get_image('square_big'); ?>
                <div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square"></div>
                </div><!--
                --><div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square">
                        <div class="masonry__tile masonry__tile--white">
                            <div class="masonry__tile-border"></div>
                            <div class="masonry__tile-info">
                                <p class="masonry__tile-category"><span><?= $post_two->get_category(); ?></span></p>
                                <h3 class="masonry__tile-title"><?= $post_two->get_title(); ?></h3>
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
        <?php
            if(array_key_exists(2, $categories)):
                $category = category_info($categories[2]);
                $last_posts = two_last_posts($category['id']);

                $post_one = new MagazinePost\MagazinePost($last_posts[0]->ID);
                $post_two = new MagazinePost\MagazinePost($last_posts[1]->ID);
        ?>
            <a href="<?php echo $category['link']; ?>" class="masonry__link">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile-link masonry__tile-link--gradient">
                        <span>
                            <?php echo $category['name']; ?>
                            <button class="btn masonry__tile-link-btn">Read more</button>
                        </span>
                    </div>
                </div>
            </a>
        </div><!--
        --><div class="grid__item tablet--two-thirds masonry__image">
            <a href="<?= $post_one->get_link(); ?>" class="masonry__link">
                <?= $post_one->get_image('square_big');  ?>
                <div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square"></div>
                </div><!--
                --><div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square">
                        <div class="masonry__tile masonry__tile--white">
                            <div class="masonry__tile-border"></div>
                            <div class="masonry__tile-info">
                                <p class="masonry__tile-category"><span><?= $post_one->get_category(); ?></span></p>
                                <h3 class="masonry__tile-title"><?= $post_one->get_title(); ?></h3>
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
            <a href="<?= $post_two->get_link(); ?>" class="masonry__link">
                <div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square masonry__image">
                        <?= $post_two->get_image('square_small'); ?>
                    </div>
                </div><!--
                --><div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square">
                        <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                            <div class="masonry__tile-border"></div>
                            <div class="masonry__tile-info">
                                <p class="masonry__tile-category"><span><?= $post_two->get_category(); ?></span></p>
                                <h3 class="masonry__tile-title"><?= $post_two->get_title(); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        <?php endif; ?>
    </div><!--
    --><div class="grid__item tablet--one-third phone--hide tablet--show"></div>
    <?php
        if(array_key_exists(3, $categories)):
            $category = category_info($categories[3]);
            $last_posts = two_last_posts($category['id']);

            $post_one = new MagazinePost\MagazinePost($last_posts[0]->ID);
            $post_two = new MagazinePost\MagazinePost($last_posts[1]->ID);
    ?>
        <div class="grid__item tablet--one-third">
            <a href="<?= $category['link']; ?>" class="masonry__link">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile-link masonry__tile-link--gradient">
                        <span>
                            <?php echo $category['name']; ?>
                            <button class="btn masonry__tile-link-btn">Read more</button>
                        </span>
                    </div>
                </div>
            </a>
        </div><!--
        --><div class="grid__item tablet--two-thirds">
            <a href="<?= $post_one->get_link(); ?>" class="masonry__link">
                <div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square masonry__image">
                        <?= $post_one->get_image('square_small');  ?>
                    </div>
                </div><!--
                --><div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square">
                        <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                            <div class="masonry__tile-border"></div>
                            <div class="masonry__tile-info">
                                <p class="masonry__tile-category"><span><?= $post_one->get_category(); ?></span></p>
                                <h3 class="masonry__tile-title"><?= $post_one->get_title();  ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="grid__item tablet--two-thirds masonry__image">
            <a href="<?= $post_two->get_link(); ?>" class="masonry__link">
                <?= $post_two->get_image('square_big'); ?>
                <div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square"></div>
                </div><!--
                --><div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square">
                        <div class="masonry__tile masonry__tile--white">
                            <div class="masonry__tile-border"></div>
                            <div class="masonry__tile-info">
                                <p class="masonry__tile-category"><span><?= $post_two->get_category(); ?></span></p>
                                <h3 class="masonry__tile-title"><?= $post_two->get_title(); ?></h3>
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
    <?php endif; ?>
    <div class="grid__item tablet--one-third">
        <?php
            if(array_key_exists(4, $categories)):
                $category = category_info($categories[4]);
                $last_posts = two_last_posts($category['id']);

                $post_one = new MagazinePost\MagazinePost($last_posts[0]->ID);
                $post_two = new MagazinePost\MagazinePost($last_posts[1]->ID);
        ?>
        <a href="<?php echo $category['link']; ?>" class="masonry__link">
            <div class="masonry__item masonry__item--square">
                <div class="masonry__tile masonry__tile-link masonry__tile-link--gradient">
                    <span>
                        <?php echo $category['name']; ?>
                        <button class="btn masonry__tile-link-btn">Read more</button>
                    </span>
                </div>
            </div>
        </a>
    </div><!--
    --><div class="grid__item tablet--two-thirds masonry__image">
        <a href="<?= $post_one->get_link(); ?>" class="masonry__link">
            <?= $post_one->get_image('square_big'); ?>
            <div class="grid__item one-half">
                <div class="masonry__item masonry__item--square"></div>
            </div><!--
            --><div class="grid__item one-half">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile--white">
                        <div class="masonry__tile-border"></div>
                        <div class="masonry__tile-info">
                            <p class="masonry__tile-category"><span><?= $post_one->get_category(); ?></span></p>
                            <h3 class="masonry__tile-title"><?= $post_one->get_title(); ?></h3>
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
        <a href="<?= $post_two->get_link(); ?>" class="masonry__link">
            <div class="grid__item one-half">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                        <div class="masonry__tile-border"></div>
                        <div class="masonry__tile-info">
                            <p class="masonry__tile-category"><span><?= $post_two->get_category(); ?></span></p>
                            <h3 class="masonry__tile-title"><?= $post_two->get_title(); ?></h3>
                        </div>
                    </div>
                </div>
            </div><!--
            --><div class="grid__item one-half">
                <div class="masonry__item masonry__item--square masonry__image">
                    <?= $post_two->get_image('square_small'); ?>
                </div>
            </div>
        </a>
        <?php endif; ?>
    </div><!--
    --><div class="grid__item tablet--one-third phone--hide tablet--show"></div>
    <div class="grid__item tablet--one-third phone--hide tablet--show"></div><!--
    --><div class="grid__item tablet--two-thirds">
        <a href="/black-book" class="masonry__link">
            <div class="grid__item one-half">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                        <div class="masonry__tile-border"></div>
                        <div class="masonry__tile-info">
                            <p class="masonry__tile-category"><span>Blackbook</span></p>
                            <h3 class="masonry__tile-title">Exclusive property community</h3>
                        </div>
                    </div>
                </div>
            </div><!--
            --><div class="grid__item one-half">
                <div class="masonry__item masonry__item--square masonry__image">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/btn-blackbook.jpg" alt="">
                </div>
            </div>
        </a>
    </div>
</div>
