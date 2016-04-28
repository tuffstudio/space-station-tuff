<?php
    use Roots\Sage\MagazinePost;
    use Roots\Sage\CategoriesInPage;

    // Post logic
    $post_id = $post->ID;
    $categories = get_the_category();

    if(array_key_exists(0, $categories)) {
        $category = CategoriesInPage\category_info($categories[0]);
    }

    $related_case_study = CFS() -> get('related_case_study', $post_id);
    $sidebar_fields = CFS() -> get(false, $post_id);

    $art_of_valuation_url = get_option('art_of_valuation_url');
?>
<div class="grid grid--full">
    <div class="grid__item">
        <nav class="nav__secondary">
            <a href="/canvas-magazine" class="link--standard link--back">
                back to Canvas Magazine
            </a>
        </nav>
        <div class="canvas-post__image">
            <?php the_post_thumbnail() ?>
        </div>
    </div>
    <div class="grid__item">
        <div class="canvas-post__header">
            <p class="masonry__tile-category canvas-post__category"><a href="<?= $category['link']; ?>"><span><?= $category['name']; ?></span></a></p>
            <h1 class="canvas-post__title"><?php the_title(); ?></h1>
            <?php include dirname(__FILE__) . '/../components/author.php'; ?>
        </div>
    </div>
    <div class="grid__item tablet--two-thirds">
        <?php include dirname(__FILE__) . '/../components/socials.php'; ?>

        <div class="canvas-post__content">
            <div class="canvas-post__post">
                <?php
                    $content = $post->post_content;
                    $content = apply_filters('the_content', $content);

                    echo $content;
                ?>
            </div>
            <div class="canvas-post__recommended">
                <h3 class="canvas-post__recommended-title">Recommended articles</h3>
                <div class="grid grid--full">
                    <?php
                        $three_last_posts = CategoriesInPage\last_posts($category['id'], 3, $post_id);

                        foreach ($three_last_posts as $index) :
                            $post = new MagazinePost\MagazinePost($index->ID);
                    ?><!--
                    --><div class="grid__item tablet--one-third recommended-post">
                        <a href="<?= $post->get_link(); ?>" class="recommended-post__link">
                            <div class="">
                                <div class="recommended-post__image" style="background-image: url('<?= $post->get_image_url(); ?>')"></div>
                                <p class="masonry__tile-category recommended-post__category"><span><?= $post->get_category(); ?></span></p>
                                <h3 class="recommended-post__title"><?= $post->get_title(); ?></h3>
                            </div>
                        </a>
                    </div><!--
                    --><?php endforeach; ?>
                </div>
            </div>
        </div>
    </div><!--
    --><div class="grid__item tablet--one-third">
        <div class="canvas-post__sidebar">
            <?php if($sidebar_fields['sidebar_first_box']): ?>
                <div class="moving-box is-moved full-visible moving-box--static canvas-post__sidebar-box">
                    <div class="moving-box__element moving-box__content">
                        <p class="moving-box__title">THE ART OF VALUATION</p>
                        <p class="moving-box__text">
                            <?php // TODO: Remember to replace lorem text with correct one ?>
                            Ta nobit quam, to amniet que ficipidus nam as quislinerercst
                        </p>
                        <a href="<?= $art_of_valuation_url; ?>" class="btn btn--primary">Download now</a>
                    </div>
                    <div class="moving-box__element moving-box__border"></div>
                </div>
            <?php endif; ?>

            <?php if($sidebar_fields['sidebar_second_box']): ?>
                <div class="canvas-post__sidebar-box">
                    <a href="/?s=" class="masonry__link">
                        <div class="masonry__item masonry__item--square">
                            <div class="masonry__tile masonry__tile-link masonry__tile-link--brown">
                                <span>Find a property</span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endif; ?>

            <?php if($sidebar_fields['sidebar_third_box']): ?>
                <div class="canvas-post__sidebar-box">
                    <a href="/blackbook" class="masonry__link">
                        <div class="masonry__item masonry__item--square">
                            <div class="masonry__tile masonry__tile-link masonry__tile-link--blackbook"></div>
                        </div>
                    </a>
                </div>
            <?php endif; ?>

            <?php
                if ($related_case_study):
                    $related_case_study_id = $related_case_study[0];

                    $related_case_study = new MagazinePost\CaseStudyPost($related_case_study_id);
            ?>
                <div class="canvas-post__sidebar-box">
                    <a href="<?= $related_case_study->get_link(); ?>" class="masonry__link">
                        <div class="masonry__item masonry__item--square">
                            <div class="masonry__tile masonry__tile-link masonry__tile-link--cs" style="background-image: url('<?= $related_case_study->get_image_url(); ?>')">
                                <span><?= $related_case_study->get_title(); ?></span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
