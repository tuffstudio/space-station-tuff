
<section class="properies section--bottom-space container container--space">
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

                <?php include 'wp-content/themes/space-station/templates/components/property-box.php'; ?>

            </div><!--

            --><?php
                    $i++;
                endwhile;
            ?>
        </div>
    </div>
</section>
