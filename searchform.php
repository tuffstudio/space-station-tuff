<form action="" id="searchform" method="get">
    <div class="grid grid--full">
        <div class="grid__item input-container">
            <input type="search" id="s" class="input-search" name="location" placeholder="Location or postcode" />
        </div><!--
        --><div class="grid__item">
            <div class="grid__item desktop--one-half input-container">
                <?php // TODO: Input names, values etc are just temporary. Waiting for integration with SalesForce. ?>
                <select name="radius" placeholder="Search radius">
                    <option></option>
                    <option value="10-15">10-15</option>
                    <option value="16-20">16-20</option>
                    <option value="21-25">21-25</option>
                </select>

                <select class="" name="type" placeholder="property type">
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

    <div class="grid">
        <div class="grid__item desktop--one-half">
            <div class="search-form__labels">
                <span>Include:</span>
                <label for="offer">Under offer</label>
                <input id="offer" name="under-offer" type="checkbox" />
                <label for="sold">Sold</label>
                <input id="sold" name="sold" type="checkbox" />
            </div>
        </div><!--
        --><div class="grid__item desktop--one-half u--align-right input-container">
            <button type="submit" class="btn btn--submit">Search</button>
        </div>
    </div>
</form>
