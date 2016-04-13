<?php
    namespace Roots\Sage\ExcerptText;

    $taxonomy_address_book = 'address-book-category';

    $current_category = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
    @$current_category_slug = $current_category->slug;
?>

<nav class="nav__secondary">
    <div class="grid">
        <div class="grid__item tablet--one-half select__item">
            <select name="radius" placeholder="Where are you going?">
                <option></option>
                <option value="0">This is category?</option>
            </select>
        </div><!--
        --><div class="grid__item tablet--one-half select__item">
            <select name="radius" placeholder="What are you looking for?">
                <option></option>
                <?php
                    $terms = get_terms($taxonomy_address_book);

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
                $page_fields = CFS() -> get(false, $page_id);
                $category_name = get_the_terms($page_id, $taxonomy_address_book)[0]->name;
                $category_link = get_term_link($category_name, $taxonomy_address_book);

                $telephone = $page_fields['ss_address_book_tel'];
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
                    Directory:
                    <a href="<?= $category_link ?>">
                        <?= $category_name ?>
                    </a>
                </p>
                <a href="<?= the_permalink() ?>" class="link--standard">
                    <h3 class="headline--small">
                        <?php the_title(); ?>
                    </h3>
                </a>

                <p class="paragraph__address">
                    <span>
                        <?= $telephone ?>
                    </span>
                    <span>
                        <?= $house_number . ' ' . $road . ', ' . $post_code ?>
                    </span>
                    <span>
                        <a href="<?= $website['url'] ?>" target="<?= $website['target'] ?>">
                            <?= $website['text'] ?>
                        </a>
                    </span>
                </p>

                <p>
                    <?= $text ?>
                </p>
            </div>
        </div><!--

        --><?php
            endforeach;
        ?>
    </div>
</section>
