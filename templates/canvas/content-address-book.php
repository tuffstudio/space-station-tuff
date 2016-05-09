<?php
    $taxonomy_categories = 'address-book-category';
    $taxonomy_localizations = 'address-book-localization';

    $current_category = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
    @$current_category_slug = $current_category->slug;
    @$current_localization_slug = $current_category->slug;

    if(!@$query_string) {
        $query_string = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : NULL;
    }

    parse_str($query_string, $query_array);

    if (isset($query_array['tax_category'])) {
        $current_category_slug = $query_array['tax_category'];
    }
    if (isset($query_array['tax_localization'])) {
        $current_localization_slug = $query_array['tax_localization'];
    }
?>

<nav class="nav__secondary">
    <div class="grid">
        <div class="grid__item tablet--one-half select__item">
            <select name="radius" placeholder="Where are you going?" class="js-address-book-localization">
                <option></option>
                <option value="all" <?php if ($current_localization_slug == "all") echo 'selected';?>>All</option>
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
                <option value="all" <?php if ($current_localization_slug == "all") echo 'selected';?>>All</option>
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
    <div class="grid grid--full js-address-book">

        <?php include dirname(__FILE__) . '/ajax-address-book.php'; ?>

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
