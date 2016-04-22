<div class="background--skew background--skew-half">
    <section class="section">
        <div class="container">
            <h2 class="title--main">
                <?php the_title(); ?>
            </h2>

            <div class="sitemap-container">
                <h2>Pages</h2>
                <ul>
                    <?php
                        // Add pages you'd like to exclude in the exclude here
                        wp_list_pages(
                            array(
                                'exclude' => '',
                                'title_li' => '',
                            )
                        );
                    ?>
                </ul>

                <h2>Posts</h2>
                <ul>
                    <?php
                        $categories = get_categories();
                        foreach ($categories as $cat) {
                            echo "<li><h3><a href=" . get_category_link($cat->cat_ID) . ">".$cat->cat_name."</a></h3>";
                            echo "<ul>";
                            query_posts('posts_per_page=-1&cat='.$cat->cat_ID);
                            while(have_posts()) {
                                the_post();
                                $category = get_the_category();

                                if ($category[0]->cat_ID == $cat->cat_ID) {
                                    echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
                                }
                            }
                            echo "</ul>";
                            echo "</li>";
                        }
                    ?>
                </ul>
                <?php
                    $post_types = get_post_types( array('public' => true) );
                    foreach( $post_types as $post_type ) {
                        if ( !in_array( $post_type, array('post','page','attachment') ) ) {
                            $single_post_type = get_post_type_object( $post_type );

                            echo '<h2>' . $single_post_type->labels->name . '</h2>';
                            echo '<ul>';

                            query_posts('post_type=' . $post_type . '&posts_per_page=-1');

                            while( have_posts() ) {
                                the_post();
                                echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                            }

                            echo '</ul>';
                        }
                    }
                ?>
            </div>
        </div>
    </section>
</div>



<?php include 'homepage/stay-in-touch.php'; ?>
