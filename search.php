
<?php get_template_part('templates/searchpage/tabs'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
<?php endif; ?>

<section class="section search-results">
    <div class="container">
        <div class="search-results__nav">
            <div class="grid grid--full grid--middle">
                <div class="grid__item desktop--one-half">
                    <h3 class="search-results__title">Properties for sale</h3>
                </div><!--
                --><div class="grid__item u--align-right desktop--one-half">
                    <ul class="view-nav sort-nav">
                        <li class="view-nav__item sort-nav__item">
                            <a href="#">per page v</a>
                        </li>
                        <li class="view-nav__item sort-nav__item">
                            <a href="#">sort by v</a>
                        </li>
                    </ul>
                    <ul class="view-nav">
                        <li class="view-nav__item">
                            <a href="#dynamic-view" class="js-grid-switcher">dynamic view</a>
                        </li>
                        <li class="view-nav__item">
                            <a href="#grid-view" class="active js-grid-switcher">grid view</a>
                        </li>
                        <li class="view-nav__item">
                            <a href="#map-view" class="js-grid-switcher">map view</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="search-results__body">
            <div id="dynamic-view" class="search-results__block js-results-block">
                <div class="search-results--dynamic">
                    <?php if (have_posts()) : the_post(); ?>
                        <?php get_template_part('templates/searchpage/dynamic', 'view'); ?>
                    <?php endif; ?>
                </div>
            </div>

            <div id="grid-view" class="search-results__block js-results-block visible">
                <div class="search-results--grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('templates/searchpage/grid', 'view'); ?>
                    <?php endwhile; ?>
                </div>
            </div>

            <div id="map-view" class="search-results__block js-results-block">
                <div class="search-results--map">
                    <?php if (have_posts()) : the_post(); ?>
                        <?php get_template_part('templates/searchpage/map', 'view'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?#php the_posts_navigation(); ?>

<?php include('templates/homepage/stay-in-touch.php'); ?>
