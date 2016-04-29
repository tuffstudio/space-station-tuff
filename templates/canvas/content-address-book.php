<?php
    namespace Roots\Sage\ExcerptText;

    $taxonomy_categories = 'address-book-category';
    $taxonomy_localizations = 'address-book-localization';

    $current_category = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
    @$current_category_slug = $current_category->slug;
    @$current_localization_slug = $current_category->slug;

    if(!@$query_string) {
        $query_string = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : NULL;
    }

    if ($query_string) {
        $tax_category = '';
        $tax_localization = '';

        parse_str($query_string);

        $tax_query = array(
            'relation' => 'AND',
        );

        if ($tax_category) {
            $tmp = array(
                'taxonomy' => $taxonomy_categories,
                'field'    => 'slug',
                'terms'    => array($tax_category),
            );
            array_push($tax_query , $tmp);
            $current_category_slug = $tax_category;
        }
        if ($tax_localization) {
            $tmp = array(
                'taxonomy' => $taxonomy_localizations,
                'field'    => 'slug',
                'terms'    => array($tax_localization),
            );
            array_push($tax_query , $tmp);
            $current_localization_slug = $tax_localization;
        }

        $args = array(
            'post_type' => 'address-book',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'tax_query' => $tax_query,
        );

        $query = new \WP_Query( $args );
        $posts = $query->posts;
    }

?>

<nav class="nav__secondary">
    <div class="grid">
        <div class="grid__item tablet--one-half select__item">
            <select name="radius" placeholder="Where are you going?" class="js-address-book-localization">
                <option></option>
                <?php
                    $terms = get_terms($taxonomy_localizations);

                    foreach ($terms as $term) :
                        $option_slug = $term->slug;
                        $option_name = $term->name;
                ?>
                    <option value="<?= $option_slug ?>" <?php if ($current_localization_slug == $option_slug) echo 'selected';?>><?= $option_name ?></option>
                <?php
                    endforeach;
                ?>
            </select>
        </div><!--
        --><div class="grid__item tablet--one-half select__item">
            <select name="radius" placeholder="What are you looking for?" class="js-address-book-category">
                <option></option>
                <?php
                    $terms = get_terms($taxonomy_categories);

                    foreach ($terms as $term) :
                        $option_slug = $term->slug;
                        $option_name = $term->name;
                ?>
                    <option value="<?= $option_slug ?>" <?php if ($current_category_slug == $option_slug) echo 'selected';?>><?= $option_name ?></option>
                <?php
                    endforeach;
                ?>
            </select>
        </div>
    </div>
</nav>

<section class="business-directory__list">
    <div class="grid grid--full">
        <?php
            foreach ($posts as $post) :
                $page_id = $post->ID;
                $page_fields = CFS() -> get(false, $page_id);
                $category_name = get_the_terms($page_id, $taxonomy_categories)[0]->name;
                $category_link = get_term_link($category_name, $taxonomy_categories);

                $telephone = str_replace(' ', '', $page_fields['ss_address_book_tel']);
                $website = $page_fields['ss_address_book_website'];
                $city = $page_fields['ss_address_book_city'];
                $post_code = $page_fields['ss_address_book_post_code'];
                $road = $page_fields['ss_address_book_road'];
                $house_number = $page_fields['ss_address_book_house_number'];

                $text = getShortText($post->post_content, 100);
        ?><!--

        --><div class="grid__item tablet-small--one-half tablet--one-third">
            <div class="business-directory__item">
                <a href="<?= the_permalink() ?>" class="link--image animation--zoom">
                    <?php the_post_thumbnail('medium', array( 'class' => 'img--responsive') ); ?>
                </a>
                <p class="section__category">
                    <a href="<?= $category_link ?>">
                        <?= $category_name ?>
                    </a>
                </p>
                <a href="<?= the_permalink() ?>" class="link--standard">
                    <h3 class="headline--small">
                        <?php the_title($page_id); ?>
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
    </div>
</section>
<div class="pagination <?php if(get_next_posts_link() || get_previous_posts_link()) echo 'pagination--border' ?>">
    <div class="grid grid--full">
        <div class="grid__item one-half u--align-left">
            <?php previous_posts_link(); ?>
        </div><!--
        --><div class="grid__item one-half u--align-right">
            <?php next_posts_link(); ?>
        </div>
    </div>
</div>
