<section class="section properties section--bottom-space ">
    <div class="container container--space">
        <h3 class="title--default">
            Our commercial properties
        </h3>
        <div class="container--wider">
            <div class="grid">

                <?php 

                include dirname(__FILE__) . "/../../property_base/pb_commercial_request.php";

                foreach ($xmlResult->listings->listing as $item) : ?><!--
                    --><div class="grid__item tablet-small--one-half desktop--one-third masonry__box">
                            <?php include dirname(__FILE__) . '/../components/property-box.php'; ?>
                        </div><!--
                --><?php endforeach;?>


            </div>
        </div>
    </div>
</section>
