<div class="search-page__header">
    <div class="container">
        <div class="grid grid--full">
            <div class="grid__item tablet--one-half">
                <h2 class="title--main">Find a Property</h2>
            </div><!--
            --><div class="grid__item tablet--one-half u--align-right">
                <a href="#" class="link--italic js-newsletter-jump">
                    <span class="icon icon-notice"></span> Sign up now for new property alerts
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('templates/searchpage/tabs'); ?>

<section class="section search-results">
    <div class="container">
        <div class="search-results__nav">
            <div class="grid grid--full grid--middle">
                <div class="grid__item desktop--one-half">
                    <h3 class="title--default">Properties for sale</h3>
                    <a href="#" class="link--italic">Switch to Rent</a>
                </div><!--
                --><div class="grid__item u--align-right desktop--one-half">
                    <ul class="view-nav sort-nav">
                        <li class="view-nav__item sort-nav__item dropdown">
                            <a href="#">per page</a>
                            <ul class="dropdown__container">
                                <li class="dropdown__item">
                                    <a href="#">Ascending</a>
                                </li>
                                <li class="dropdown__item">
                                    <a href="#">Descending</a>
                                </li>
                            </ul>
                        </li>
                        <li class="view-nav__item sort-nav__item dropdown">
                            <a href="#">sort by</a>
                            <ul class="dropdown__container">
                                <li class="dropdown__item">
                                    <a href="#">Name</a>
                                </li>
                                <li class="dropdown__item">
                                    <a href="#">City</a>
                                </li>
                                <li class="dropdown__item">
                                    <a href="#">Price</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="view-nav">
                        <li class="view-nav__item">
                            <a href="#dynamic-view" class="js-grid-switcher">dynamic view</a>
                        </li>
                        <li class="view-nav__item">
                            <a href="#grid-view" class="js-grid-switcher">grid view</a>
                        </li>
                        <li class="view-nav__item">
                            <a href="#map-view" class="active js-grid-switcher">map view</a>
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
                    <?php else : ?>
                        <?php // FIXME: Code duplication!!! ?>
                        <div class="alert alert-warning">
                          <?php _e('Sorry, no results were found.', 'sage'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div id="grid-view" class="search-results__block js-results-block">
                <div class="search-results--grid">
                    <?php if(have_posts()): ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php get_template_part('templates/searchpage/grid', 'view'); ?>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <div class="alert alert-warning">
                          <?php _e('Sorry, no results were found.', 'sage'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div id="map-view" class="search-results__block js-results-block visible">
                <div class="search-results--map">
                    <?php if (have_posts()) : the_post(); ?>
                        <?php get_template_part('templates/searchpage/map', 'view'); ?>
                    <?php else : ?>
                        <div class="alert alert-warning">
                          <?php _e('Sorry, no results were found.', 'sage'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?#php the_posts_navigation(); ?>

<?php include('templates/homepage/stay-in-touch.php'); ?>
