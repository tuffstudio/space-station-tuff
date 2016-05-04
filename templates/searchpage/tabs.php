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
                                <label for="buy" class="btn btn--switcher js-switch-type sold-input <?= $is_buy ? 'active' : ''; ?>" data-input="sold-input">buy</label>
                            </div>
                            <div class="search-tab__side-menu__item">
                                <label for="rent-input" class="btn btn--switcher js-switch-type rent-input <?= $is_rent ? 'active' : ''; ?>" data-input="rent-input">rent</label>
                            </div>
                            <div class="search-tab__side-menu__item">
                                <label for="short-let" class="btn btn--switcher js-switch-type <?= $is_let ? 'active' : ''; ?>">short let</label>
                            </div>
                        </div>
                    </div><!--
                    --><div class="grid__item desktop--three-fifths">
                        <?php include dirname(__FILE__) . '/../../searchform.php'; ?>
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
