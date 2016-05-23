<?php
    $is_buy = isset($_GET['type']) && $_GET['type'] == 'buy' ? true : false;
    $is_rent = isset($_GET['type']) && $_GET['type'] == 'rent' ? true : false;
    $is_let = isset($_GET['type']) && $_GET['type'] == 'short-let' ? true : false;

    switch ($_GET['type']) {
        case 'buy':
            $recordtypes ="sale";
            break;

        case 'rent':
            $recordtypes ="rent";
            break;

        case 'short-let':
            $recordtypes ="let";
            break;
        
        default:
            $recordtypes ="sale;rent";
            break;
    }
?>

<div class="search-page__header">
    <div class="container">
        <div class="grid grid--full">
            <div class="grid__item tablet--one-half">
                <h2 class="title--main">Find a Property</h2>
            </div><!--
            --><div class="grid__item tablet--one-half u--align-right">
                <a href="#newsletter" class="link--italic">
                    <span class="icon icon-notice"></span> Sign up now for new property alerts
                </a>
            </div>
        </div>
    </div>
</div>

<?php require_once ('property_base/pb_search_request.php'); ?>
<?php include 'templates/searchpage/tabs.php'; ?>

<section class="section search-results">
    <div class="container--mobile-full container">
        <div class="search-results__nav">
            <div class="grid grid--full grid--middle">
                <div class="grid__item desktop--one-half">
                    <h3 class="title--default">Properties for sale</h3>
                    <label for="rent-input" class="link--italic sold-input input-types js-switch-type <?= $is_buy ? 'active': ''; ?>" data-input="rent-input">Switch to Rent</label>
                    <label for="buy" class="link--italic rent-input input-types js-switch-type <?= $is_rent ? 'active': ''; ?>" data-input="sold-input">Switch to Buy</label>
                </div><!--
                --><div class="grid__item view-nav__container desktop--one-half">
                    <ul class="view-nav sort-nav">
                        <li class="view-nav__item sort-nav__item dropdown">
                            <a href="#">per page</a>
                            <ul class="dropdown__container">
                                <li class="dropdown__item">
                                    <a href="#">10</a>
                                </li>
                                <li class="dropdown__item">
                                    <a href="#">20</a>
                                </li>
                                <li class="dropdown__item">
                                    <a href="#">All</a>
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
                            <a href="#dynamic-view" class="active js-grid-switcher js-smooth-off">dynamic view</a>
                        </li><!--
                        --><li class="view-nav__item">
                            <a href="#grid-view" class="js-grid-switcher js-smooth-off">grid view</a>
                        </li><!--
                        --><li class="view-nav__item">
                            <a href="#map-view" class="js-grid-switcher js-map-switch js-smooth-off">map view</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="search-results__body">

            <?php // BEGIN EMPTY RESULT ?>
                <?php if ($doSearch  && ($xmlResult == null || count($xmlResult->listings->listing) == 0)) : ?>
                    <div class="alert alert-warning">
                        <?php _e('Sorry, no results were found.', 'sage'); ?>
                    </div>
                <?php else : ?>
            <?php //END EMPTY RESULT ?>

            <div id="dynamic-view" class="search-results__block js-results-block visible">
                <div class="search-results--dynamic">
                    <?php include 'templates/searchpage/dynamic-view.php'; ?>
                </div>
            </div>

            <div id="grid-view" class="search-results__block js-results-block">
                <div class="grid">
                    <?php foreach ($xmlResult->listings->listing as $item) : ?><!--
                    --><div class="grid__item tablet-small--one-half desktop--one-third masonry__box">
                            <?php include('templates/components/property-box.php'); ?>
                        </div><!--
                    --><?php endforeach;?>
                </div>
            </div>

            <div id="map-view" class="search-results__block js-results-block">
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

            <?php endif; ?>

        </div>
    </div>
</section>

<?#php the_posts_navigation(); ?>

<?php include('templates/homepage/stay-in-touch.php'); ?>
