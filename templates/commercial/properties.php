<section class="section properties section--bottom-space ">
    <div class="container container--space">
        <h3 class="title--default">
            Our commercial properties
        </h3>
        <div class="container--wider">
            <div class="grid">

                <?php
                    $i = 0;
                    while ($i < 9) :
                ?><!--

                --><div class="grid__item tablet-small--one-half desktop--one-third masonry__box">

                    <?php include dirname(__FILE__) . '/../components/property-box.php'; ?>

                </div><!--

                --><?php
                        $i++;
                    endwhile;
                ?>
            </div>
        </div>
    </div>
</section>
