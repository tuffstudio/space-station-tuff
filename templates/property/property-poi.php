<?php
    use Roots\Sage\MagazinePost;

    $property_tags = $item->data->explore_the_neighbourhood__c;
    $change = array(';', ' ');
    $into = array(',', '-');
    $tags = str_replace($change, $into, $property_tags);

    $args = array(
        'post_type' => 'address-book',
        'tag' => strtolower($tags),
        'post_status' => 'publish',
        'posts_per_page' => -1
    );

    $query = new WP_Query($args);
?>

<?php if($query->have_posts()) : ?>
    <section class="property__section property__neighbourhood">
        <div class="container">
            <div class="grid grid--full">
                <div class="grid__item desktop--one-quarter">
                    <h3 class="section__title section__title--small">Explore the neighbourhood</h3>
                </div><!--
                --><div class="grid__item desktop--three-quarters">
                    <div class="property__carousel">
                        <div class="property__poi owl-carousel">
                            <?php
                                while($query->have_posts()) :
                                    $query->the_post();
                                    $post_id = $post->ID;

                                    $address_book = new MagazinePost\AddressBook($post_id);
                            ?>
                                <a href="<?= $address_book->get_link(); ?>" class="property__poi-link">
                                    <div class="property__poi-image">
                                        <?= $address_book->get_image('square_small'); ?>
                                    </div>
                                    <div class="single-result__info single-result__info--transparent">
                                        <p class="masonry__tile-category">
                                            Neighbourhood: <span>Fashion</span>
                                        </p>
                                        <h3 class="masonry__tile-title property__poi-title">
                                            <?= $address_book->get_title(); ?>
                                        </h3>
                                        <p class="masonry__tile-desc property__poi-desc">
                                            <?= $address_book->get_excerpt(80); ?>
                                        </p>
                                    </div>
                                </a>
                            <?php
                                wp_reset_postdata();
                                endwhile;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
