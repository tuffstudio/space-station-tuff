<?php
    $page_id = $post->ID;
    $page_fields = CFS() -> get(false, $page_id);
    $category_name = get_the_terms($page_id, 'address-book-category')[0]->name;
    $category_link = get_term_link($category_name, 'address-book-category');

    $telephone = $page_fields['ss_address_book_tel'];
    $website = $page_fields['ss_address_book_website'];
    $city = $page_fields['ss_address_book_city'];
    $post_code = $page_fields['ss_address_book_post_code'];
    $road = $page_fields['ss_address_book_road'];
    $house_number = $page_fields['ss_address_book_house_number'];

    $content = apply_filters('the_content', $post->post_content);
?>

<nav class="nav__secondary">
    <a href="<?= get_post_type_archive_link('address-book'); ?>" class="link--standard link--back">
        back to address book
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
        <h3 class="headline--small">
            <?php the_title(); ?>
        </h3>

        <p class="paragraph__address">
            <span>
                <?= $telephone ?>
            </span>
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
