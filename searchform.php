<form action="" id="searchform" method="post">
    <div class="grid grid--full">
        <div class="grid__item input-container">
            <input type="search" id="search" class="input-search" name="reference" value="<?php echo $reference;?>" placeholder="Location or postcode" />
            <i class="find-location icon icon-target js-find-location"></i>
        </div><!--
        --><div class="grid__item">
            <div class="grid__item desktop--one-half input-container">
                <select name="radius" placeholder="Search radius">
                    <option></option>
                    <option value="0.0140625">0.25 miles</option>
                    <option value="0.028125">0.50 miles</option>
                    <option value="0.0421875">0.75 miles</option>
                    <option value="0.05625">1.00 miles</option>
                    <option value="0.084375">1.50 miles</option>
                    <option value="0.1125">2.00 miles</option>
                    <option value="0.140625">2.50 miles</option>
                    <option value="0.16875">3.00 miles</option>
                    <option value="56.25">3.00+ miles</option>
                </select>

                <select name="propertytype" placeholder="property type" id="property_type">
                    <option value="any">property type</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Chalet">Chalet</option>
                    <option value="Commercial">Commercial</option>
                    <option value="Detached">Detached</option>
                    <option value="End Terrace">End Terrace</option>
                    <option value="House">House</option>
                    <option value="Land">Land</option>
                    <option value="Loft">Loft</option>
                    <option value="Maisonette">Maisonette</option>
                    <option value="Mews House">Mews House</option>
                    <option value="Other">Other</option>
                    <option value="Penthouse">Penthouse</option>
                    <option value="Semi-detached">Semi-detached</option>
                    <option value="Studio">Studio</option>
                    <option value="Terraced">Terraced</option>
                    <option value="Townhouse">Townhouse</option>
                    <option value="Villa">Villa</option>
                </select>
            </div><!--
            --><div class="grid__item desktop--one-half input-container">

                <!-- ### DETECT CURRENT RECORD TYPE ### -->

                <!-- IF RENT -->
                <?php if (isset($recordtypes) && ($recordtypes == 'rent') ) : ?>

                <div class="grid__item desktop--one-half input-container--right">
                    <select name="rent_from" placeholder="min rent" id="rent_from">
                        <option value="0">Min rent</option>
                        <option value="300">&#163;300 <?php echo '(&#163;'. number_format((float)(300*52)/12) .'/month)'; ?></option>
                        <option value="350">&#163;350 <?php echo '(&#163;'. number_format((float)(350*52)/12) .'/month)'; ?></option>
                        <option value="400">&#163;400 <?php echo '(&#163;'. number_format((float)(400*52)/12) .'/month)'; ?></option>
                        <option value="450">&#163;450 <?php echo '(&#163;'. number_format((float)(450*52)/12) .'/month)'; ?></option>
                        <option value="500">&#163;500 <?php echo '(&#163;'. number_format((float)(500*52)/12) .'/month)'; ?></option>
                        <option value="550">&#163;550 <?php echo '(&#163;'. number_format((float)(550*52)/12) .'/month)'; ?></option>
                        <option value="600">&#163;600 <?php echo '(&#163;'. number_format((float)(600*52)/12) .'/month)'; ?></option>
                        <option value="650">&#163;650 <?php echo '(&#163;'. number_format((float)(650*52)/12) .'/month)'; ?></option>
                        <option value="700">&#163;700 <?php echo '(&#163;'. number_format((float)(700*52)/12) .'/month)'; ?></option>
                        <option value="750">&#163;750 <?php echo '(&#163;'. number_format((float)(750*52)/12) .'/month)'; ?></option>
                        <option value="800">&#163;800 <?php echo '(&#163;'. number_format((float)(800*52)/12) .'/month)'; ?></option>
                        <option value="1000">&#163;1,000 <?php echo '(&#163;'. number_format((float)(1000*52)/12) .'/month)'; ?></option>
                        <option value="1500">&#163;1,500 <?php echo '(&#163;'. number_format((float)(1500*52)/12) .'/month)'; ?></option>
                        <option value="2000">&#163;2,000 <?php echo '(&#163;'. number_format((float)(2000*52)/12) .'/month)'; ?></option>
                        <option value="2500">&#163;2,500 <?php echo '(&#163;'. number_format((float)(2500*52)/12) .'/month)'; ?></option>
                        <option value="3000">&#163;3,000 <?php echo '(&#163;'. number_format((float)(3000*52)/12) .'/month)'; ?></option>
                    </select>
                </div><!--
                --><div class="grid__item desktop--one-half input-container--left">
                    <select name="rent_to" placeholder="max rent" id="rent_to">
                        <option value="0">Max rent</option>
                        <option value="300">&#163;300 <?php echo '(&#163;'. number_format((float)(300*52)/12) .'/month)'; ?></option>
                        <option value="350">&#163;350 <?php echo '(&#163;'. number_format((float)(350*52)/12) .'/month)'; ?></option>
                        <option value="400">&#163;400 <?php echo '(&#163;'. number_format((float)(400*52)/12) .'/month)'; ?></option>
                        <option value="450">&#163;450 <?php echo '(&#163;'. number_format((float)(450*52)/12) .'/month)'; ?></option>
                        <option value="500">&#163;500 <?php echo '(&#163;'. number_format((float)(500*52)/12) .'/month)'; ?></option>
                        <option value="550">&#163;550 <?php echo '(&#163;'. number_format((float)(550*52)/12) .'/month)'; ?></option>
                        <option value="600">&#163;600 <?php echo '(&#163;'. number_format((float)(600*52)/12) .'/month)'; ?></option>
                        <option value="650">&#163;650 <?php echo '(&#163;'. number_format((float)(650*52)/12) .'/month)'; ?></option>
                        <option value="700">&#163;700 <?php echo '(&#163;'. number_format((float)(700*52)/12) .'/month)'; ?></option>
                        <option value="750">&#163;750 <?php echo '(&#163;'. number_format((float)(750*52)/12) .'/month)'; ?></option>
                        <option value="800">&#163;800 <?php echo '(&#163;'. number_format((float)(800*52)/12) .'/month)'; ?></option>
                        <option value="1000">&#163;1,000 <?php echo '(&#163;'. number_format((float)(1000*52)/12) .'/month)'; ?></option>
                        <option value="1500">&#163;1,500 <?php echo '(&#163;'. number_format((float)(1500*52)/12) .'/month)'; ?></option>
                        <option value="2000">&#163;2,000 <?php echo '(&#163;'. number_format((float)(2000*52)/12) .'/month)'; ?></option>
                        <option value="2500">&#163;2,500 <?php echo '(&#163;'. number_format((float)(2500*52)/12) .'/month)'; ?></option>
                        <option value="3000">&#163;3,000 <?php echo '(&#163;'. number_format((float)(3000*52)/12) .'/month)'; ?></option>
                        <option value="3500">&#163;3,500 <?php echo '(&#163;'. number_format((float)(3500*52)/12) .'/month)'; ?></option>
                        <option value="4000">&#163;4,000 <?php echo '(&#163;'. number_format((float)(4000*52)/12) .'/month)'; ?></option>
                        <option value="4500">&#163;4,500 <?php echo '(&#163;'. number_format((float)(4500*52)/12) .'/month)'; ?></option>
                        <option value="5000">&#163;5,000 <?php echo '(&#163;'. number_format((float)(5000*52)/12) .'/month)'; ?></option>
                    </select>
                </div>

                <!-- DEFAULT -->
                <?php else : ?>

                <div class="grid__item desktop--one-half input-container--right">
                    <select name="price_from" placeholder="min price" id="price_from">
                        <option value="0">No Min</option>
                        <option value="500000">&#163;500,000</option>
                        <option value="550000">&#163;550,000</option>
                        <option value="600000">&#163;600,000</option>
                        <option value="650000">&#163;650,000</option>
                        <option value="700000">&#163;700,000</option>
                        <option value="750000">&#163;750,000</option>
                        <option value="800000">&#163;800,000</option>
                        <option value="900000">&#163;900,000</option>
                        <option value="1000000">&#163;1,000,000</option>
                        <option value="1100000">&#163;1,100,000</option>
                        <option value="1200000">&#163;1,200,000</option>
                        <option value="1300000">&#163;1,300,000</option>
                        <option value="1400000">&#163;1,400,000</option>
                        <option value="1500000">&#163;1,500,000</option>
                        <option value="1750000">&#163;1,750,000</option>
                        <option value="2000000">&#163;2,000,000</option>
                        <option value="2500000">&#163;2,500,000</option>
                    </select>
                </div><!--
                --><div class="grid__item desktop--one-half input-container--left">
                    <select name="price_to" placeholder="max price" id="price_to">
                        <option value="0">No Max</option>
                        <option value="500000">&#163;500,000</option>
                        <option value="550000">&#163;550,000</option>
                        <option value="600000">&#163;600,000</option>
                        <option value="650000">&#163;650,000</option>
                        <option value="700000">&#163;700,000</option>
                        <option value="750000">&#163;750,000</option>
                        <option value="800000">&#163;800,000</option>
                        <option value="900000">&#163;900,000</option>
                        <option value="1000000">&#163;1,000,000</option>
                        <option value="1100000">&#163;1,100,000</option>
                        <option value="1200000">&#163;1,200,000</option>
                        <option value="1300000">&#163;1,300,000</option>
                        <option value="1400000">&#163;1,400,000</option>
                        <option value="1500000">&#163;1,500,000</option>
                        <option value="1750000">&#163;1,750,000</option>
                        <option value="2000000">&#163;2,000,000</option>
                        <option value="2500000">&#163;2,500,000</option>
                        <option value="3000000">&#163;3,000,000</option>
                        <option value="3500000">&#163;3,500,000</option>
                        <option value="4000000">&#163;4,000,000</option>
                        <option value="4500000">&#163;4,500,000</option>
                        <option value="5000000">&#163;5,000,000</option>
                    </select>
                </div>

                <?php endif; ?>

                <div class="grid__item">
                    <select name="bedrooms_from" placeholder="Bedrooms" id="bedrooms_from">
                        <option value="0">Bedrooms Any</option>
                        <option value="1">1+</option>
                        <option value="2">2+</option>
                        <option value="3">3+</option>
                        <option value="4">4+</option>
                        <option value="5">5+</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="search-form--hide">
        <select name="orderby" placeholder="orderby" id="orderby">
            <option value="0">orderby</option>
            <option value="1">min price</option>
            <option value="2">max price</option>
        </select>
    </div>

    <div class="search-form__submit">
        <div class="grid">
            <div class="grid__item desktop--one-half">
                <div class="search-form__labels">
                    <span>Include:</span>
                    <input id="offer" name="under-offer" type="checkbox" value="true" class="input-checkbox">
                    <label for="offer">Under offer</label>
                    <span class="sold-input input-types <?= $is_buy ? 'active': ''; ?>">
                        <input id="sold" name="sold" type="checkbox" value="true" class="input-checkbox">
                        <label for="sold">Sold</label>
                    </span>
                    <span class="rent-input input-types <?= $is_rent ? 'active': ''; ?>">
                        <input id="rent" name="rent" type="checkbox" value="true" class="input-checkbox">
                        <label for="rent">Rent</label>
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

<script type="text/javascript">
    document.getElementById('price_from').value=<?php echo($price_from) ?>;
    document.getElementById('price_to').value=<?php echo($price_to) ?>;

    <?php
        if (!empty($default_propertytype)) echo "document.getElementById('property_type').value='".$default_propertytype."'";
        if (!empty($bedrooms_from)) echo "document.getElementById('bedrooms_from').value='".$bedrooms_from."'";
    ?>
</script>
