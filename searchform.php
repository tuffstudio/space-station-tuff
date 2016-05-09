<form action="" id="searchform" method="get">
    <div class="grid grid--full">
        <div class="grid__item input-container">
            <input type="search" id="search" class="input-search" name="s" placeholder="Location or postcode" />
            <i class="find-location icon icon-target js-find-location"></i>
        </div><!--
        --><div class="grid__item">
            <div class="grid__item desktop--one-half input-container">
                <?php // TODO: Input names, values etc are just temporary. Waiting for integration with SalesForce. ?>
                <select name="radius" placeholder="Search radius">
                    <option></option>
                    <option value="0.25">0.25 miles</option>
                    <option value="0.50">0.50 miles</option>
                    <option value="0.75">0.75 miles</option>
                    <option value="1.00">1.00 miles</option>
                    <option value="1.50">1.50 miles</option>
                    <option value="2.00">2.00 miles</option>
                    <option value="2.50">2.50 miles</option>
                    <option value="3.00">3.00 miles</option>
                    <option value="3.00+">3.00+ miles</option>
                </select>

                <select name="property_type" placeholder="property type">
                    <option></option>
                    <option value="foo">foo</option>
                    <option value="bar">bar</option>
                    <option value="foobar">foobar</option>
                </select>
            </div><!--
            --><div class="grid__item desktop--one-half input-container">
                <div class="grid__item desktop--one-half input-container--right">
                    <select name="min_price" placeholder="min price">
                        <option></option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                    </select>
                </div><!--
                --><div class="grid__item desktop--one-half input-container--left">
                    <select name="max_price" placeholder="max price">
                        <option></option>
                        <option value="20000">20000</option>
                        <option value="25000">25000</option>
                        <option value="134000">134000</option>
                    </select>
                </div><!--
                --><div class="grid__item">
                    <select name="bedrooms" placeholder="Bedrooms">
                        <option></option>
                        <option value="2">2</option>
                        <option value="4">4</option>
                        <option value="5">5<</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="search-form__submit">
        <div class="grid">
            <div class="grid__item desktop--one-half">
                <div class="search-form__labels">
                    <span>Include:</span>
                    <label for="offer">Under offer</label>
                    <input id="offer" name="under-offer" type="checkbox" value="true" class="input-checkbox">
                    <span class="sold-input input-types <?= $is_buy ? 'active': ''; ?>">
                        <label for="sold">Sold</label>
                        <input id="sold" name="sold" type="checkbox" value="true" class="input-checkbox">
                    </span>
                    <span class="rent-input input-types <?= $is_rent ? 'active': ''; ?>">
                        <label for="rent">Rent</label>
                        <input id="rent" name="rent" type="checkbox" value="true" class="input-checkbox">
                    </span>
                    <input id="buy" class="input--hidden" type="radio" name="type" value="buy">
                    <input id="rent-input" class="input--hidden" type="radio" name="type" value="rent">
                    <input id="short-let" class="input--hidden" type="radio" name="type" value="short-let">
                </div>
            </div><!--
            --><div class="grid__item desktop--one-half u--align-right input-container">
                <button type="submit" class="btn btn--submit">Search</button>
            </div>
        </div>
    </div>
</form>
