<div class="background--skew background--skew-half">
    <section class="section">
        <div class="container">
            <h2 class="title--main">
                <?php the_title(); ?>
            </h2>

            <div class="sitemap-container">
                <h2>Pages</h2>
                <ul>
                    <?php wp_list_pages(); ?>
                    <li>
                        <a href="<?= get_home_url(); ?>/?s=&type=buy">Find a property - buy</a>
                    </li>
                    <li>
                        <a href="<?= get_home_url(); ?>/?s=&type=rent">Find a property - rent</a>
                    </li>
                </ul>

                <div class="text--no-break">
                    <h2>
                        Posts
                    </h2>
                    <ul>
                        <?php
                            $categories = get_categories();
                            foreach ($categories as $cat) :
                        ?>
                            <li>
                                <h3>
                                    <a href="<?php get_category_link($cat->cat_ID) ?>"><?= $cat->cat_name ?></a>
                                </h3>
                                <ul>
                                    <?php
                                        $args = array(
                                            'cat' => $cat->cat_ID,
                                            'posts_per_page' => -1
                                        );
                                        query_posts($args);

                                        while(have_posts()) :
                                            the_post();
                                            $category = get_the_category();

                                            if ($category[0]->cat_ID == $cat->cat_ID) :
                                    ?>
                                        <li>
                                            <a href="<?= get_permalink(); ?>"><?= get_the_title() ?></a>
                                        </li>
                                    <?php endif; endwhile; ?>
                                </ul>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <?php
                    $post_types = get_post_types( array('public' => true) );

                    foreach($post_types as $post_type) :
                        if (!in_array($post_type, array('post','page','attachment'))) :
                            $single_post_type = get_post_type_object( $post_type );
                ?>
                    <h2><?= $single_post_type->labels->name ?></h2>
                    <ul>
                        <?php
                            $args = array(
                                'post_type' => $post_type,
                                'posts_per_page' => -1
                            );
                            query_posts($args);

                            while( have_posts() ) :
                                the_post();
                        ?>
                            <li>
                                <a href="<?= get_permalink() ?>"><?= get_the_title() ?></a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; endforeach;?>
            </div>
        </div>
    </section>
</div>

<?php include 'homepage/stay-in-touch.php'; ?>
