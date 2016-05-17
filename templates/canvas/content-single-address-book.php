<?php
    $page_id = $post->ID;
    $page_fields = CFS() -> get(false, $page_id);
    $category_name = get_the_terms($page_id, 'address-book-category')[0]->name;
    $category_link = get_term_link($category_name, 'address-book-category');

    $telephone = str_replace(' ', '', $page_fields['ss_address_book_tel']);
    $website = $page_fields['ss_address_book_website'];
    $post_code = $page_fields['ss_address_book_post_code'];
    $road = $page_fields['ss_address_book_road'];
    $house_number = $page_fields['ss_address_book_house_number'];

    $content = apply_filters('the_content', $post->post_content);
?>

<nav class="nav__secondary">
    <a href="#" class="link--standard link--back js-go-back">
        Go back
    </a>
</nav>

<section class="business-directory__single">
    <?php the_post_thumbnail(false, array( 'class' => 'img--responsive') ); ?>
    <div class="business-directory__content">
        <p class="section__category">
            <a href="<?= $category_link ?>">
                <?= $category_name ?>
            </a>
        </p>
        <h1 class="headline--small">
            <?php the_title(); ?>
        </h1>
        <?php if (array_key_exists('ss_post_subheadline', $page_fields)) : ?>
            <h2 class="subheadline--default"><?= $page_fields['ss_post_subheadline']; ?></h2>
        <?php endif; ?>

        <p class="paragraph__address">
            <a href="tel:<?= $telephone ?>">
                <?= $telephone ?>
            </a>
            <span>
                <?= $house_number . ' ' . $road . ', ' . $post_code ?>
            </span>
            <span>
                <a href="<?= $website['url'] ?>" taget="<?= $website['target'] ?>">
                    <?= $website['text'] ?>
                </a>
            </span>
        </p>
        <div class="paragraph--default">
            <?= $content ?>
        </div>
    </div>
</section>
