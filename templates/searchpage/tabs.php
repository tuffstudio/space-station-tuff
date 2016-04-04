<section class="search-form">
    <div class="container">
        <div class="grid grid--full">
            <div class="grid__item tablet--one-third">
                <a href="#residential" class="search-tab__head js-tab-switcher active">Residental</a>
            </div><!--
            --><div class="grid__item tablet--one-third">
                <a href="/commercial" class="search-tab__head">Commercial</a>
            </div>
        </div>
        <div class="search-tab__body">
            <div id="residential" class="search-results__block js-tab-panel visible">
                <div class="grid grid--full">
                    <div class="grid__item desktop--one-third">
                        <div class="search-tab__side-menu">
                            <div class="search-tab__side-menu__item">
                                <button class="btn btn--switcher active">buy</button>
                            </div>
                            <div class="search-tab__side-menu__item">
                                <button class="btn btn--switcher">rent</button>
                            </div>
                            <div class="search-tab__side-menu__item">
                                <button class="btn btn--switcher">short let</button>
                            </div>
                        </div>
                    </div><!--
                    --><div class="grid__item desktop--three-fifths">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>

            <div id="commercial" class="search-results__block js-tab-panel">
                commercial
            </div>

            <div id="holidays" class="search-results__block js-tab-panel">
                holidays
            </div>
        </div>
    </div>
</section>
