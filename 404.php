<section class="section bg--slant">
    <div class="container container--space">
        <h2 class="title--main">
            404 error
        </h2>
        <h1 class="headline--main">
            Oops, something went wrong
            <strong>not the page ou were looking for?</strong>
        </h1>

        <div class="grid grid--middle">
            <div class="grid__item tablet--two-thirds desktop--one-half">
                <p class="paragraph--default">
                    It seems we can't find what you're looking for, rem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>
            </div><!--
            --><div class="grid__item tablet--one-third desktop--one-half">
                <div class="btn-right-container">
                    <a href="<?= get_home_url(); ?>" class="btn btn--submit">
                        back to homepage
                    </a>
                    <a href="<?= get_home_url(); ?>/?s=" class="btn btn--brand">
                        search properties
                    </a>
                </div>
            </div>
        </div>
      </div>
</section>

<?php include('templates/homepage/stay-in-touch.php'); ?>
