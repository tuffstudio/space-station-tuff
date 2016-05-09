<?php
    namespace Roots\Sage\ExcerptText;

    $taxonomy_categories = 'address-book-category';
    $taxonomy_localizations = 'address-book-localization';

    if(!@$query_string) {
        $query_string = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : NULL;
    }

    $query_string = str_replace('?', '', $query_string);
    parse_str($query_string, $query_array);

    $tax_query = array(
        'relation' => 'AND',
    );

    if (isset($query_array['tax_category']) &&  $query_array['tax_category'] != "all") {
        $tmp = array(
            'taxonomy' => $taxonomy_categories,
            'field'    => 'slug',
            'terms'    => array($query_array['tax_category']),
        );
        array_push($tax_query , $tmp);
    }
    if (isset($query_array['tax_localization']) &&  $query_array['tax_localization'] != "all") {
        $tmp = array(
            'taxonomy' => $taxonomy_localizations,
            'field'    => 'slug',
            'terms'    => array($query_array['tax_localization']),
        );
        array_push($tax_query , $tmp);
    }

    $args = array(
        'post_type' => 'address-book',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'tax_query' => $tax_query,
    );

    $query = new \WP_Query( $args );
    $posts = $query->posts;

    foreach ($posts as $post) :
        $page_id = $post->ID;
        $page_fields = CFS() -> get(false, $page_id);
        $category_name = get_the_terms($page_id, $taxonomy_categories)[0]->name;
        $category_link = '?tax_category=' . get_the_terms($page_id, $taxonomy_categories)[0]->slug;

        $telephone = str_replace(' ', '', $page_fields['ss_address_book_tel']);
        $website = $page_fields['ss_address_book_website'];
        $post_code = $page_fields['ss_address_book_post_code'];
        $road = $page_fields['ss_address_book_road'];
        $house_number = $page_fields['ss_address_book_house_number'];

        $text = getShortText($post->post_content, 100);
?><!--

--><div class="grid__item tablet-small--one-half tablet--one-third">
    <div class="business-directory__item">
        <a href="<?= the_permalink() ?>" class="link--image animation--zoom">
            <?= get_the_post_thumbnail($page_id, 'medium', array( 'class' => 'img--responsive') ); ?>
        </a>
        <p class="section__category">
            <a href="<?= $category_link ?>">
                <?= $category_name ?>
            </a>
        </p>
        <a href="<?= the_permalink() ?>" class="link--standard">
            <h3 class="headline--small">
                <?= get_the_title($page_id); ?>
            </h3>
        </a>

        <p class="paragraph__address">
            <a href="tel:<?= $telephone ?>">
                <?= $telephone ?>
            </a>
            <span>
                <?= $house_number . ' ' . $road . ', ' . $post_code ?>
            </span>
            <span>
                <a href="<?= $website['url'] ?>" target="<?= $website['target'] ?>">
                    <?= $website['text'] ?>
                </a>
            </span>
        </p>

        <p class="business-directory__description">
            <?= $text ?>
        </p>
    </div>
</div><!--

--><?php
    endforeach;
?>
